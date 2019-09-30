<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Evento;
use Faker\Generator as Faker;

$factory->define(Evento::class, function (Faker $faker) {
    return [
        'nome' => $faker->name,
        'descricao' => $faker->text,
        'avaliacao' => $faker->numberBetween(0,5),
        'visitas' => $faker->numberBetween(0,10000),
        'hash' => $faker->hash
    ];
});
