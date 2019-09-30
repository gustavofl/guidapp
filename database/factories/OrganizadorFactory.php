<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Organizador;
use Faker\Generator as Faker;

$factory->define(Organizador::class, function (Faker $faker) {
    return [
        'cpf' => $faker->text(11),
        'user_id' => $faker->numberBetween(1,15)
    ];
});
