<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donante extends Model
{
    public function tiposangre()
    {
        return $this->belongsTo('App\Tiposangre');
    }
}
