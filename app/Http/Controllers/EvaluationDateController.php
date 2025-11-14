<?php

namespace App\Http\Controllers;

use App\Models\EvaluationDate;
use App\Models\DocentesEvaluationDate;
use App\Models\EvaluadoresCaptureDate;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class EvaluationDateController extends Controller
{
    private function storeDates(Request $request, $modelClass, $type = null)
    {
        try {
            $validated = $request->validate([
                'start_date' => 'required|date',
                'end_date' => 'required|date|after_or_equal:start_date',
            ]);

            if ($modelClass === EvaluationDate::class && $type) {
                // Fusionamos el 'type' con los datos validados para asegurarnos de que se guarde.
                EvaluationDate::updateOrCreate(
                    ['type' => $type], // Condición de búsqueda
                    array_merge($validated, ['type' => $type]) // Datos para guardar/actualizar
                );
            } elseif ($modelClass === DocentesEvaluationDate::class && $type) {
                // Asumimos que solo hay un registro, así que el primer argumento puede estar vacío.
                DocentesEvaluationDate::updateOrCreate( ['type' => $type], // Condición de búsqueda
                    array_merge($validated, ['type' => $type]) // Datos para guardar/actualizar
                );
            } elseif ($modelClass === EvaluadoresCaptureDate::class && $type) {
                EvaluadoresCaptureDate::updateOrCreate( ['type' => $type], // Condición de búsqueda
                    array_merge($validated, ['type' => $type]) // Datos para guardar/actualizar
                );
            } else {
                throw new \Exception("Tipo de modelo no manejado: " . $modelClass);
            }

            return response()->json(['success' => true, 'message' => 'Fechas guardadas correctamente']);
        } catch (ValidationException $e) {
            return response()->json(['success' => false, 'message' => 'Error de validación.', 'errors' => $e->errors()], 422);
        } catch (\Exception $e) {
            // Devuelve el mensaje de error real para depuración
            return response()->json([
                'success' => false, 
                'message' => $e->getMessage() // Esto nos dirá qué está fallando exactamente
            ], 500);
        }
    }

    public function storeDocentesLlenado(Request $request)
    {
        return $this->storeDates($request, EvaluationDate::class, 'docentes_llenado');
    }

    public function storeDocentesEvaluacion(Request $request)
    {
        return $this->storeDates($request, DocentesEvaluationDate::class,'dictaminadores_capturando_datos');
    }

    public function storeEvaluadoresCaptura(Request $request)
    {
        return $this->storeDates($request, EvaluadoresCaptureDate::class,'files_capture_dates');
    }

    public function getFechas()
    {
        return response()->json([
            'docentes_llenado' => EvaluationDate::where('type', 'docentes_llenado')->latest()->first(),
            'dictaminadores_capturando_datos' => DocentesEvaluationDate::where('type', 'dictaminadores_capturando_datos')->latest()->first(),
            'files_capture_dates' => EvaluadoresCaptureDate::where('type', 'files_capture_dates')->latest()->first(),
        ]);
    }
}