<?php

namespace App\Http\Middleware;

use Closure;

class playMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        echo "pruebaprueba";
        return $next($request);
    }
}
