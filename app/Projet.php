<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projet extends Model
{
    protected $fillable = [
        'titre', 'date_creation' , 'date_fin' , 'lieu' , 'type' , 'chef'
    ];

    public function contrat() //but mt3 scope : centralisation
    {
        return $this->belongsTo('App\Contrat');
    }

    public function facture() //but mt3 scope : centralisation
    {
        return $this->belongsTo('App\Facture');
    }
}
