<?php

namespace App\Http\Middleware;

use Closure;
use Auth;


class CheckUserStatus
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
        //Si el usuario se encuentra baneado, se le cerrará su sesión y se redirigirá a la vista que le notifica el estado de su cuenta.
        if(Auth::user()->estado == 'Baneado'){
            Auth::logout();
            return redirect('/banned');
        }
        return $next($request);
    }
}
