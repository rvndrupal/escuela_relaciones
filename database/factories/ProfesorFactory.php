<?php

use Faker\Generator as Faker;

$factory->define(App\Profesor::class, function (Faker $faker) {
    return [
        'nombre'=> $faker->sentence,
        'apellidos'=> $faker->sentence,
        'tel'=>$faker->sentence
    ];
});
