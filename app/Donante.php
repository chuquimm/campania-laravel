<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donante extends Model
{
    public function tiposangre()
    {
        return $this->belongsTo('App\Tiposangre');
    }
    
    public function distrito()
    {
        return $this->belongsTo('App\Distrito');
    }
}
