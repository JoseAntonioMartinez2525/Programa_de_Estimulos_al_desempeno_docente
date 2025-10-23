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
            'tiempo_restante' => $timer->tiempo_restante,
            'expirado' => $timer->expirado
        ]);
    }

    public function updateTimer(Request $request){
        $user = Auth::user();
        $timer = UserTimer::updateOrCreate(
            ['user_id' => $user->id],
            [
                'tiempo_restante' => $request->tiempo_restante,
                'expirado' => $request->expirado
            ]
        );
        return response()->json(['success' => true]);
    }

    // Prórroga por admin
    public function extendTimer(Request $request, $userId)
    {
        $timer = UserTimer::where('user_id', $userId)->first();
        if (!$timer) return response()->json(['error'=>'Timer no encontrado'],404);

        $timer->tiempo_restante = $request->input('tiempo_restante', 5*60);
        $timer->expirado = false;
        $timer->save();

        return response()->json($timer);
    }
}
