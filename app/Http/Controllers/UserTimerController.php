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
        $timer = UserTimer::firstOrCreate(
            ['user_id' => $user->id],
            ['tiempo_restante' => 15*60, 'expirado' => false]
        );
        return response()->json([
            'user_id' => $user->id,
            'tiempo_restante' => $timer->tiempo_restante,
            'expirado' => $timer->expirado,
            'updated_at' => $timer->updated_at, // verificar sincronización
            'initial_time' => 15 * 60 
        ]);
    }

    public function updateTimer(Request $request){
        $user = Auth::user();
        $timer = UserTimer::firstOrCreate(['user_id' => $user->id]);

        if ($request->has('tiempo_restante')) {
            $nuevoTiempo = max($timer->tiempo_restante, $request->tiempo_restante);
            $timer->tiempo_restante = $nuevoTiempo;
        }

        if ($request->has('expirado')) {
            $timer->expirado = $request->expirado;
        }

        $timer->save();
    }

    // Prórroga por admin
    public function extendTimer(Request $request, $userId)
    {
        $timer = UserTimer::firstOrCreate(
            ['user_id' => $userId],
            ['tiempo_restante' => 0, 'expirado' => false]
        );

        $timer->tiempo_restante += $request->input('segundosExtra', 5*60);        $timer->expirado = false;
        $timer->save();

        return response()->json([
            'message' => 'Timer extendido correctamente',
            'tiempo_restante' => $timer->tiempo_restante,
        ]);
    }

}
