<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projet extends Model
{
    protected $fillable = [
        'titre', 'date_creation' , 'date_fin' , 'lieu' , 'type' , 'chef'
    ];

}
