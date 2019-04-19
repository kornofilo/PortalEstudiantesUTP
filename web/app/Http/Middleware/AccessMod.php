<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class AccessMod
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
        //Verificamos si el usuario cuenta con el rol de administrador o moderador.
        if(Auth::user()->hasAnyRole('Administrador') || Auth::user()->hasAnyRole('Moderador')){
            //Si el usuario cuenta con el rol de administrador o moderador, aceptamos el request
            return $next($request);
        }
        //Si usuario no cuenta con el rol de administrador o moderador, lo redirigimos a la página principal.
        return redirect('/');
    }
}
