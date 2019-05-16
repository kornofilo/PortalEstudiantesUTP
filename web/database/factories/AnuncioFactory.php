<?php

use Faker\Generator as Faker;
use App\User;
use App\Anuncio;

$factory->define(Anuncio::class, function (Faker $faker) {
    $categoria = ['Compra','Venta'];
    $articulo = ['iPhone X', 'Mesa de Billar', 'Calculadora Texas CX CAS', 
    'Raspberry Pi 3 B+', 'XBOX One', 'MacBook Air', 'Libro - Programacion En C',
    'Pixel 3', 'Cuenta de Fornite', 'Libro - Head First Java (Segunda Edición)', 'Zapatillas Nike'];
    $estadoArticulo = ['Nuevo', 'Usado'];
    $estadoPost = ['Aprobado', 'En Moderación'];

    return [
        'codigoPost' => 'CV-'. $faker->unique->numberBetween($min = 100, $max = 999), 
        'categoria' => Arr::random($categoria),
        'nombreArt' => Arr::random($articulo),
        'precio' => $faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 9999),
        'estado' => Arr::random($estadoArticulo),
        'descripcion' => $faker->text($maxNbChars = 25),
        'celular' => $faker->numberBetween($min = 6000, $max = 6999) . '-' . $faker->numberBetween($min = 1000, $max = 9999),
        'nombre' => $faker->name,
        'email' => User::all()->random()->email,
        'estadoPost' => Arr::random($estadoPost)
    ];
});
