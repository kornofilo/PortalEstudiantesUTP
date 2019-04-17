<?php

namespace App\Http\Controllers\AdminPanel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
//Importamos los modelos que vamos a utilizar
use App\Facultad;
use App\Carrera;

class DegreesAdminController extends Controller
{
    public function index()
    {
        $facultades = Facultad::all();
        $carreras = Carrera::all()->sortBy("nombre");
        return view('adminPanel.degreesAdmin',compact('facultades','carreras'));
    }
}
