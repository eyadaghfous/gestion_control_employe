<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipe extends Model
{
    protected $fillable = [
        'nom', 'description' , 'id_employe','id_materiel' , 'date_creation'
    ];

    public function equipe_role() //but mt3 scope : centralisation
    {
        return $this->belongsTo('App\Equipe_role');
    }

    public function materiel()
    {
        return $this->hasMany('App\Materiel');
    }

    public function tache()
    {
        return $this->hasMany('App\Tache');
    }

    public function timesheet() //but mt3 scope : centralisation
    {
        return $this->belongsTo('App\Timesheet');
    }

    public function specialite()
    {
        return $this->hasMany('App\Specialite');
    }

    public function projet()
    {
        return $this->hasMany('App\Projet');
    }

    public function planning()
    {
        return $this->hasMany('App\Planning');
    }

    public function user() //but mt3 scope : centralisation
    {
        return $this->belongsTo('App\USer');
    }
}
