<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VerifyAdminPrivileges
{
    public function handle(Request $request, Closure $next)
    {
        $user = Auth::user();

        // Si no está autenticado
        if (!$user) {
            return redirect()->route('login');
        }

        // Si es docente, le negamos el acceso
        if ($user->user_type === 'docente') {
            abort(403, 'Solo administradores o dictaminadores pueden prorrogar el tiempo.');
        }

        // Si pasa las validaciones, continúa
        return $next($request);
    }
}
