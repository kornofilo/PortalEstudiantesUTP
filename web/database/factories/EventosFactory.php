<?php

use Faker\Generator as Faker;
use App\Facultad;
use App\Evento;


$factory->define(Evento::class, function (Faker $faker) {
    //Arrays complementarios para generar datos aleatorios.
    $facultades = ['Ciencias Y Tecnología', 'Ingeniería Civil', 'Ingeniería de Sistemas computacionales',
    'Ingeniería Eléctrica', 'Ingeniería Industrial', 'Ingeniería Mecánica'];
    $ubicaciones = ['Sala de Conferencias', 'Biblioteca'];
    $tipoEvento = ['Conferencia', 'Exposición', 'Feria'];

    return [
        'titulo' => Arr::random($tipoEvento) . ' de ' . $faker->word,
        'codigoPost' => 'EV-'. $faker->unique->numberBetween($min = 100, $max = 999),
        'fecha' => $faker->dateTimeBetween('+1 week', '+7 month'),
        'lugar' => Arr::random($ubicaciones),
        'costo' => $faker->randomFloat($nbMaxDecimals = 0, $min = 0, $max = 100),
        'facultad_nomb' => Arr::random($facultades),
        'descripcion' => 'Expositor: ' . $faker->name,
        'email' => 'admin.portalE@utp.ac.pa'
    ];
});
