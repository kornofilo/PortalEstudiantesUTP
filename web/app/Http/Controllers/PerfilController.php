<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\RegistersUsers;
use DB;
class PerfilController extends Controller
{



  public function show()
  {
      $idc = \Auth::user()->carrera;
      $idusuario = \Auth::user()->id;
      $carreras = DB::table('carreras')->find($idc);
      $facultades = DB::table('facultades')
      ->join('users','facultades.id','=','users.facultad')
    //  ->join('users','carreras.id','=','users.carrera')
      ->where('users.id','=',$idusuario)->select('facultades.nombre')->first();
      return view('miPerfil',compact('facultades','carreras'));
  }

}

 ?>
