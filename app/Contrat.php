<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contrat extends Model
{
    protected $fillable = [
        'type', 'date_debut' , 'date_fin' , 'details' , 'num_projet' , 'num_client' , 'num_equipe' 
    ];


    public function client() //but mt3 scope : centralisation
    {
        return $this->belongsTo('App\Client');
    }
}
