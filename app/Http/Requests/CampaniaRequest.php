<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CampaniaRequest extends FormRequest
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
            'nombre'      => 'required',
            'descripcion' => 'required',
            'meta'        => 'required|numeric',
            'imagen'      =>  'file|image',
        ];
    }

    public function messages()
    {
        return [
            'nombre.required'       => 'Se necesita ingresar un nombre a la campaña',
            'descripcion.required'  => 'Se necesita ingresar una descripión a la campaña',
            'meta.required'         => 'Se necesita ingresar una meta a la campaña',
            'meta.numeric'          => 'La meta debe ser un número',
            'imagen.file'           => 'La imagen debe ser un archivo',
            'imagen.image'          => 'El formato de la imagen no es admitido',
        ];
    }
}
