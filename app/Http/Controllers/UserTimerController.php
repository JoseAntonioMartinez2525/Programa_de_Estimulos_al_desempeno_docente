<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserTimer;
use Illuminate\Support\Facades\Auth;

class UserTimerController extends Controller
{
    // Obtener estado del timer
    public function getTimer() {
        $user = Auth::user();
        $timer = UserTimer::where('user_id', $user->id)->first();

        // Si no existe aún, responder con valores por defecto
        if (!$timer) {
            return response()->json([
                'user_id' => $user->id,
                'tiempo_restante' => 15 * 60,
                'expirado' => false,
                'updated_at' => now(),
            ]);
        }

        return response()->json([
            'user_id' => $user->id,
            'tiempo_restante' => (int) $timer->tiempo_restante,
            'expirado' => (bool) $timer->expirado,
            'updated_at' => $timer->updated_at,
        ]);
    }

    public function updateTimer(Request $request){
        $user = Auth::user();
        $timer = UserTimer::firstOrCreate(['user_id' => $user->id]);

        // 🔹 Si el timer expiró, no permitir que se reescriba con un valor mayor
        if (!$timer->expirado && $request->has('tiempo_restante')) {
            $timer->tiempo_restante = (int) $request->tiempo_restante;
        }

        if ($request->has('expirado')) {
            $timer->expirado = (bool) $request->expirado;
            if ($timer->expirado) {
                $timer->tiempo_restante = 0;
            }
        }

        $timer->save();
        return response()->json(['ok' => true]);
    }

    // Prórroga por admin
    public function extendTimer(Request $request, $userId)
    {

        $request->validate([
        'segundosExtra' => 'required|integer|min:1',
        ]);

        $timer = UserTimer::firstOrCreate(
            ['user_id' => $userId],
            ['tiempo_restante' => 0, 'expirado' => false]
        );

        // Asegurarnos de tener el dato más reciente desde la BD
        $timer->refresh();

        // Si el timer estaba expirado → reiniciar con los segundos nuevos
        if ($timer->expirado) {
            $timer->tiempo_restante = $request->segundosExtra;
        } else {
            $timer->tiempo_restante += $request->segundosExtra;
        }

        // $timer->tiempo_restante += $request->input('segundosExtra', 5*60); 
        $timer->expirado = false;
        $timer->save();

        return response()->json([
            'message' => 'Timer extendido correctamente',
            'tiempo_restante' => $timer->tiempo_restante,
        ]);
    }

}
