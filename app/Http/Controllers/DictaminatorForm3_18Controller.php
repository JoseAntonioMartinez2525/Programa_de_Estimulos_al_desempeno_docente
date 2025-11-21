<?php

namespace App\Http\Controllers;

use App\Events\EvaluationCompleted;
use App\Models\DictaminatorsResponseForm3_18;
use App\Models\UsersResponseForm3_18;
use App\Traits\ValidatesDictaminatorPeriod;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\DB;
class DictaminatorForm3_18Controller extends TransferController
{
    use ValidatesDictaminatorPeriod;
    public function storeform318(Request $request)
    {
        
        try {
            // 1. Obtener el ID del dictaminador autenticado y añadirlo al request.
            $dictaminadorId = \Auth::id();
            $request->merge(['dictaminador_id' => $dictaminadorId]);

            // 2. Llamar a la validación de fecha al inicio del método
            if ($error = $this->validateEvaluationPeriod($request, 'form3_18')) {
                return $error;
            }

            $validatedData = $request->validate([
                'dictaminador_id' => 'required|numeric',
                'user_id' => 'required|exists:users,id',
                'email' => 'required|exists:users,email',
                'score3_18' => 'required|numeric',
                'comision3_18' => 'required|numeric',
                'cantComOrgInt' => 'required|numeric',
                'cantComOrgNac' => 'required|numeric',
                'cantComOrgReg' => 'required|numeric',
                'cantComApoyoInt' => 'required|numeric',
                'cantComApoyoNac' => 'required|numeric',
                'cantComApoyoReg' => 'required|numeric',
                'cantCicloComOrgInt' => 'required|numeric',
                'cantCicloComOrgNac' => 'required|numeric',
                'cantCicloComOrgReg' => 'required|numeric',
                'cantCicloComApoyoInt' => 'required|numeric',
                'cantCicloComApoyoNac' => 'required|numeric',
                'cantCicloComApoyoReg' => 'required|numeric',
                'subtotalComOrgInt' => 'required|numeric',
                'subtotalComOrgNac' => 'required|numeric',
                'subtotalComOrgReg' => 'required|numeric',
                'subtotalComApoyoInt' => 'required|numeric',
                'subtotalComApoyoNac' => 'required|numeric',
                'subtotalComApoyoReg' => 'required|numeric',
                'subtotalCicloComOrgInt' => 'required|numeric',
                'subtotalCicloComOrgNac' => 'required|numeric',
                'subtotalCicloComOrgReg' => 'required|numeric',
                'subtotalCicloComApoyoInt' => 'required|numeric',
                'subtotalCicloComApoyoNac' => 'required|numeric',
                'subtotalCicloComApoyoReg' => 'required|numeric',
                'comisionComOrgInt' => 'required|numeric',
                'comisionComOrgNac' => 'required|numeric',
                'comisionComOrgReg' => 'required|numeric',
                'comisionComApoyoInt' => 'required|numeric',
                'comisionComApoyoNac' => 'required|numeric',
                'comisionComApoyoReg' => 'required|numeric',
                'comisionCicloComOrgInt' => 'required|numeric',
                'comisionCicloComOrgNac' => 'required|numeric',
                'comisionCicloComOrgReg' => 'required|numeric',
                'comisionCicloComApoyoInt' => 'required|numeric',
                'comisionCicloComApoyoNac' => 'required|numeric',
                'comisionCicloComApoyoReg' => 'required|numeric',
                'obsComOrgInt' => 'nullable|string',
                'obsComOrgNac' => 'nullable|string',
                'obsComOrgReg' => 'nullable|string',
                'obsComApoyoInt' => 'nullable|string',
                'obsComApoyoNac' => 'nullable|string',
                'obsComApoyoReg' => 'nullable|string',
                'obsCicloComOrgInt' => 'nullable|string',
                'obsCicloComOrgNac' => 'nullable|string',
                'obsCicloComOrgReg' => 'nullable|string',
                'obsCicloComApoyoInt' => 'nullable|string',
                'obsCicloComApoyoNac' => 'nullable|string',
                'obsCicloComApoyoReg' => 'nullable|string',
                'user_type' => 'required|in:user,docente,dictaminator',
            ]);

            if (!isset($validatedData['score3_18'])) {
                $validatedData['score3_18'] = 0;
            }

            //observaciones
            $campos = ['obsComOrgInt', 'obsComOrgNac', 'obsComOrgReg', 'obsComApoyoInt', 'obsComApoyoNac', 'obsComApoyoReg', 'obsCicloComOrgInt', 'obsCicloComOrgNac', 'obsCicloComOrgReg', 'obsCicloComApoyoInt', 'obsCicloComApoyoNac', 'obsCicloComApoyoReg'];

            foreach ($campos as $campo) {
                $validatedData[$campo] = trim($validatedData[$campo]) !== '' ? $validatedData[$campo] : 'sin comentarios';
            }


            $validatedData['form_type'] = 'form3_18';
                // 3. VERIFICAR SI YA EXISTE UN REGISTRO PARA ESTE DICTAMINADOR Y DOCENTE
                $existingRecord = DictaminatorsResponseForm3_18::where('dictaminador_id', $dictaminadorId)
                    ->where('user_id', $validatedData['user_id'])
                    ->first();

                if ($existingRecord) {
                    return response()->json([
                        'success' => false,
                        'message' => 'Error al enviar, formulario ya existente'
                    ], 409);
                }            

            $response = DictaminatorsResponseForm3_18::updateOrCreate(
                [
                    'dictaminador_id' => $dictaminadorId,
                    'user_id' => $validatedData['user_id']
                ],
                $validatedData
            );

            // Actualizar automáticamente el modelo docente con la comision
            $this->updateUserResponseComision($validatedData['user_id'], $validatedData['comision3_18']);
            DB::table('dictaminador_docente')->insert([
                //'dictaminador_form_id' => $response->id, // Asegúrate de que este ID exista
                'docente_id' => $validatedData['user_id'], // Asegúrate de que este ID exista
                'dictaminador_id' => $response->dictaminador_id,
                'form_type' => 'form3_18', // O el tipo de formulario correspondiente
                'docente_email' => $response->email,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
            
            $this->checkAndTransfer('DictaminatorsResponseForm3_18');

            event(new EvaluationCompleted($validatedData['user_id']));
            return response()->json([
                'success' => true,
               'message' => 'Formulario enviado',
                'data' => $validatedData,
            ], 200);
        } catch (ValidationException $e) {
            return response()->json([
                'success' => false,
                'message' => 'Validation fallida',
                'errors' => $e->errors()
            ], 422);
        } catch (QueryException $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error al enviar, formulario ya existente',
            ], 500); // Cambiado de 1200 a 500
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'An unexpected error occurred: ' . $e->getMessage(),
            ], 500); // Cambiado de 1200 a 500
        }

    }

    public function getFormData318(Request $request)
    {
        try {
            $data = DictaminatorsResponseForm3_18::where('user_id', $request->query('user_id'))->first();
            if (!$data) {
                return response()->json([
                    'success' => false,
                    'message' => 'Data not found',
                ], 404);
            }

            return response()->json([
                'success' => true,
                'data' => $data
            ], 200);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'An error occurred while retrieving data: ' . $e->getMessage(),
            ], 500);
        }

    }

    private function updateUserResponseComision($userId, $comisionValue)
    {
        // Buscar el registro de UsersResponseForm2 correspondiente y actualizar comision1
        $userResponse = UsersResponseForm3_18::where('user_id', $userId)->first();

        if ($userResponse) {
            $userResponse->comision3_18 = $comisionValue;
            $userResponse->save();
        }
    }
}

