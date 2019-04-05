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
        DB::table('facultades')->insert(['nombre' => 'Ciencias y Tecnología']);
        DB::table('facultades')->insert(['nombre' => 'Ingeniería Civil']);
        DB::table('facultades')->insert(['nombre' => 'Ingeniería Eléctrica']);
        DB::table('facultades')->insert(['nombre' => 'Ingeniería Industrial']);
        DB::table('facultades')->insert(['nombre' => 'Ingeniería Mecánica']);
        DB::table('facultades')->insert(['nombre' => 'Ingeniería de Sistemas Computacionales']);
    }
}
