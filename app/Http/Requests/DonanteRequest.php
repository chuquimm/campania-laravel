<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DonanteRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
                'nombre'        => 'required|max:255',
                'apellido'      => 'required|max:255',
                'correo'        => 'required|email|unique:donantes',
                'dni'           => 'required|digits:8',
                'celular'       => 'required|digits:9',
                'fnacimiento'   => 'required|date',
                'lugar'         => 'required', #Validar que el lugar coincida
                'foto'          => 'file|image'
        ];
    }
}
