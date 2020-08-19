<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [
        'nom', 'prenom' , 'email' , 'motdepasse' , 'numerotelephone' , 'id_departement' ,'id_tache' , 'ville' , 'etat' , 'sexe' , 'date_embauche' , 'photo'
    ];

    public function facture()
    {
        return $this->hasMany('App\Facture');
    }
    
    
    public function departement() //but mt3 scope : centralisation
    {
        return $this->belongsTo('App\Departement');
    }

    public function equipe() //but mt3 scope : centralisation
    {
        return $this->belongsTo('App\Equipe');
    }
}
