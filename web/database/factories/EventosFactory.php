<?php

use Faker\Generator as Faker;
use App\Facultad;
use App\Evento;


$factory->define(Evento::class, function (Faker $faker) {
    //Arrays complementarios para generar datos aleatorios.
    $ubicaciones = ['Sala de Conferencias', 'Biblioteca'];
    $tipoEvento = ['Conferencia', 'Exposición', 'Feria','Taller'];
    $tematica = ['Robótica', 'Control de Versiones', 'Integración Continua', 'Diseño de Interfaces',
                'Pentesting', 'Ciberseguridad', 'Machine Learning', 'Fotografía', 'Big Data', 'Seguridad en las Redes',
                'Docker', 'Modelado 3D', 'Excel', 'Diseño Gráfico'];

    return [
        'titulo' => Arr::random($tipoEvento) . ' de ' . Arr::random($tematica), 
        'codigoPost' => 'EV-'. $faker->unique->numberBetween($min = 100, $max = 9999),     
        'fecha' => $faker->dateTimeBetween('+1 week', '+7 month'),
        'hora' => $faker->time($format = 'H:i'),
        'lugar' => Arr::random($ubicaciones),
        'costo' => $faker->randomFloat($nbMaxDecimals = 0, $min = 0, $max = 200),
        'facultad_nomb' => Facultad::all()->random()->nombre,
        'descripcion' => 'Expositor: ' . $faker->name,
        'email' => 'admin.portalE@utp.ac.pa'
    ];
});
