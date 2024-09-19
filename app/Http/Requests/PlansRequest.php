<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PlansRequest extends FormRequest
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
            'precio' => 'required',
            'body' => 'required',
            'cant_subs' => 'required'
        ];
        
    }
    public function messages(): array
    {
        return [
            'name.required' => 'Favor ingrese el nombre del plan',
            'precio.required' => 'Favor ingrese el precio del plan',
            'body.required' => 'Favor ingrese una breve descripcion del plan',
            'cant_subs.required' => 'Favor ingre la cantidad de subscripciones del plan'
        ];
    }
}
