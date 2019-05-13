<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
#llamar al modal
use App\Tutorias;
use App\Hospedaje;
use App\Compraventa;

use App\Evento;
use App\Bolsatrabajo;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $datosB = Bolsatrabajo::latest()->take(5) ->get();
        $datosE = Evento::latest()->take(5)->get();
        $datosC = Compraventa::where('estadoPost','Aprobada')->latest()->take(5) ->get();
        $datosT = Tutorias::where('estadoPost','Aprobada')->latest()->take(5) ->get();
        $datosH = Hospedaje::where('estadoPost','Aprobada')->latest()->take(5) ->get();
        return view('Homes.homes',compact('datosB','datosE','datosC','datosT','datosH'));
    }
}
