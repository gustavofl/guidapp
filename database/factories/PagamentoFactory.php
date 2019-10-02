<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Pagamento;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Pagamento::class, function (Faker $faker) {
    return [
        'valor' => $faker->randomNumber(),
        'data_hora' => $faker->dateTimeThisYear,
        'id_pag_paypal' => Str::random(10),
        'user_id' => $faker->numberBetween(1,15)
    ];
});
