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
        Schema::create('hospedaje', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->string('categoria',25);
          $table->string('titulo');
          $table->string('ubicacion');
          $table->text('descripcion');
          $table->decimal('precio', 6, 2)->unsigned();
          $table->unsignedTinyInteger('estacionamiento');
          $table->unsignedTinyInteger('habitaciones');
          $table->unsignedTinyInteger('baños');
          $table->string('amueblado',2);
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
        Schema::dropIfExists('hospedaje');
    }
}
