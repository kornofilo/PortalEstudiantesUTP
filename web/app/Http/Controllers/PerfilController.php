<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\RegistersUsers;
use DB;
class PerfilController extends Controller
{



  public function show()
  {
      $idusuario = \Auth::user()->id;
      $facultades = DB::table('facultades')
      ->join('users','facultades.id','=','users.facultad')
      ->where('users.id','=',$idusuario)->select('facultades.nombre')->first();
      //dd($facultades);
      return view('miPerfil',compact('facultades'));
  }

}

 ?>
