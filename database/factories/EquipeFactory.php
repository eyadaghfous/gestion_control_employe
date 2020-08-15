<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Equipe;
use App\Employee;
use App\Materiel;
use Faker\Generator as Faker;

$factory->define(Equipe::class, function (Faker $faker) {
    return [
        'nom' => $faker->text,
        'description' => $faker->text,
        'id_employe'=> Employee::all()->random()->id,
        'id_materiel'=> Materiel::all()->random()->id,
        'date_creation' => $faker->date,
    ];
});
