<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Projet;
use Faker\Generator as Faker;

$factory->define(Projet::class, function (Faker $faker) {
    return [

        'titre' => $faker->text,
        'date_creation'=> $faker->date,
        'date_fin'=> $faker->date,
        'lieu'=> $faker->text,
        'type'=> $faker->text,
        'chef'=> $faker->Lastname,
    ];
});
