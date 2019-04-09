<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaCompraventa extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {
    Schema::create('anuncios', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->string('categoria');
      $table->string('nombart');
      $table->decimal('precio', 3, 2);
      $table->string('estado');
      $table->string('descripcion');
      $table->string('imagen');
      $table->string('celular');
      $table->string('nombconta');
      $table->string('email')->unique();
      $table->timestamps();
      $table->foreign('email')->references('email')->on('users')->onDelete('cascade');
    });
  }

  /**
  * Reverse the migrations.
  *
  * @return void
  */
  public function down()
  {
    Schema::dropIfExists('anuncios');
  }
}
