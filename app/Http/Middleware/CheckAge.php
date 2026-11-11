<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth; // <-- Importación añadida

class CheckAge
{
    public function handle(Request $request, Closure $next): Response
    {
        if (!Auth::check() || Auth::user()->age < 18) {
            return redirect('/panel')->with('error', 'Acceso denegado: Debes ser mayor de edad para entrar al casino.');
        }

        return $next($request);
    }
}