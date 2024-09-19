<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CursosRequest extends FormRequest
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
            'title' => 'required',
            'body' => 'required',
            'doc_instructor' => 'required|max:15|min:10',
            'status' => 'required',
            'organization' => 'required',
        ];
    }
    public function messages(): array
    {
        return [
            'title.required' => 'Favor ingrese el nombre del curso',
            'body.required' => 'Favor ingrese una descripcion del curso',
            'doc_instructor.required' => 'Ingrese el documento de instructor',
            'status.required' => 'Seleccione el estado del curso',
            'organization.required' => 'Seleccione la organizacion'
        ];
    }
}
