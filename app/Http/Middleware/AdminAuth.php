<?php

namespace App\Http\Middleware;

use Closure;
use App\Misc\AuthUser;
class AdminAuth
{
    use AuthUser;
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    private $redirectUrl = '/dashboard/login';
    
    public function handle($request, Closure $next)
    {
        if ($this->getAuthUser("admin") == null) {
           
                return redirect($this->redirectUrl);
        }
      
        
          return $next($request);
    }
}
