<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CorreoRequest extends FormRequest
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
            'correo' => 'required|email'
        ];
    }

    public function messages()
    {
        return [
            'correo.required' => 'Se debe ingresar un correo',
            'correo.email'    => 'El correo debe ser una dirección de correo válida'
        ];
    }
}
