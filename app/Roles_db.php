<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Roles_db extends Model
{
    protected $fillable = [
        'nom', 'description'
    ];

    public function equipe_role()
    {
        return $this->hasMany('App\Equipe_role');
    }
}