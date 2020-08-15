<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
        'nom', 'prenom' , 'datedenaissance' , 'numerotelephone' , 'adresse' , 'ville' , 'codepostal' , 'email' , 'motdepasse'
    ];

}