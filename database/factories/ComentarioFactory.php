<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Comentario;
use Faker\Generator as Faker;

$factory->define(Comentario::class, function (Faker $faker) {
    return [
        'texto' => $faker->text,
        'lido' => $faker->boolean,
        'user_id' => $faker->numberBetween(1,15),
        'estabelecimento_id' => $faker->numberBetween(1,15),
        'prato_id' => $faker->numberBetween(1,15),
        'evento_id' => $faker->numberBetween(1,15),
        'atracao_id' => $faker->numberBetween(1,15)
    ];
});
