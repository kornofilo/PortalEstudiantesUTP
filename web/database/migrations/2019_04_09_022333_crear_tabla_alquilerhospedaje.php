<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaAlquilerhospedaje extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alqhos', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->string('categoria');
          $table->string('titulo');
          $table->string('ubicacion');
          $table->string('descripcion');
          $table->decimal('precio', 3, 2);
          $table->string('estacionamiento');
          $table->integer('habitaciones');
          $table->integer('baños');
          $table->string('amueblado');
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
        Schema::dropIfExists('alqhos');
    }
}
