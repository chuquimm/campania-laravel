<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Campania extends Model
{
    protected $fillable = [
        'nombre',
        'descripcion'
    ];
}
