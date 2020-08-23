<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departement extends Model
{
    protected $fillable = [
        'nom'
    ];

    public function employee()
    {
        return $this->hasMany(Employee::class);
    }
}
