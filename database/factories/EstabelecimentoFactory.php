<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Estabelecimento;
use Faker\Generator as Faker;

$factory->define(Estabelecimento::class, function (Faker $faker) {
    return [
        'nome' => $faker->name,
        'latitude' => $faker->latitude,
        'longitude' => $faker->longitude,
        'descricao' => $faker->text(200),
        'telefone' => $faker->phoneNumber,
        'cidade' => $faker->city
    ];
});
