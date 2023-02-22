<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Middleware\Authenticate;
use Symfony\Component\HttpFoundation\Response;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next)
    {

    if (!auth()->check() || !auth()->user()->hasRole('admin')) {
        abort(403, 'Unauthorized access.');
    }

    return $next($request);
    }
}
