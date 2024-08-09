<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class Directeur
{
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check() && Auth::user()->isDirecteur) {
            return $next($request);
        }

        return redirect('/')->with('error', 'You do not have directeur access.');
    }
}
