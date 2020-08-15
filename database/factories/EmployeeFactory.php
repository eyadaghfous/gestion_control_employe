<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Employee;
use App\Departement;
use App\Tache;

use Faker\Generator as Faker;

$factory->define(Employee::class, function (Faker $faker) {
    return [
        
        'nom'=> $faker->LastName,
        'prenom'=> $faker->FirstName,
        'email' => $faker->email,
        'motdepasse' => $faker->password,
        'numerotelephone' => $faker->phoneNumber,
        'id_departement' =>Departement::all()->random()->id,
        'id_tache' =>Tache::all()->random()->id,
        'ville' => $faker->text,
        'etat' => $faker->text,
        'sexe' => $faker->text,
        'date_embauche' => $faker->date,
        'photo' => $faker->image,
    ];
});
