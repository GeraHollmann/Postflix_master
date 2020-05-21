<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use App\User;

class MiddlewareUsuarioLogueado
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
  if(Auth::guard($guard)->check()){
    switch(Auth::user()->role){
      case 'user':
        return $next($request);
          break;
      case 'admin':
        return $next($request);
          break;
        }
}
return redirect('./login');
    }
}
?>
