<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaBolsatrabajo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bolsaTrabajo', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('codigoPost',20)->unique();
            $table->string('urgente',2);
            $table->string('titulo');
            $table->string('ubicacion');
            $table->string('empresa',100);
            $table->string('tipoPuesto');
            $table->decimal('salario',6,2)->unsigned();
            $table->text('direccion');
            $table->text('descripcion');
            $table->text('habilidades');
            $table->date('fecha');
            $table->text('beneficio');
            $table->string('imagen')->default('post-placeholder.jpg');
            $table->string('email',100);
            $table->string('nombreContacto',30);
            $table->string('celular',9);
            $table->string('emailContacto',100);
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
        Schema::dropIfExists('bolsaTrabajo');
    }
}
