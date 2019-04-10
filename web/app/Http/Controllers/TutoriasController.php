<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TutoriasController extends Controller
{
  public function index()
  {
      return view('clasificado.tutorias');
  }
}
