<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [
        'nom', 'prenom' , 'email' , 'motdepasse' , 'numerotelephone' , 'id_departement' ,'id_tache' , 'ville' , 'etat' , 'sexe' , 'date_embauche' , 'photo'
    ];
}
