<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Contato;
use Faker\Generator as Faker;

$factory->define(Contato::class, function (Faker $faker) {
    return [
        'texto' => $faker->url,
        'atracao_id' => $faker->numberBetween(1,15)
    ];
});
