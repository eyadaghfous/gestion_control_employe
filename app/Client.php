<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
        'nom', 'prenom' , 'datedenaissance' , 'numerotelephone' , 'adresse' , 'ville' , 'codepostal' , 'email' , 'motdepasse'
    ];

    public function contrat() //but mt3 scope : centralisation
    {
        return $this->hasMany(Contrat::class);
    }
}