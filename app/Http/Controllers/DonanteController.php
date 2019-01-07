<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Donante;
use App\Distrito;
use App\Departamento;
use Illuminate\Support\Facades\DB;

class DonanteController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        $distritos = Distrito::all();
        return view('welcome')->with(['distritos' => $distritos]);
    }

    public function store(Request $request)
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

        // $donante->distrito_id = '200101';
        $lugar = $request->lugar;
        $slash_1 = strpos($lugar, '/');
        $slash_2 = strpos($lugar, '/', $slash_1 + 1);
        $departamento = substr($lugar,0,$slash_1);
        $provincia = substr($lugar, $slash_1 + 1, $slash_2 - $slash_1 - 1);
        $distrito = substr($lugar, $slash_2 + 1, strlen($lugar) - $slash_2 - 1);

        $distrito_id = DB::table('distritos')->join('provincias', 'distritos.provincia_id', '=', 'provincias.id')->join('departamentos', 'provincias.departamento_id', '=', 'departamentos.id')->where('distritos.nombre', $distrito)->where('provincias.nombre', $provincia)->where('departamentos.nombre', $departamento)->value('distritos.id');
        $donante->distrito_id = $distrito_id;

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
        dd($donante);
        
        // return redirect()->route('donantes.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
