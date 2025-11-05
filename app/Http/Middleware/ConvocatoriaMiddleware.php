<?php

namespace App\Http\Middleware;

use App\Models\User;
use App\Models\UsersResponseForm1;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class ConvocatoriaMiddleware
{
    public function handle($request, Closure $next)
    {
    if (Auth::check()) {
        $user = Auth::user();
    } elseif ($request->has('email')) {
        $user = User::where('email', $request->email)->first();
    }

    if ($user) {
        $form1 = UsersResponseForm1::where('user_id', $user->id)->first();
        view()->share('convocatoria', $form1?->convocatoria);
    }

        return $next($request);
    }
}
