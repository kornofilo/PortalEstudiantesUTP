<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class AccessAdmin
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
        //Verificamos si el usuario cuenta con el rol de administrador.
        if(Auth::user()->hasAnyRole('Administrador')){
            //Si el usuario cuenta con el rol de administrador, aceptamos el request
            return $next($request);
        }
        //Si usuario no cuenta con el rol de administrador, lo redirigimos a la página principal.
        return redirect('/');
        
    }
}
