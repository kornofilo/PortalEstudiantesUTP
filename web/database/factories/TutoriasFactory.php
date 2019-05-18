<?php

use Faker\Generator as Faker;
use App\User;

$factory->define(App\Tutorias::class, function (Faker $faker) {
    $asignatura = ['Programación', 'Cálculo', 'Otros', 'Física', 'Química', 'Matemáticas'];
    $ubicacion = ['Biblioteca', 'Cafetín', 'Sala de Estudio de Eléctrica', 'Cafeteria', 'En los pasillos'];
    $estadoPost = ['Aprobada', 'En Moderación'];


    return [
        'codigoPost' => 'TUT-'. $faker->unique->numberBetween($min = 100, $max = 999),
        'titulo' => 'Tutorías de ' . Arr::random($asignatura),
        'nombreTutor' =>  $faker->name,
        'materia' => Arr::random($asignatura),
        'costo' =>  $faker->randomFloat($nbMaxDecimals = 0, $min = 1, $max = 99),
        'ubicacion' => Arr::random($ubicacion),
        'descripcion' => $faker->text($maxNbChars = 25),
        'celular' => $faker->numberBetween($min = 6000, $max = 6999) . '-' . $faker->numberBetween($min = 1000, $max = 9999),
        'nombre' =>  $faker->name,
        'email' => User::all()->random()->email,
        'estadoPost' => Arr::random($estadoPost)
    ];
});
