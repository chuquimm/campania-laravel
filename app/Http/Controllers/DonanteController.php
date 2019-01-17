<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Donante;
use App\Distrito;
use App\Departamento;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\HTTP\Requests\DonanteRequest;


class DonanteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['create','store', 'getProvincias', 'getDistritos']]);
    }

    public function index()
    {
        $donantes = Donante::orderBy('id', 'ASC')->paginate(5);
        return view('auth.donantes.index')->with('donantes', $donantes);
    }

    public function create()
    {
        $formArgs = ['route' => 'donantes.store', 'method' => 'POST', 'submit' => 'Registrarse'];
        $departamentos = DB::table('departamentos')->pluck("nombre","id");
        return view('donantes.registro')->with([
            'formArgs'      => $formArgs,
            'departamentos' => $departamentos
        ]);
    }

    public function store(DonanteRequest $request)
    {
        $donante = new Donante();

        $donante->nombre = $request->nombre;
        $donante->apellido = $request->apellido;
        $donante->correo = $request->correo;
        $donante->dni = $request->dni;
        $donante->celular = $request->celular;
        $donante->fnacimiento = $request->fnacimiento;
        $donante->genero = $request->genero;

        // sangre_id
        if ($request->checkSangre == "on") {
            $donante->tiposangre_id = 9;
        } else {
            if ($request->sangre == "A") {
                if ($request->factor == "+") {
                    $donante->tiposangre_id = 1;
                } else {
                    $donante->tiposangre_id = 2;
                } 
            } elseif ($request->sangre == "B") {
                if ($request->factor == "+") {
                    $donante->tiposangre_id = 3;
                } else {
                    $donante->tiposangre_id = 4;
                } 
            } elseif ($request->sangre == "AB") {
                if ($request->factor == "+") {
                    $donante->tiposangre_id = 5;
                } else {
                    $donante->tiposangre_id = 6;
                } 
            } elseif ($request->sangre == "O") {
                if ($request->factor == "+") {
                    $donante->tiposangre_id = 7;
                } else {
                    $donante->tiposangre_id = 8;
                } 
            }
        }

        $donante->distrito_id = $request->distrito;

        // Foto
        if ($request->hasFile('foto')) {
            $donante->foto = $request->file('foto')->store('public');
        } else {
            $donante->foto = 'avatar.png';
        }
        if ($request->sms == "on") {
            $donante->sms = True;
        } else {
            $donante->sms = False;
        }

        $donante->save();
        
        $campania_id = 1;
        $donante_id = DB::table('donantes')->where('correo', $donante->correo)->value('id');
        // dd('id: ' . $donante_id);
        $donante = Donante::find($donante_id);
        $donante->campanias()->attach($campania_id);

        if (Auth::check()) {
            return redirect()->route('donantes.index');
        } else {
            return redirect()->route('inicio');
        }
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $donante = Donante::find($id);
        $formArgs = ['route' => ['donantes.update', $donante->id], 'method' => 'PUT', 'submit' => 'Editar'];
        $departamentos = DB::table('departamentos')->pluck("nombre","id");
        return view('auth.donantes.edit')->with([
            'donante'       => $donante,
            'formArgs'      => $formArgs,
            'departamentos' => $departamentos
        ]);
    }

    public function update(Request $request, $id)
    {
        $donante = Donante::find($id);

        $donante->nombre = $request->nombre;
        $donante->apellido = $request->apellido;
        $donante->correo = $request->correo;
        $donante->dni = $request->dni;
        $donante->celular = $request->celular;
        $donante->fnacimiento = $request->fnacimiento;
        $donante->genero = $request->genero;

        // sangre_id
        if ($request->checkSangre == "on") {
            $donante->tiposangre_id = 9;
        } else {
            if ($request->sangre == "A") {
                if ($request->factor == "+") {
                    $donante->tiposangre_id = 1;
                } else {
                    $donante->tiposangre_id = 2;
                } 
            } elseif ($request->sangre == "B") {
                if ($request->factor == "+") {
                    $donante->tiposangre_id = 3;
                } else {
                    $donante->tiposangre_id = 4;
                } 
            } elseif ($request->sangre == "AB") {
                if ($request->factor == "+") {
                    $donante->tiposangre_id = 5;
                } else {
                    $donante->tiposangre_id = 6;
                } 
            } elseif ($request->sangre == "O") {
                if ($request->factor == "+") {
                    $donante->tiposangre_id = 7;
                } else {
                    $donante->tiposangre_id = 8;
                } 
            }
        }

        $donante->distrito_id = $request->distrito;

        // Foto
        if ($request->hasFile('foto')) {
            $donante->foto = $request->file('foto')->store('public');
        }
        if ($request->sms == "on") {
            $donante->sms = True;
        } else {
            $donante->sms = False;
        }

        $donante->save();

        if (Auth::check()) {
            return redirect()->route('donantes.index');
        } else {
            return redirect()->route('inicio');
        }
    }

    public function destroy($id)
    {
        Donante::destroy($id);

        return redirect()->route('donantes.index');
    }
    
    public function getProvincias($id)
    {
        $provincias = DB::table("provincias")->where("departamento_id",$id)->pluck("nombre","id");
        return $provincias;
    }

    public function getDistritos($id)
    {
        $distritos = DB::table("distritos")->where("provincia_id",$id)->pluck("nombre","id");
        return $distritos;
    }
}
