<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\UserTimer;
use Symfony\Component\HttpFoundation\Response;

class CheckTimer
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Primero, verifica si el usuario está autenticado
        if (!Auth::check()) {
            return redirect('/login'); // O cualquier otra acción si no está autenticado
        }

        $user = Auth::user();
        $timer = UserTimer::where('user_id', $user->id)->first();

        if ($timer && $timer->expirado) {
            // Redirige al usuario a una página de "tiempo expirado" o muestra un mensaje
            return redirect('/tiempo-expirado')->with('message', 'Su tiempo para completar el formulario ha expirado.');
        }

        return $next($request);
    }
}