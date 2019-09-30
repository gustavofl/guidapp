<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Apresentacao;
use Faker\Generator as Faker;

$factory->define(Apresentacao::class, function (Faker $faker) {
    return [
        'hora' => now()
    ];
});
