<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaTutorias extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tutorias', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('titulo');
            $table->string('nomtutor',50);
            $table->string('materia',50);
            $table->decimal('costo', 4, 2)->unsigned();
            $table->string('ubicacion');
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
        Schema::dropIfExists('tutorias');
    }
}
