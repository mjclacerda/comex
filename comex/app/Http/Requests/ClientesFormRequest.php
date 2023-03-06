<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientesFormRequest extends FormRequest
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
            'nome'=>'required',
            'cpf'=>'required',
            'telefone'=>'required',
            'rua'=>'required',
            'numero'=>'required',
            'bairro'=>'required',
            'cidade'=>'required',
            'estado'=>'required',
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
            'nome.required' => 'O nome do cliente é obrigatório.',
            'cpf'=>'O CPF do cliente é obrigatório',
            'telefone'=>'O telefone é obrigatório.',
            'rua'=>'O logradouro é obrigatório.',
            'numero'=>'O numero é obrigatório.',
            'bairro'=>'O bairro é obrigatório.',
            'cidade'=>'A cidade é obrigatória.',
            'estado'=>'O estado é obrigatório.',
        ];
    }
}
