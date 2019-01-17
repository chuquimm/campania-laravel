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
        if ($this->method() == 'PUT') {
            $mailRule = "required|email|unique:donantes,correo,$this->get('id')";
        } else {
            $mailRule = 'required|email|unique:donantes';
        }
        return [
                'nombre'        => 'required|max:255',
                'apellido'      => 'required|max:255',
                'correo'        => $mailRule,
                'dni'           => 'required|digits:8',
                'celular'       => 'required|digits:9',
                'fnacimiento'   => 'required|date',
                'departamento'  => 'required',
                'provincia'     => 'required',
                'distrito'      => 'required',
                'foto'          => 'file|image',
                'terminos'      => 'required'
        ];
    }

    public function messages()
    {
        return [
            'nombre.required'       => 'Necesitas ingresar tu nombre.',
            'apellido.required'     => 'Necesitas ingresar tu apellido.',
            'correo.required'       => 'Necesitas ingresar tu correo.',
            'dni.required'          => 'Necesitas ingresar tu DNI.',
            'celular.required'      => 'Necesitas ingresar tu celular.',
            'fnacimiento.required'  => 'Necesitas ingresar tu fecha de nacimiento.',
            'departamento.required' => 'Necesitas ingresar tu departamento.',
            'provincia.required'    => 'Necesitas ingresar tu provincia.',
            'distrito.required'     => 'Necesitas ingresar tu distrito.',
            'terminos.required'     => 'Necesitas ingresar tu terminos.',
    
            'nombre.max' => 'El nombre solo puede tener 255 caracteres',
            'apellido.max' => 'El apellido solo puede tener 255 caracteres',
            'correo.unique' => 'El correo ya esta en uso.',
            'dni.digits' => 'El DNI debe ser  un número de 8 digitos.',
            'celular.digits' => 'El celular debe ser un número de 9 digitos.',
            'fnacimiento.date' => 'Vuelva a ingresar la fecha',
            'foto.image' => 'La foto debe ser una imagen.',
        ];
    }
}
