<?php

namespace App\Models\Painel;

use Illuminate\Database\Eloquent\Model;

class Produtos extends Model
{
    public $timestamps = false;
	protected $fillable = [

		'et_codigo', 'et_nome', 'et_preco', 'et_descricao'

	];

	//protected $guarded  = ['updated_at'];

 public $rules = [

            'et_codigo'     => 'required|max:7',
            'et_nome'       => 'required|max:100',
            'et_preco'      => 'required|numeric',
            'et_descricao'  => 'required|max:100'
        ];

        public $messages = [

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
