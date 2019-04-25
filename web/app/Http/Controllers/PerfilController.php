<?php

namespace App\Http\Controllers;
use App\Profile;
use App\User;
use DB;
use Illuminate\Http\Request;

class PerfilController extends Controller
{
  public function index()
  {
    //muestra los datos
    $datos = Profile::orderBy('id','desc')->get();
    $facultades = DB::table('facultades')->pluck("nombre","id");
    return view('Perfil.miPerfil')->with(compact('datos','facultades'));
  }

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
}
