<?php

namespace App\Http\Controllers;

use App\Events\EvaluationCompleted;
use App\Models\DictaminatorsResponseForm3_8;
use App\Models\UsersResponseForm3_8;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\DB;
use App\Traits\ValidatesDictaminatorPeriod;
class DictaminatorForm3_8Controller extends TransferController
{
    use ValidatesDictaminatorPeriod;
    
        public static function getValidationRules(): array
    {
        return [
                'dictaminador_id' => 'required|numeric',
                'user_id' => 'required|exists:users,id',
                'email' => 'required|exists:users,email',
                'score3_8' => 'required|numeric',
                'comision3_8' => 'required|numeric',
                'comisionDict3_8' => 'required|numeric',
                'puntaje3_8' => 'required|numeric',
                'puntajeHoras3_8' => 'required|numeric',
                'obs3_8_1' => 'nullable|string',
                'user_type' => 'required|in:user,docente,dictaminator',
        ];
    }

    public function storeform38(Request $request)
    {

        try {
            // 1. Obtener el ID del dictaminador autenticado y añadirlo al request.
            $dictaminadorId = \Auth::id();
            $request->merge(['dictaminador_id' => $dictaminadorId]);

            // 2. Llamar a la validación de fecha al inicio del método
            if ($error = $this->validateEvaluationPeriod($request, 'form3_8')) {
                return $error;
            }

            //3. validad formulario unico
             $this->validarFormularioUnico($request, 'dictaminators_response_form3_8');

            $validatedData = $request->validate(self::getValidationRules());

            if (!isset($validatedData['score3_8'])) {
                $validatedData['score3_8'] = 0;
            }
            $validatedData['obs3_8_1'] = trim($validatedData['obs3_8_1']) !== '' ? $validatedData['obs3_8_1'] : 'sin comentarios';

            // Agregar registro temporal para depuración
            \Log::info('Datos recibidos en storeform38:', $request->all());

            $validatedData['form_type'] = 'form3_8';

            $response = DictaminatorsResponseForm3_8::updateOrCreate(
                [
                    'dictaminador_id' => $dictaminadorId,
                    'user_id' => $validatedData['user_id']
                ],
                $validatedData
            );
            // Actualizar automáticamente el modelo docente con la comision
            $this->updateUserResponseComision($validatedData['user_id'], $validatedData['comision3_8']);
            DB::table('dictaminador_docente')->insert([
                //'dictaminador_form_id' => $response->id, // Asegúrate de que este ID exista
                'docente_id' => $validatedData['user_id'], // Asegúrate de que este ID exista
                'dictaminador_id' => $response->dictaminador_id,
                'form_type' => 'form3_8', // O el tipo de formulario correspondiente
                'docente_email' => $response->email,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
            $this->checkAndTransfer('DictaminatorsResponseForm3_8');

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
            ], 800);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'An unexpected error occurred: ' . $e->getMessage(),
            ], 800);
        }
    }

    public function getFormData38(Request $request)
    {
        try {
            $data = DictaminatorsResponseForm3_8::where('user_id', $request->query('user_id'))->first();
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
            ], 800);
        }

    }

    private function updateUserResponseComision($userId, $comisionValue)
    {
        // Buscar el registro de UsersResponseForm2 correspondiente y actualizar comision1
        $userResponse = UsersResponseForm3_8::where('user_id', $userId)->first();

        if ($userResponse) {
            $userResponse->comision3_8 = $comisionValue;
            $userResponse->save();
        }
    }

                public function showForm38($teacherEmail = null)
    {
        // Si se proporciona un email de docente en la URL, no necesitamos mostrar el buscador.
        // El script de autocompletado cargará los datos automáticamente.
        $showSearchComponent = is_null($teacherEmail);

        return view('form3_8', [
            'teacherEmailFromUrl' => $teacherEmail,
            'showSearch' => $showSearchComponent
        ]);
    }

        public function updateForm38(Request $request)
{
    // Validar los datos de entrada
    $validatedData = $request->validate(self::getValidationRules());

    try {
        // Buscar el registro existente por user_id y dictaminador_id
        $response = DictaminatorsResponseForm3_8::updateOrCreate(
            [
                'user_id' => $validatedData['user_id'],
                'dictaminador_id' => $validatedData['dictaminador_id'],
                'form_type' => $validatedData['form_type']
            ],
            $validatedData // Los datos con los que se actualizará o creará
        );

        return response()->json([
            'success' => true,
            'message' => 'Formulario actualizado correctamente.',
            'data' => $response
        ]);

    } catch (\Exception $e) {
        // Log del error para depuración
        \Log::error('Error al actualizar el formulario 3.8: ' . $e->getMessage());

        return response()->json([
            'success' => false,
            'message' => 'Ocurrió un error en el servidor al actualizar.'
        ], 500);
    }
}
}

