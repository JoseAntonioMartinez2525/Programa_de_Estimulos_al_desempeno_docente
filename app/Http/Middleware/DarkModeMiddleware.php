<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class DarkModeMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $isDarkMode = session('dark_mode', false);

        view()->share('darkMode', $isDarkMode);
        view()->share('bodyClass', $isDarkMode ? 'dark-mode' : 'light-mode');

        return $next($request);
    }
}
