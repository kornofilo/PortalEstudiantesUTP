<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hospedaje extends Model
{
  #Le dice al controlador cuales tablas va a usar
  protected $tabla = "hospedajes";
}
