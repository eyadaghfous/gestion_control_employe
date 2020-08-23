<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [
        'nom', 'prenom' , 'email' , 'motdepasse' , 'numerotelephone' , 'ville' , 'etat' , 'sexe' , 'date_embauche' , 'photo'
    ];

   
    
    public function departement() //but mt3 scope : centralisation
    {
        return $this->belongsTo(Departement::class,'id_departement');
    }
}
