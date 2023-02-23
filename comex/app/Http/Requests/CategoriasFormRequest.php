<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoriasFormRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'nome'=>'required|min:2|unique:categorias'
        ];
    }
    /**
     * Custom error messages
     *
     * @return string
     */
    public function messages()
    {
        return [
            'nome.required' => 'O nome da categoria é obrigatório.',
            'nome.min' => 'O nome da categoria precisa ter pelo menos 2 caracteres.',
            'nome.unique' => 'A categoria escolhida já está cadastrada.'   
        ];
    }
}
