<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Specialite extends Model
{
    protected $fillable = [
        'nom'
    ];

    public function equipe()
    {
        return $this->hasMany('App\Equipe');
    }

    public function projet()
    {
        return $this->hasMany('App\Projet');
    }
}