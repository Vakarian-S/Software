<?php

use Faker\Generator as Faker;

$factory->define(App\Convenio::class, function (Faker $faker) {
    return [
        'tipoConvenio' => $faker->randomElement(['Capstone','Marco','Especifico','A+S']),
        'fechainicio' => $faker->dateTime(),
        'fechatermino'=>$faker->dateTime(),
        'evidencia' => $faker->url,
        'Organizacionid' => rand(1,App\Organizacion::count()),
        //
    ];
});
