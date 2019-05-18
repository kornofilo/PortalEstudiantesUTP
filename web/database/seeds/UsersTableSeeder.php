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
        //Obtenemos los roles del sitio web
        $adminRole = Role::where('name','administrador')->first();
        $modRole = Role::where('name','moderador')->first();
        $estudianteRole = Role::where('name','estudiante')->first();

        //Creamos un usuario administrador
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

        //Asignamos el rol de administrador al nuevo usuario
        $admin->roles()->attach($adminRole);
        
        //Creamos un nuevo usuario con el rol de moderador
        $mod = User::create([
            'email' => 'mod.portalE@utp.ac.pa',
            'nombre' => 'Moderador',
            'apellido' => 'Portal',
            'sede' => 'Chiriquí',
            'facultad' => '6',
            'carrera' => '52',
            'sexo' => 'Masculino',
            'password' => bcrypt('moderador'),
            'imagen' => 'default_avatar.png'
        ]);

        //Asignamos el rol de moderador al nuevo usuario
        $mod->roles()->attach($modRole);


    }
}
