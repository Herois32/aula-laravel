<?php

namespace App\Http\Requests\Painel;

use Illuminate\Foundation\Http\FormRequest;

class ProdutoFormRquest extends FormRequest
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
        return  [

            'et_codigo'     => 'required|max:7',
            'et_nome'       => 'required|max:100',
            'et_preco'      => 'required|numeric',
            'et_descricao'  => 'required|max:100'
        ];

        public function $messages(){
                 
            return [

                            'et_codigo.required'         => 'O campo código é obrigatório',
                            'et_codigo.max'              => 'O campo código só pode ter no máximo 7 caracteres',
                            'et_nome.required'           => 'O campo é obrigatório',
                            'et_nome.max'                => 'O campo nome só pode ter no máximo 100 caracteres',
                            'et_preco.required'          => 'O campo valor é obrigatório',
                            'et_preco.numeric'           => 'O campo valor só pode ter numeros',
                            'et_descricao.required'      => 'O campo descricao é obrigatório',
                            'et_descricao.max'           => 'O campo descricao só pode conter no máximo 100 caracteres',


                   ]; 
         }   
    }
}
