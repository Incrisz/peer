<?php

namespace App\Http\Middleware;

use Closure;

class Cors
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
        
        return $next($request)
        ->header('Access-Control-Allow-Origin', '*')
        ->header('Access-Control-Allow-Methods','GET', 'POST', 'PUT', 'PATCH', 'DELETE', 'OPTIONS')
        ->header('Access-Control-Allow-Headers', 'Authorization, Accept, Origin,  Keep-Alive,  X-Requested-With, Content-Type,  Access-Control-Allow-Origin,  Access-Control-Allow-Methods'); 
        
    }
}
