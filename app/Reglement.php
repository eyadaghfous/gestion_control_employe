<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reglement extends Model
{
    protected $fillable = [
     'type' 
    ];

    public function client() //but mt3 scope : centralisation
    {
        return $this->belongsTo('App\Client');
    }
}
