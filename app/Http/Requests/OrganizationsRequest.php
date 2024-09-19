<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrganizationsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required',
            'telefono' => 'required|max:15|min:10',
            'direccion' => 'required',
        ];
    }
    public function messages(): array
    {
        return [
            'name.required' => 'Favor ingrese el nombre de la organizacion',
            'telefono.required' => 'Favor ingrese el telefono de la organizacion',
            'direccion.required' => 'Favor ingrese la direccion',
            'telefono.max' => 'Numero de telefono no valido',
            'telefono.min' => 'Numero de telefono no valido'
        ];
    }
}
