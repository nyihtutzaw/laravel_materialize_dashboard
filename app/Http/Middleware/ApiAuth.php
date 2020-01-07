<?php

namespace App\Http\Middleware;
use App\Service\UserService;
use Closure;

class ApiAuth
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
        if (UserService::getUserByToken($request->token))
        {
            return $next($request);
        }
        else 
        {
            return response()->json(array(
                "authorized"=>false
            ));
        }
        
    }
}
