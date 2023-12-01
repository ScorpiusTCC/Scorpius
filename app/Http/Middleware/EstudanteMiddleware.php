<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class EstudanteMiddleware
{
    public function handle($request, Closure $next)
    {
        if (Auth::check() && Auth::user()->tipo === 'estudante') {
            return $next($request);
        }

        return redirect()->route('index');
    }
}
