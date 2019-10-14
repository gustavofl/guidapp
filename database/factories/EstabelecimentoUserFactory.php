<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\EstabelecimentoUser;
use Faker\Generator as Faker;

$factory->define(EstabelecimentoUser::class, function (Faker $faker) {
    return [
        'avaliacao' => $faker->numberBetween(0,5),
        'estabelecimento_id' => $faker->numberBetween(1,15),
        'user_id' => $faker->numberBetween(1,15)
    ];
});
