<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Profile extends Model
{
  protected $table = "compraventa";

  /*$idc = \Auth::user()->carrera;
  $idusuario = \Auth::user()->id;
  $carreras = DB::table('carreras')->find($idc);
  $facultades = DB::table('facultades')
  ->join('users','facultades.id','=','users.facultad')
  ->where('users.id','=',$idusuario)->select('facultades.nombre')->first();
  return view('miPerfil',compact('facultades','carreras'));
  */




}
