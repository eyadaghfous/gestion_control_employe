<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Timesheet;
use App\Employee;
use App\Tache;
use Faker\Generator as Faker;

$factory->define(Timesheet::class, function (Faker $faker) {
    return [
        'numero_employe'=> Employee::all()->random()->id,
        'numero_tache' => Tache::all()->random()->id,
        'heures' => $faker->time,
    ];
});
