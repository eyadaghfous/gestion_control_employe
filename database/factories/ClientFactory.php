<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Client;
use Faker\Generator as Faker;

$factory->define(Client::class, function (Faker $faker) {
    return [
       
        'nom'=> $faker->Lastname,
        'prenom'=> $faker->FirstName,
        'datedenaissance' => $faker->date,
        'numerotelephone' => $faker->phoneNumber,
        'adresse' => $faker->address,
        'ville' => $faker->city,
        'codepostal' => $faker->postcode,
        'email' => $faker->unique()->email,
        'motdepasse' => $faker->password,
        


    ];

});
