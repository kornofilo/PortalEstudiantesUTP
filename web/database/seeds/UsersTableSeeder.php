<?php

use Illuminate\Database\Seeder;

//Especificamos que utilizaremos los modelos User y Role
use App\User;
use App\Role;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adminRole = Role::where('name','administrador')->first();

        $admin = User::create([
            'email' => 'admin.portalE@utp.ac.pa',
            'nombre' => 'admin',
            'apellido' => 'admin',
            'sede' => 'Chiriquí',
            'facultad' => '6',
            'carrera' => '52',
            'sexo' => 'Femenino',
            'password' => bcrypt('admin'),
            'imagen' => 'default_avatar.png'
        ]);
        //Asignamos el rol de administradol al nuevo usuario
        $admin->roles()->attach($adminRole);

    }
}
