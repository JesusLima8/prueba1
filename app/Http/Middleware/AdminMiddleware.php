<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next)
    {
        // Asegúrate de que el usuario esté autenticado y que su rol sea 'admin'
        if (auth()->check() && auth()->user()->role === 'admin') {
            return $next($request);
        }

        return redirect('/')->with('error', 'No tienes permisos suficientes para acceder a esta sección.');
    }
}

