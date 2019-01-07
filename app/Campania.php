<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Campania extends Model
{
    public function donantes()
    {
        return $this->belongsToMany('App\Donante');
    }
    
    protected $fillable = [
        'nombre',
        'descripcion'
    ];
}
