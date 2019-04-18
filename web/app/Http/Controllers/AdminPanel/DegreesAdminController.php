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
        $facultades = Facultad::all()->sortBy('nombre');
        $carreras = Carrera::all()->sortBy("nombre");
        return view('adminPanel.degreesAdmin',compact('facultades','carreras'));
    }

    public function newFacultad(Request $request)
    {
        $facultad = new Facultad;
        $facultad->nombre = $request->get('newFacultad');  
        $facultad->save();
        return back()->with('success','Facultad creada exitosamente.');
    }

    public function editFacultad(Request $request, $idFacultad)
    {
        $facultad = Facultad::where('id', $idFacultad)->first();
        $facultad->nombre = $request->get('newNameFacultad');
        $facultad->save();
        return back()->with('success','Nombre de la facultad editado exitosamente.');
    }

    public function deleteFacultad($idFacultad)
    {
        Facultad::where('id', $idFacultad)->delete();
        return back()->with('success','Facultad eliminada exitosamente.');
    }
}
