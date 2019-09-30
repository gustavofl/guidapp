<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\VendaIngresso;
use Faker\Generator as Faker;

$factory->define(VendaIngresso::class, function (Faker $faker) {
    return [
        'hash' => $faker->hash,
        'usado' => $faker->boolean,
        'validado' => $faker->boolean
    ];
});
