<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Tela;
use Faker\Generator as Faker;

$factory->define(Tela::class, function (Faker $faker) {
    return [
        'nombre_tela' => $faker->name
    ];
});
