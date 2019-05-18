<?php

use Illuminate\Database\Seeder;

//Especificamos que utilizaremos el modelo Role
use App\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Creamos los roles del sitio web
        Role::create(['name' => 'Estudiante']);
        Role::create(['name' => 'Moderador']);
        Role::create(['name' => 'Administrador']);
    }
}
