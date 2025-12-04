<?php

namespace App\Traits;

use Illuminate\Http\Request;

trait ValidatesDictaminatorPeriod
{
    /**
     * Valida si el período de evaluación está activo para el formulario especificado
     * 
     * @param Request $request
     * @param string $formType Tipo de formulario (form1, form2, form3, etc.)
     * @return \Illuminate\Http\JsonResponse|null Retorna respuesta JSON si hay error, null si es válido
     */
    public function validateEvaluationPeriod(Request $request, $formType)
    {
        try {
            // Verificar si el período de evaluación está activo para dictaminadores
            $isActive = $this->checkEvaluationPeriodIsActive();
            
            if (!$isActive) {
                return response()->json([
                    'success' => false,
                    'message' => 'Periodo de evaluacion no se encuentra activo'
                ], 403);
            }
            
            return null; // Retorna null si todo está bien
            
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error al validar el período: ' . $e->getMessage()
            ], 500);
        }
    }

    /**
     * Verifica si el período de evaluación está activo en la base de datos
     * Busca en docentes_evaluation_dates donde el tipo sea 'dictaminadores_capturando_datos'
     * 
     * @return bool
     */
    private function checkEvaluationPeriodIsActive()
    {
        $evaluationPeriod = \DB::table('docentes_evaluation_dates')
            ->where('type', 'dictaminadores_capturando_datos')
            ->where('start_date', '<=', now())
            ->where('end_date', '>=', now())
            ->first();
        
        return $evaluationPeriod !== null;
    }
}