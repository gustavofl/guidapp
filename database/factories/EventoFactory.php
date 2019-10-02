<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Evento;
use Faker\Generator as Faker;

$factory->define(Evento::class, function (Faker $faker) {
    return [
        'nome' => $faker->name,
        'descricao' => $faker->text,
        'avaliacao' => $faker->numberBetween(1,5),
        'visitas' => $faker->numberBetween(0,10000),
        'hash' => $faker->text,
        'estabelecimento_id' => $faker->numberBetween(1,15),
        'organizador_id' => $faker->numberBetween(1,15)
    ];
});
