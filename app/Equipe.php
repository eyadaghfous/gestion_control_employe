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
        return $this->belongsTo('App\Materiel');
    }

    public function employee()
    {
        return $this->belongsTo('App\Employee');
    }
    public function contrat() //but mt3 scope : centralisation
    {
        return $this->hasMany(Contrat::class);
    }
}
