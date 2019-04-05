<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class RegistroController extends Controller

{
  public function getFacultades()
   {
       $facultades = DB::table('facultades')->pluck("nombre","id");
       return view('auth.register',compact('facultades'));
   }

   public function getCarreras($id)
   {
       $carreras = DB::table("carreras")->where("facultades_id",$id)->pluck("nombre","id");
       return json_encode($carreras);
   }

}
