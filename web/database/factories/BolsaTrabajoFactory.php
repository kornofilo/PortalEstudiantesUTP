<?php

use Faker\Generator as Faker;
use App\Bolsatrabajo;


$factory->define(Bolsatrabajo::class, function (Faker $faker) {
    //Arrays complementarios para generar datos aleatorios.
    $titulos = ['Vacante de ', 'Necesitamos personal para trabajar de ', 'Práctica profesional de '];
    $ubicaciones = ['David', 'Puerto Armuelles', 'Bugaba', 'Chorrera', 'Tocumen', 'Boquete', 'Paso Canoas'];
    $posiciones = ['Desarrollador Web', 'Lavaplatos', 'Ingeniero Civil', 
                    'Profesor', 'Mercaderista', 'Gerente de TI', 'Arquitecto', 'Desarrollador Móvil', 'Cajero'];


    return [
        'codigoPost' => 'BDT-'. $faker->unique->numberBetween($min = 100, $max = 999), 
        'urgente' => $faker->boolean,
        'titulo' => Arr::random($titulos) . Arr::random($posiciones),
        'ubicacion' => Arr::random($ubicaciones),
        'empresa' => $faker->company,
        'tipoPuesto'=> Arr::random($posiciones),
        'salario' => $faker->randomFloat($nbMaxDecimals = 2, $min = 400, $max = 2500),
        'direccion' => $faker->address,
        'descripcion' => $faker->text($maxNbChars = 200),
        'habilidades' => $faker->text($maxNbChars = 50),
        'fecha' => $faker->dateTimeBetween('+2 week', '+6 month'),
        'beneficio' => $faker->text($maxNbChars = 25),
        'email' => 'admin.portalE@utp.ac.pa',
        'nombreContacto' => $faker->name,
        'celular' => $faker->numberBetween($min = 6000, $max = 6999) . '-' . $faker->numberBetween($min = 1000, $max = 9999),
        'emailContacto' => $faker->email  
    ];
});
