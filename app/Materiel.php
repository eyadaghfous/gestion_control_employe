<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Materiel extends Model
{
    protected $fillable = [
        'nom', 'type' 
    ];

    public function equipe()
    {
        return $this->hasMany('App\Equipe');
    }
}
