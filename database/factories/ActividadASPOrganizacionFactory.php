<?php

use Faker\Generator as Faker;

$factory->define(App\ActividadASP_Organizacion::class, function (Faker $faker) {
    return [
        'ActividadASPid' => rand(1,App\ActividadASP::count()),
        'Organizacionid' => rand(1,App\Organizacion::count()),//
    ];
});
