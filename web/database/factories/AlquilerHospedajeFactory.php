<?php

use Faker\Generator as Faker;
use App\Hospedaje;
use App\User;


$factory->define(Hospedaje::class, function (Faker $faker) {
    $categoria = ['Apartamento','Cuarto','Casa'];
    $ubicaciones = ['David', 'Puerto Armuelles', 'Bugaba', 'Chorrera', 'Tocumen', 'Boquete', 'Paso Canoas'];
    $siNo = ['Sí','No'];
    $estadoPost = ['Aprobada', 'En Moderación'];


    return [
        'codigoPost' => 'AH-'. $faker->unique->numberBetween($min = 100, $max = 999), 
        'categoria' => Arr::random($categoria),
        'titulo' => 'Alquilo ' . Arr::random($categoria),
        'ubicacion' => Arr::random($ubicaciones),
        'descripcion' => $faker->text($maxNbChars = 25),
        'precio' => $faker->randomFloat($nbMaxDecimals = 2, $min = 50, $max = 1000),
        'estacionamiento' => Arr::random($siNo),
        'habitaciones' => $faker->numberBetween($min = 1, $max = 5),
        'baños' => $faker->numberBetween($min = 1, $max = 5),
        'amueblado' => Arr::random($siNo),
        'celular' => $faker->numberBetween($min = 6000, $max = 6999) . '-' . $faker->numberBetween($min = 1000, $max = 9999),
        'nombre' => $faker->name,
        'email' => User::all()->random()->email,
        'estadoPost' => Arr::random($estadoPost)
    ];
});
