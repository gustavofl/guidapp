<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\EventoUser;
use Faker\Generator as Faker;

$factory->define(EventoUSer::class, function (Faker $faker) {
    return [
        'avaliacao' => $faker->numberBetween(0,5),
        'evento_id' => $faker->numberBetween(1,15),
        'user_id' => $faker->numberBetween(1,15)
    ];
});
