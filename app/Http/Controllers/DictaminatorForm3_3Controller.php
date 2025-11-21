<?php

namespace App\Http\Controllers;

use App\Events\EvaluationCompleted;
use App\Models\DictaminatorsResponseForm3_3;
use App\Models\UsersResponseForm3_3;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;
use App\Traits\ValidatesDictaminatorPeriod;
class DictaminatorForm3_3Controller extends TransferController
{
    use ValidatesDictaminatorPeriod;
    public function storeform33(Request $request)
    {

        try {
            // 1. Obtener el ID del dictaminador autenticado y añadirlo al request.
            $dictaminadorId = \Auth::id();
            $request->merge(['dictaminador_id' => $dictaminadorId]);

            // 2. Llamar a la validación de fecha al inicio del método
            if ($error = $this->validateEvaluationPeriod($request, 'form3_3')) {
                return $error;
            }

            //3. validad formulario unico
             $this->validarFormularioUnico($request, 'dictaminators_response_form3_3');
                
            $validatedData = $request->validate([
                'dictaminador_id' => 'required|numeric',
                'user_id' => 'required|exists:users,id',
                'email' => 'required|exists:users,email',
                'score3_3' => 'required|numeric',
                'comision3_3' => 'required|numeric',
                'rc1' => 'required|numeric',
                'rc2' => 'required|numeric',
                'rc3' => 'required|numeric',
                'rc4' => 'required|numeric',
                'stotal1' => 'required|numeric',
                'stotal2' => 'required|numeric',
                'stotal3' => 'required|numeric',
                'stotal4' => 'required|numeric',
                'comIncisoA' => 'required|numeric',
                'comIncisoB' => 'required|numeric',
                'comIncisoC' => 'required|numeric',
                'comIncisoD' => 'required|numeric',
                'obs3_3_1' => 'nullable|string',
                'obs3_3_2' => 'nullable|string',
                'obs3_3_3' => 'nullable|string',
                'obs3_3_4' => 'nullable|string',               
                'user_type' => 'required|in:user,docente,dictaminator',
            ]);

            $validatedData['form_type'] = 'form3_3';


            if (!isset($validatedData['score3_3'])) {
                $validatedData['score3_3'] = 0;
            }

            $campos = ['obs3_3_1', 'obs3_3_2', 'obs3_3_3', 'obs3_3_4'];

            foreach ($campos as $campo) {
                $validatedData[$campo] = trim($validatedData[$campo]) !== '' ? $validatedData[$campo] : 'sin comentarios';
            }

            $response = DictaminatorsResponseForm3_3::updateOrCreate(
                [
                    'dictaminador_id' => $dictaminadorId,
                    'user_id' => $validatedData['user_id']
                ],
                $validatedData
            );
            // Actualizar automáticamente el modelo docente con la comision
            $this->updateUserResponseComision($validatedData['user_id'], $validatedData['comision3_3']);
           
                // Agregar a dictaminador_docente
                DB::table('dictaminador_docente')->updateOrInsert(
                    [
                        'docente_id' => $validatedData['user_id'],
                        'dictaminador_id' => $response->dictaminador_id,
                        'form_type' => 'form3_3',
                    ],
                    [
                        'docente_email' => $response->email,
                        'updated_at' => now(),
                ]);
            
            $this->checkAndTransfer('DictaminatorsResponseForm3_3');

            event(new EvaluationCompleted($validatedData['user_id']));
            
            return response()->json([
                        'success' => true,
                        'message' => 'Formulario enviado',
                        'data' => $validatedData
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
            ], 500);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'An unexpected error occurred: ' . $e->getMessage(),
            ], 500);
        }
    }

    public function getFormData33(Request $request)
    {
        try {
            $data = DictaminatorsResponseForm3_3::where('user_id', $request->query('user_id'))->first();
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
        $userResponse = UsersResponseForm3_3::where('user_id', $userId)->first();

        if ($userResponse) {
            $userResponse->comision3_3 = $comisionValue;
            $userResponse->save();
        }
    }
}

