<?php

namespace App\Http\Middleware;

use Closure;
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
    public function handle($request, Closure $next)
    {
      if (App\User::find('role') == 'user') {
        return $next($request);
      }else{
        return redirect('/login');
      }

    }
}
