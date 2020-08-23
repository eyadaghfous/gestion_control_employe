<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Tache;
use App\Status;

use Faker\Generator as Faker;

$factory->define(Tache::class, function (Faker $faker) {
    return [
       
        'sommaire' => $faker->text,
        'description' => $faker->text,
        'num_status' =>Status::all()->random()->id,
        'debut'=> $faker->date,
        'fin'=> $faker->date,
    ];
});
