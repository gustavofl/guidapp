<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Festival;
use Faker\Generator as Faker;

$factory->define(Festival::class, function (Faker $faker) {
    return [
        'cidade' => $faker->city,
        'evento_id' => $faker->numberBetween(1,15)
    ];
});
