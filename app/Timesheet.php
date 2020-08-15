<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Timesheet extends Model
{
    protected $fillable = [
        'numero_employe', 'numero_tache' , 'heures' 
    ];

    public function employe()
    {
        return $this->hasMany('App\Employee');
    }

    public function tache()
    {
        return $this->hasMany('App\Tache');
    }
}