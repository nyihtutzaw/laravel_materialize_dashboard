<?php

namespace App\Http\Middleware;
use App\Service\AuthService;
use Closure;

class UserAuth
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
        if (AuthService::checkIfAuth($request))
        {
            return $next($request);
        }
        else 
        {
            return response()->json("You are not authrized");
        }
        
    }
}
