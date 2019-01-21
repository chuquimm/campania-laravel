<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Campania;
use App\HTTP\Requests\CampaniaRequest;

class CampaniaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index']]);
    }

    public function index()
    {
        $campanias = Campania::orderBy('id', 'ASC')->paginate(5);
        return view('auth.campanias.index')->with('campanias', $campanias);
    }

    public function create()
    {
        // $formArgs = ['route' => 'campanias.store', 'method' => 'POST', 'class' => 'col s12', 'enctype' => 'multipart/form-data'];
        $formArgs = ['route' => 'campanias.store', 'method' => 'POST', 'submit' => 'Registrarse'];
        return view('auth.campanias.registro')->with('formArgs', $formArgs);
    }

    public function store(CampaniaRequest $request)
    {
        $campania = new Campania;

        $campania->nombre = $request->nombre;
        $campania->descripcion = $request->descripcion;
        $campania->meta = $request->meta;
        
        if ($request->estado == "on") {
            $campania->estado = True;
        } else {
            $campania->estado = False;
        }

        if ($request->hasFile('imagen')) {
            $campania->imagen = $request->file('foto')->store('public');
        } else {
            $campania->imagen = 'https://picsum.photos/500/200';
        }


        $campania->save();

        return redirect()->route('campanias.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $campania = Campania::find($id);
        $formArgs = ['route' => ['campanias.update', $campania->id], 'method' => 'PUT', 'submit' => 'Editar'];
        return view('auth.campanias.edit')->with([
            'campania' => $campania,
            'formArgs' => $formArgs
        ]);
    }

    public function update(Request $request, $id)
    {
        $campania = Campania::find($id);

        $campania->nombre = $request->nombre;
        $campania->descripcion = $request->descripcion;

        $campania->save();

        return redirect()->route('campanias.index');
    }

    public function destroy($id)
    {
        Campania::destroy($id);

        return redirect()->route('campanias.index');
    }
}
