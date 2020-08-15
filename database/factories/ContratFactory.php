<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Contrat;
use App\Projet;
use App\Equipe;
use App\Client;

use Faker\Generator as Faker;

$factory->define(Contrat::class, function (Faker $faker) {
    return [

        'type'=> $faker->text,
        'date_debut'=> $faker->date,
        'date_fin'=> $faker->date,
        'details' => $faker->text,
        'num_projet' =>  Projet::all()->random()->id,
        'num_client' =>  Client::all()->random()->id,
        'num_equipe' =>  Equipe::all()->random()->id,
       
        
    ];
});
