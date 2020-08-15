<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Facture;
use App\Client;
use App\Projet;
use App\Reglement;

use Faker\Generator as Faker;

$factory->define(Facture::class, function (Faker $faker) {
    return [
        
        'num_client' =>  Client::all()->random()->id,
        'num_projet' =>  Projet::all()->random()->id,
        'id_reglement' =>  Reglement::all()->random()->id,
        'date'=> $faker->date,
        'montant' => $faker->randomFloat(3, 0, 1000),
    ];
});
