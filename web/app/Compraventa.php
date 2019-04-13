<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Compraventa extends Model
{
    //
    protected $table = "compraventa";

   

    public function anunciante(){
        return $this->hasOne('App\User','email','email');
   }
}
