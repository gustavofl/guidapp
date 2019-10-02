<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Horario;
use Faker\Generator as Faker;

$factory->define(Horario::class, function (Faker $faker) {
    return [
        'abertura' => $faker->time,
        'fechamento' => $faker->time,
        'dia_semana' => $faker->dayOfWeek,
        'estabelecimento_id' => $faker->numberBetween(1,15)
    ];
});
