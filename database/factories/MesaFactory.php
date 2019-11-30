<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Mesa;
use Faker\Generator as Faker;

$factory->define(Mesa::class, function (Faker $faker) {
    return [
        'numero_mesa' => $faker->unique(true)->numberBetween(1,10),
        'area' => $faker->randomElement($array = array('Vestir','Merceria','Cortinas','Blancos')),
        'enfoque' => $faker->randomElement($array = array('Cortinas','Escolar','Forros','Ofertas','Plasticos','Polar')),
    ];
});
