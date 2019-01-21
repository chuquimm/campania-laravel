<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Campania;

class PageController extends Controller
{
    public function inicio()
    {
        $campanias = Campania::all();
        return view('welcome')->with('campanias', $campanias);
    }

    public function campania($id)
    {
        $campania = Campania::find($id);
        return view('campania')->with('campania', $campania);
    }
}
