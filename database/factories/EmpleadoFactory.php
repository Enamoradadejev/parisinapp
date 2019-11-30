<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        /*
        'Nombre' => $faker->name,
        'ApellidoM' => $faker->lastName,
        'ApellidoP' => $faker->lastName,
        'Telefono'=> $faker->phoneNumber,
        'Correo' => $faker->email,
        'Puesto' => $faker->randomElement(['Vendedor','Cajero','Jefe Area','Subgerente']),
        'Turno' => $faker->randomElement(['Matutino','Vespertino'])*/
    ];
});



