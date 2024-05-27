<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckRole
{

    public function handle(Request $request, Closure $next)
    {

        return $next($request);
    }

    // public function handle(Request $request, Closure $next, ...$roles)
    // {
    //     if (!Auth::check() || !in_array(Auth::user()->role, $roles)) {
    //         // Redirect if the user does not have the correct role
    //         return redirect('/');
    //     }

    //     return $next($request);
    // }
}
