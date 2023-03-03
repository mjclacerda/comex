<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProdutosFormRequest extends FormRequest
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
            'nome'=>'required|min:2',
            'descricao'=>'required|min:10',
            'categoria_id'=>'required',
            'preco'=>'required|numeric',
            'estoque'=>'required|numeric',
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
            'nome.required' => 'O nome do produto é obrigatório.',
            'nome.min' => 'O nome do produto precisa ter pelo menos 2 caracteres.',
            'descricao.required'=>'A descrição do produto é obrigatória',  
            'descricao.min' => 'A descrição do produto precisa ter pelo menos 10 caracteres.',
            'categoria_id.required' => 'A informaçõa da categoria do produto é obrigatória.',
            'preco.required' => 'O preço do produto é obrigatório.',
            'preco.numeric' => 'O preço do produto deve ser expresso em números.',
            'estoque.required' => 'O estoque do produto é obrigatório.',
            'estoque.numeric' => 'O estoque do produto deve ser expresso em números.',
        ];
    }
}
