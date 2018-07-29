<?php

namespace App\Http\Middleware;

use Closure;

class Cors
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        return $next($request)
            ->header('Allow-Control-Allow-Origin', '*')
            ->header('Allow-Control-Allow-Methods', 'GET,POST')
            ->header('Allow-Control-Allow-Headers', 'Content-Type,Authorization');
    }
}
