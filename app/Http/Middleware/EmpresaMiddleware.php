<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class EmpresaMiddleware
{
    public function handle($request, Closure $next)
    {
        if (Auth::check() && Auth::user()->tipo === 'empresa') {
            return $next($request);
        }

        return redirect()->route('index');
    }
}