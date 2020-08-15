<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cachable;
class Facture extends Model
{
    
    protected $guarded =[] ; 


    public $belongsTo = [
        'num_client' => Client::class
    ];
    
    public function client() //but mt3 scope : centralisation
    {
        return $this->belongsTo('App\Client');
    }

}
