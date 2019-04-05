<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\RegistersUsers;
class PerfilController extends Controller
{

  public function show()
  {
      return view('miPerfil');
  }

}

 ?>
