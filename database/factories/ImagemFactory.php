<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Imagem;
use Faker\Generator as Faker;

$factory->define(Imagem::class, function (Faker $faker) {
    return [
        'nome' => $faker->text,
        'atracao_id' => $faker->numberBetween(1,15),
        'evento_id' => $faker->numberBetween(1,15),
        'prato_id' => $faker->numberBetween(1,15),
        'promocao_id' => $faker->numberBetween(1,15),
        'estabelecimento_id' => $faker->numberBetween(1,15),
        'user_id' => $faker->numberBetween(1,15)
    ];
});
