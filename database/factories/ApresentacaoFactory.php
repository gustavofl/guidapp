<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Apresentacao;
use Faker\Generator as Faker;

$factory->define(Apresentacao::class, function (Faker $faker) {
    return [
        'hora' => now(),
        'atracao_id' => $faker->numberBetween(1,15),
        'evento_unico_id' => $faker->numberBetween(1,15)
    ];
});
