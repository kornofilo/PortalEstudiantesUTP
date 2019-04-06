<?php

use Illuminate\Database\Seeder;

class CarrerasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Insertamos las carreras de la universidad en la base de datos
            //Carreras de la Facultad de Ciencias y Tecnología
            DB::table('carreras')->insert(['facultad_id' => '1','nombre' => 'Licenciatura en Comunicación Ejecutiva Bilingüe']);
            DB::table('carreras')->insert(['facultad_id' => '1','nombre' => 'Licenciatura en Ingeniería Forestal']);
            DB::table('carreras')->insert(['facultad_id' => '1','nombre' => 'Licenciatura en Ingeniería en Alimentos']);

            //Carreras de la Facultad de Ingeniería Civil
            DB::table('carreras')->insert(['facultad_id' => '2','nombre' => 'Licenciatura en Ingeniería Ambiental']);
            DB::table('carreras')->insert(['facultad_id' => '2','nombre' => 'Licenciatura en Ingeniería Civil']);
            DB::table('carreras')->insert(['facultad_id' => '2','nombre' => 'Licenciatura en Ingeniería Geomática']);
            DB::table('carreras')->insert(['facultad_id' => '2','nombre' => 'Licenciatura en Ingeniería Marítima Portuaria']);
            DB::table('carreras')->insert(['facultad_id' => '2','nombre' => 'Licenciatura en Ingeniería Geológica']);
            DB::table('carreras')->insert(['facultad_id' => '2','nombre' => 'Licenciatura en Operaciones Marítimas y Portuarias']);
            DB::table('carreras')->insert(['facultad_id' => '2','nombre' => 'Licenciatura en Dibujo Automatizado']);
            DB::table('carreras')->insert(['facultad_id' => '2','nombre' => 'Licenciatura en Edificaciones']);
            DB::table('carreras')->insert(['facultad_id' => '2','nombre' => 'Licenciatura en Saneamiento y Ambiente']);
            DB::table('carreras')->insert(['facultad_id' => '2','nombre' => 'Licenciatura en Topografía']);

            //Carreras de la Facultad de Ingeniería Eléctrica
            DB::table('carreras')->insert(['facultad_id' => '3','nombre' => 'Licenciatura en Ingeniería Eléctrica y Electrónica']);
            DB::table('carreras')->insert(['facultad_id' => '3','nombre' => 'Licenciatura en Ingeniería Eléctrica']);
            DB::table('carreras')->insert(['facultad_id' => '3','nombre' => 'Licenciatura en Ingeniería Electrónica']);
            DB::table('carreras')->insert(['facultad_id' => '3','nombre' => 'Licenciatura en Ingeniería Electromecánica']);
            DB::table('carreras')->insert(['facultad_id' => '3','nombre' => 'Licenciatura en Ingeniería en Telecomunicaciones']);
            DB::table('carreras')->insert(['facultad_id' => '3','nombre' => 'Licenciatura en Ingeniería Electrónica y Telecomunicaciones']);
            DB::table('carreras')->insert(['facultad_id' => '3','nombre' => 'Licenciatura en Ingeniería de Control y Automatización']);
            DB::table('carreras')->insert(['facultad_id' => '3','nombre' => 'Licenciatura en Electrónica y Sistemas de Comunicación']);
            DB::table('carreras')->insert(['facultad_id' => '3','nombre' => 'Licenciatura en Sistemas Eléctricos y Automatización']);
            DB::table('carreras')->insert(['facultad_id' => '3','nombre' => 'Técnico en Ingeniería con especialización en Autotrónica']);
            DB::table('carreras')->insert(['facultad_id' => '3','nombre' => 'Técnico en Ingeniería con especialización en Electrónica Biomédica']);
            DB::table('carreras')->insert(['facultad_id' => '3','nombre' => 'Técnico en Ingeniería con especialización en Sistemas Eléctricos']);
            DB::table('carreras')->insert(['facultad_id' => '3','nombre' => 'Técnico en Ingeniería con especialización en Telecomunicaciones']);

            //Carreras de la Facultad de Ingeniería Industrial
            DB::table('carreras')->insert(['facultad_id' => '4','nombre' => 'Licenciatura en Ingeniería Industrial']);
            DB::table('carreras')->insert(['facultad_id' => '4','nombre' => 'Licenciatura en Ingeniería Mecánica Industrial']);
            DB::table('carreras')->insert(['facultad_id' => '4','nombre' => 'Licenciatura en Ingeniería Logística y Cadena de Suministro']);
            DB::table('carreras')->insert(['facultad_id' => '4','nombre' => 'Licenciatura en Recursos Humanos y Gestión de la Productividad']);
            DB::table('carreras')->insert(['facultad_id' => '4','nombre' => 'Licenciatura en Mercadeo y Comercio Internacional']);
            DB::table('carreras')->insert(['facultad_id' => '4','nombre' => 'Licenciatura en Mercadeo y Negocios Internacionales']);
            DB::table('carreras')->insert(['facultad_id' => '4','nombre' => 'Licenciatura en Gestión Administrativa']);
            DB::table('carreras')->insert(['facultad_id' => '4','nombre' => 'Licenciatura en Gestión de la Producción Industrial']);
            DB::table('carreras')->insert(['facultad_id' => '4','nombre' => 'Licenciatura en Logística y Transporte Multimodal']);

            //Carreras de la Facultad de Ingeniería Mecánica
            DB::table('carreras')->insert(['facultad_id' => '5','nombre' => 'Licenciatura en Ingeniería Mecánica']);
            DB::table('carreras')->insert(['facultad_id' => '5','nombre' => 'Licenciatura en Ingeniería de Mantenimiento']);
            DB::table('carreras')->insert(['facultad_id' => '5','nombre' => 'Licenciatura en Ingeniería de Energía y Ambiente']);
            DB::table('carreras')->insert(['facultad_id' => '5','nombre' => 'Licenciatura en Ingeniería Naval']);
            DB::table('carreras')->insert(['facultad_id' => '5','nombre' => 'Licenciatura en Ingeniería Aeronáutica']);
            DB::table('carreras')->insert(['facultad_id' => '5','nombre' => 'Licenciatura en Administración de Aviación']);
            DB::table('carreras')->insert(['facultad_id' => '5','nombre' => 'Licenciatura en Administración de Aviación con opción a vuelo']);
            DB::table('carreras')->insert(['facultad_id' => '5','nombre' => 'Licenciatura en Mecánica Automotriz']);
            DB::table('carreras')->insert(['facultad_id' => '5','nombre' => 'Licenciatura en Mecánica Industrial']);
            DB::table('carreras')->insert(['facultad_id' => '5','nombre' => 'Licenciatura en Refrigeración y Aire Acondicionado']);
            DB::table('carreras')->insert(['facultad_id' => '5','nombre' => 'Licenciatura en Soldadura']);
            DB::table('carreras')->insert(['facultad_id' => '5','nombre' => 'Técnico en Despacho de Vuelo']);
            DB::table('carreras')->insert(['facultad_id' => '5','nombre' => 'Técnico en Ingeniería de Mantenimiento de Aeronaves con especialización en Motores y Fuselajes']);

            //Carreras de la Facultad de Ingeniería en Sistemas Computacionales
            DB::table('carreras')->insert(['facultad_id' => '6','nombre' => 'Licenciatura en Ingeniería de Sistemas de Información']);
            DB::table('carreras')->insert(['facultad_id' => '6','nombre' => 'Licenciatura en Ingeniería de Sistemas y Computación']);
            DB::table('carreras')->insert(['facultad_id' => '6','nombre' => 'Licenciatura en Ingenieria de Software']);
            DB::table('carreras')->insert(['facultad_id' => '6','nombre' => 'Licenciatura en Licenciatura en Desarrollo de Software']);
            DB::table('carreras')->insert(['facultad_id' => '6','nombre' => 'Licenciatura en Redes Informáticas']);
            DB::table('carreras')->insert(['facultad_id' => '6','nombre' => 'Licenciatura en Informática Aplicada a la Educación']);
            DB::table('carreras')->insert(['facultad_id' => '6','nombre' => 'Técnico en Informática para la Gestión Empresarial']);
    }
}
