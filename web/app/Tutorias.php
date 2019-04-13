<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tutorias extends Model
{
  protected $fillable = ['titulo', 'nomtutor', 'materia','costo','ubicacion','descripcion','imagen',
'celular','nombre','email'];
}
