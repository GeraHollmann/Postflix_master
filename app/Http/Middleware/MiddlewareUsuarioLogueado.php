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
    public function handle($request, Closure $next)
    {
      if (User::find('role') == 'user') {
        return $next($request);
      }else{
        ?> <script src="alert.js"></script> <?php
        return redirect('/login');
      }

    }
}
?>
