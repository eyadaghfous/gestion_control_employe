<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projet extends Model
{
    protected $fillable = [
        'titre', 'date_creation' , 'date_fin' , 'lieu' , 'type' , 'chef' , 'id_tache'
    ];

    public function tache() //but mt3 scope : centralisation
    {
        return $this->hasmany(Tache::class);
    }
    public function contrat() //but mt3 scope : centralisation
    {
        return $this->hasMany(Contrat::class);
    }

  
}
