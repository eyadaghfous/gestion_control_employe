<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tache extends Model
{
    protected $fillable = [
        'nom', 'debut' , 'fin'
    ];

    public function equipe()
    {
        return $this->hasMany('App\Equipe');
    }
}
