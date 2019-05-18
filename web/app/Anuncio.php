<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anuncio extends Model
{
   #referncia a la tabla que se va a utilizar
  protected $table = "compraVenta"; 

   public function anunciante(){
        return $this->hasOne('App\User','email','email');
   }
}
