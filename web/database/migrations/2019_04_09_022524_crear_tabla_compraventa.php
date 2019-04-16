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
    Schema::create('compraventa', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->string('codigoPost',20)->unique();
      $table->string('categoria');
      $table->string('nombreArt');
      $table->decimal('precio', 6, 2)->unsigned();
      $table->string('estado',5);
      $table->text('descripcion');
      $table->string('imagen');
      $table->string('celular',9);
      $table->string('nombre',30);
      $table->string('email',100);
      $table->timestamps();

      //Foreing Keys
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
    Schema::dropIfExists('compraventa');
  }
}
