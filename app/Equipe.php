<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipe extends Model
{
    protected $fillable = [
        'nom', 'description' , 'id_employe','id_materiel' , 'date_creation'
    ];

   
    public function materiel()
    {
        return $this->hasMany('App\Materiel');
    }

    public function employee()
    {
        return $this->hasMany('App\Employee');
    }

    public function contrat()
    {
        return $this->hasMany('App\Contrat');
    }

  
}
