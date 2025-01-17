<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\EventoUnico;
use Faker\Generator as Faker;

$factory->define(EventoUnico::class, function (Faker $faker) {
    return [
        'latitude' => $faker->latitude,
        'longitude' => $faker->longitude,
        'data' => now(),
        'evento_id' => $faker->numberBetween(1,15),
        'festival_id' => $faker->numberBetween(1,15)
    ];
});
