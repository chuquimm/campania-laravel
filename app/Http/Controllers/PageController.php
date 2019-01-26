<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Campania;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    public function inicio()
    {
        $campanias = Campania::all();
        // $formArgs = ['route' => 'donantes.store', 'method' => 'POST', 'submit' => 'Registrarse'];
        // $departamentos = DB::table('departamentos')->pluck("nombre","id");
        return view('welcome')->with([
            'campanias' => $campanias,
        ]);
    }

    public function campania($id)
    {
        $campania = Campania::find($id);
        return view('campania')->with('campania', $campania);
    }
}