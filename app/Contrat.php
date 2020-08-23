<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contrat extends Model
{
    protected $fillable = [
        'type', 'date_debut' , 'date_fin' , 'details' 
    ];


    public function projet() //but mt3 scope : centralisation
    {
        return $this->belongsTo(Projet::class,'num_projet');
    }

    public function client() //but mt3 scope : centralisation
    {
        return $this->belongsTo(Client::class,'num_client');
    }

    public function equipe() //but mt3 scope : centralisation
    {
        return $this->belongsTo(Equipe::class,'num_equipe');
    }
}
