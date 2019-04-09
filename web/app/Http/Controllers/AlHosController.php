<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlHosController extends Controller
{
    public function index()
  {
      return view('clasificado.alquilerhospedaje');
  }
}
