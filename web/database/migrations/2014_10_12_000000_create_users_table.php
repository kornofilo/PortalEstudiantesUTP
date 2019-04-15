<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Tabla de usuarios
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('email',100)->unique();
            $table->string('nombre',30);
            $table->string('apellido',30);
            $table->string('sede',20);
            $table->integer('facultad');
            $table->integer('carrera');
            $table->string('sexo',9);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('imagen')->default('default_avatar.png');
            $table->rememberToken();
            $table->timestamps();
            $table->string('estado')->default('Activo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
