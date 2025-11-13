<?php

namespace App\Http\Controllers;

use App\Models\EvaluationDate;
use App\Models\DocentesEvaluationDate;
use App\Models\EvaluadoresCapturDate;
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
                EvaluationDate::updateOrCreate(['type' => $type], $validated);
            } else {
                // Para los otros modelos, asumimos que solo guardan el último registro.
                $modelClass::latest()->first()?->delete();
                $modelClass::create($validated);
            }

            return response()->json(['success' => true, 'message' => 'Fechas guardadas correctamente']);
        } catch (ValidationException $e) {
            return response()->json(['success' => false, 'message' => 'Error de validación.', 'errors' => $e->errors()], 422);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => 'Ocurrió un error al guardar las fechas.'], 500);
        }
    }

    public function storeDocentesLlenado(Request $request)
    {
        return $this->storeDates($request, EvaluationDate::class, 'docentes_llenado');
    }

    public function storeDocentesEvaluacion(Request $request)
    {
        return $this->storeDates($request, DocentesEvaluationDate::class);
    }

    public function storeEvaluadoresCaptura(Request $request)
    {
        return $this->storeDates($request, EvaluadoresCapturDate::class);
    }

    public function getFechas()
    {
        return response()->json([
            'docentes_llenado' => EvaluationDate::where('type', 'docentes_llenado')->latest()->first(),
            'docentes_evaluacion' => DocentesEvaluationDate::latest()->first(),
            'evaluadores_captura' => EvaluadoresCapturDate::latest()->first(),
        ]);
    }
}