<?php

namespace App\Http\Controllers;
use App\Profile;
use Illuminate\Http\Request;

class PerfilController extends Controller
{
  public function index()
  {
  //muestra los datos
  $datos = Profile::orderBy('id','desc')->get();

  return view('Perfil.miPerfil')->with(compact('datos'));
  }
}
