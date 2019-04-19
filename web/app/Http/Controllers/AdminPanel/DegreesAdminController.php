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

    ## Funciones CRUD de Facultades
    //Función para la crear una nueva facultad en la base de datos.
    public function newFacultad(Request $request)
    {
        $facultad = new Facultad;
        $facultad->nombre = $request->get('newFacultad');  
        $facultad->save();
        return back()->with('success','Facultad creada exitosamente.');
    }

    //Función para editar una facultad seleccionada.
    public function editFacultad(Request $request, $idFacultad)
    {
        $facultad = Facultad::where('id', $idFacultad)->first();
        $facultad->nombre = $request->get('newNameFacultad');
        $facultad->save();
        return back()->with('success','Nombre de la facultad editado exitosamente.');
    }

    //Función para eliminar una facultad seleccionada de la base de datos.
    public function deleteFacultad($idFacultad)
    {
        Facultad::where('id', $idFacultad)->delete();
        return back()->with('success','Facultad eliminada exitosamente.');
    }

    ## Funciones CRUD de Carreras##
    //Función para la crear una nueva carreras en la base de datos.
    public function newCarrera(Request $request,$idFacultad)
    {
        $carrera = new Carrera;
        $carrera->facultad_id = $idFacultad;  
        $carrera->nombre = $request->get('newCarrera');  
        $carrera->save();
        return back()->with('success','Carrera creada exitosamente.');
    }

    //Función para editar una carrera seleccionada.
    public function editCarrera(Request $request, $idCarrera)
    {
        $carrera = Carrera::where('id', $idCarrera)->first();
        $carrera->nombre = $request->get('newNameCarrera');
        $carrera->save();
        return back()->with('success','Nombre de la carrera editado exitosamente.');
    }

    //Función para eliminar una carrera seleccionada de la base de datos.
    public function deleteCarrera($idCarrera)
    {
        Carrera::where('id', $idCarrera)->delete();
        return back()->with('success','Carrera eliminada exitosamente.');
    }

}
