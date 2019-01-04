<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Distrito extends Model
{
    public function donantes()
    {
        return $this->hasMany('App\Donante');
    }

    public function provincia()
    {
        return $this->belongsTo('App\Provincia');
    }

    public function departamento()
    {
        return $this->belongsTo('App\Departamento');
    }
}
