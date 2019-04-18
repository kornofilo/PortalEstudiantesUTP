<?php

use Illuminate\Database\Seeder;

class FacultadesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Insertamos las facultades de la universidad en la base de datos
        DB::table('facultades')->insert(['nombre' => 'Facultad de Ciencias y Tecnología']);
        DB::table('facultades')->insert(['nombre' => 'Facultad de Ingeniería Civil']);
        DB::table('facultades')->insert(['nombre' => 'Facultad de Ingeniería Eléctrica']);
        DB::table('facultades')->insert(['nombre' => 'Facultad de Ingeniería Industrial']);
        DB::table('facultades')->insert(['nombre' => 'Facultad de Ingeniería Mecánica']);
        DB::table('facultades')->insert(['nombre' => 'Facultad de Ingeniería de Sistemas Computacionales']);
    }
}
