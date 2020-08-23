<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tache extends Model
{
    protected $fillable = [
        'sommaire' , 'description' , 'status' , 'debut' , 'fin'
    ]; 

}
