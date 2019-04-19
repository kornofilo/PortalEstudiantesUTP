<?php

namespace App\Http\Controllers\AdminPanel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
//Importamos los modelos que vamos a utilizar
use App\Tutorias;
use App\Compraventa;
use App\Hospedaje;

class PostsModController extends Controller
{
    public function index()
    {
        $tutorias = Tutorias::where('estadoPost','En Moderación')->get();
        $compraVenta = Compraventa::where('estadoPost','En Moderación')->get();
        $hospedajes = Hospedaje::where('estadoPost','En Moderación')->get();
        return view('adminPanel.postsMod',compact('tutorias','compraVenta','hospedajes'));
    }

     ##Funciones para moderar publicaciones de Compra/Venta##
    //Función para aprobar una publicación de Compra/Venta.
    public function aprobarCyVPost($idCyVPost){
        $compraVenta = Compraventa::where('id', $idCyVPost)->first();
        $compraVenta->estadoPost = 'Aprobada';
        $compraVenta->save();
        return back()->with('success','Publicación de Compra/Venta aprobada exitosamente.');
    }

    //Función para rechazar una publicación de Tutoría.
    public function rechazarCyVPost($idCyVPost){
        $compraVenta = Compraventa::where('id', $idCyVPost)->first();
        $compraVenta->estadoPost = 'Rechazada';
        $compraVenta->save();
        return back()->with('success','Publicación de Compra/Venta rechazada exitosamente.');
    }

    ##Funciones para moderar publicaciones de Tutorías##
    //Función para aprobar una publicación de Tutoría.
    public function aprobarTutPost($idTutPost){
        $tutoria = Tutorias::where('id', $idTutPost)->first();
        $tutoria->estadoPost = 'Aprobada';
        $tutoria->save();
        return back()->with('success','Publicación de Tutoría aprobada exitosamente.');
    }

    //Función para rechazar una publicación de Tutoría.
    public function rechazarTutPost($idTutPost){
        $tutoria = Tutorias::where('id', $idTutPost)->first();
        $tutoria->estadoPost = 'Rechazada';
        $tutoria->save();
        return back()->with('success','Publicación de Tutoría rechazada exitosamente.');
    }

    ##Funciones para moderar publicaciones de Alquiler/Hospedaje##
    //Función para aprobar una publicación de Alquiler/Hospedaje.
    public function aprobarHosPost($idHosPost){
        $hospedaje = Hospedaje::where('id', $idHosPost)->first();
        $hospedaje->estadoPost = 'Aprobada';
        $hospedaje->save();
        return back()->with('success','Publicación de Alquiler/Hospedaje aprobada exitosamente.');
    }

    //Función para rechazar una publicación de Alquiler/Hospedaje.
    public function rechazarHosPost($idHosPost){
        $hospedaje = Hospedaje::where('id', $idHosPost)->first();
        $hospedaje->estadoPost = 'Rechazada';
        $hospedaje->save();
        return back()->with('success','Publicación de Alquiler/Hospedaje rechazada exitosamente.');
    }
}
