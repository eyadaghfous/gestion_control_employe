<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reglement extends Model
{
    protected $fillable = [
     'type' 
    ];

    public function facture() //but mt3 scope : centralisation
    {
        return $this->hasMany('App\Facture');
    }
}
