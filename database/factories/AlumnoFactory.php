<?php

use Faker\Generator as Faker;

$factory->define(App\Alumno::class, function (Faker $faker) {
    return [
        'nombre'=> $faker->sentence,
        'apellidos'=> $faker->sentence,
        
    ];
});
