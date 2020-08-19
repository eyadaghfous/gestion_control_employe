<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tache extends Model
{
    protected $fillable = [
        'nom', 'debut' , 'fin'
    ];

    public function employee()
    {
        return $this->hasMany('App\Employee');
    }
}
