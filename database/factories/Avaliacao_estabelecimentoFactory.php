<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Avaliacao_estabelecimento;
use Faker\Generator as Faker;

$factory->define(Avaliacao_estabelecimento::class, function (Faker $faker) {
    return [
        'avaliacao' => $faker->numberBetween(0,5),
        'estabelecimento_id' => $faker->numberBetween(1,15),
        'user_id' => $faker->numberBetween(1,15)
    ];
});
