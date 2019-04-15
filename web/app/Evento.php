<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Evento extends Model
{
  //referncia a la tabla que se va a utilizar
  protected $table = "eventos";

  public function anunciante(){
      return $this->hasOne('App\User','email','email');
 }
}
