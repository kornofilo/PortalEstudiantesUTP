<?php

namespace App\Http\Controllers;
use App\Compraventa;
use App\Tutorias;
use App\Evento;
use App\Bolsatrabajo;
use App\Hospedaje;
use App\User;
use DB;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Request as Rquest;
use Illuminate\Pagination\Paginator;
class PerfilController extends Controller
{
  public function index()
  {
    //muestra los datos en el perfil
    $datosE = Evento::where('email', auth()->user()->email)->latest()->get();
    $datosB = Bolsatrabajo::where('email', auth()->user()->email)->latest()->get();
    $datosH = Hospedaje::where('email', auth()->user()->email)->latest()->get();
    $datosT = Tutorias::where('email', auth()->user()->email)->latest()->get();
    $datos = Compraventa::where('email', auth()->user()->email)->latest()->get();
    $facultades = DB::table('facultades')->pluck("nombre","id");
    return view('Perfil.miPerfil', compact('datos','facultades','datosT','datosB','datosE','datosH'));
  }
 /**
  * Show the form for editing the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */


   public function getCarreras($id)
   {
       $carreras = DB::table("carreras")->where("facultad_id",$id)->pluck("nombre","id");
       return json_encode($carreras);
   }

   public function updateProfile(Request $request){

    $miPerfil = User::where('id', auth()->user()->id)->first();
    $miPerfil->nombre = $request->get('nombre');
    $miPerfil->apellido = $request->get('apellido');
    $miPerfil->sexo = $request->get('sexo');
    $miPerfil->sede = $request->get('sede');
    $miPerfil->facultad = $request->get('facultad');
    $miPerfil->carrera = $request->get('carrera');

    //Si el usuario ingresó una imagen para actualizar la de su perfil, subimos la nueva imagen al servidor.
    if($request->hasFile('imagenPerfil')){
      $profileImage = $request->file('imagenPerfil');
      $name_image = 'profileImage'.'.'.$request->imagenPerfil->extension();
      $profileImage->move(public_path().'/imagenes/profileImages/'.auth()->user()->email.'/',$name_image);
      $miPerfil->imagen = $name_image;
    }
    $miPerfil->save();
    return back()->with('success','Perfil Actualizado.');
   }

   //Función que obtiene los datos de un determinado un usuario para mostrarlo en su perfil.
   public function verPerfil($email)
   {
     $userData = User::select('users.email','users.nombre as nombre','users.apellido','users.sede','users.imagen','facultades.nombre as facultad','carreras.nombre as carrera')
                     ->join('carreras', 'users.carrera', '=', 'carreras.id')
                     ->join('facultades', 'users.facultad', '=', 'facultades.id')
                     ->where('users.email', $email)
                     ->first();

      $userRole = User::where('email', $email)->first()->roles()->value('name');

      $eventos = Evento::where('email', $email)->latest()->paginate(5, ['*'], 'eventos');
      $vacantes = Bolsatrabajo::where('email', $email)->latest()->paginate(5, ['*'], 'bolsaTrabajo');
      $anuncios = Compraventa::where('email', $email)->where('estadoPost','Aprobada')->paginate(5, ['*'], 'compraVenta');
      $hospedajes = Hospedaje::where('email', $email)->where('estadoPost','Aprobada')->latest()->paginate(5, ['*'], 'alquilerHospedaje');
      $tutorias = Tutorias::where('email', $email)->where('estadoPost','Aprobada')->paginate(5, ['*'], 'tutorias');
      return view('Perfil.OtroPerfil',compact('userData','userRole','eventos','tutorias','vacantes','anuncios','hospedajes'));
   }
}
