<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\VendaIngresso;
use Faker\Generator as Faker;

$factory->define(VendaIngresso::class, function (Faker $faker) {
    return [
        'hash' => $faker->text,
        'usado' => $faker->boolean,
        'validado' => $faker->boolean,
        'ingresso_id' => $faker->numberBetween(1,15),
        'pagamento_id' => $faker->numberBetween(1,15),
        'user_id' => $faker->numberBetween(1,15)
    ];
});
