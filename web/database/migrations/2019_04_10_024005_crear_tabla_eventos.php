<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaEventos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eventos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('codigoPost',20)->unique();
            $table->string('titulo');
            $table->date('fecha');
            $table->string('lugar');
            $table->decimal('costo',6,2)->unsigned();
            $table->string('facultad_nomb');
            $table->text('descripcion');
            $table->string('imagen');
            $table->string('email',100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('eventos');
    }
}
