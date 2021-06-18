<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCurso extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // logica para verificar si el usuario tiene permisos
        // se puede manejar de otra manera, hacemos por lo tanto un true
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        // reglas de validación para datos correctos
        return [
            'name' => 'required|max:10',
            'description' => 'required|min:10',
            'category' => 'required'
        ];
    }

    public function attributes()
    {
        return[
            'name' => 'Nombre del curso',
        ];
    }

    public function messages()
    {
        return [
            'description.required' => 'Debe ingresar una descripción del curso',
        ];
    }
}
