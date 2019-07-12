<?php

namespace App\Http\Controllers\Painel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Painel\Produtos;
use App\Http\Requests\Painel\ProdutoFormRquest;

class ProdutoController extends Controller
{

    private $produto;
    private $total_pagina = 8;

    public function __construct(Produtos $produto){

        $this->produto = $produto;

    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        
        $titulo = "Listagem dos Produtos"; 
        $produtos = $this->produto->paginate($this->total_pagina);

        return view('painel.produtos.index', compact('produtos', 'titulo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       

       return view('painel.produtos.create-edit');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
           

        //dd($request->all());
        //dd($request->only('nome', 'descricao'));
        //dd($request->except(['_token']));

        $dataForm = $request->all();

  

        $dataForm['et_preco'] = (!isset($dataForm['et_preco']) ) ? 0 : $dataForm['et_preco'];

        //$this->validate($request, $this->produto->rules);



        $validate = validator($dataForm, $this->produto->rules, $this->produto->messages);

        if($validate->fails()){
            return redirect()
                    ->route('produtos.create')
                    ->withErrors($validate)
                    ->withInput();
        }


        $insert = $this->produto->create($dataForm);

        if($insert)
        return redirect()->route('produtos.index');
        else
        return redirect()->route('produtos.create');
            

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $produtos = $this->produto->find($id);

        //$titulo = "Produto: {$produtos->et_nome}";

        return view('painel.produtos.show', compact('produtos'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

       $produtos = $this->produto->find($id);

       

       $titulo = "Editar Produto: {$produtos->et_nome}";

       

       return view('painel.produtos.create-edit', compact('produtos','titulo'));
     
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $dataForm = $request->all();

        $produtos = $this->produto->find($id);


        //$this->validate($request, $this->produto->rules);


        $validate = validator($dataForm, $this->produto->rules, $this->produto->messages);

        if($validate->fails()){
            return redirect()
                    ->route('produtos.create')
                    ->withErrors($validate)
                    ->withInput();
        }

        $update = $produtos->update($dataForm);

        if($update)
            return redirect()->route('produtos.index');
        else
            return redirect()->route('produtos.edit', $id)->with(['errors' => 'Falha ao editar']);     
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $produtos = $this->produto->find($id);
    
        $delete = $produtos->delete();

        if($delete)
            return redirect()->route('produtos.index');
        else
            return redirect()->route('produtos.show', $id)->with(['errors' => 'Falha ao deletar']);

    }

    public function testes(){



     /*  $insert = $this->produto->create([

        'et_codigo'     => 'YFRE4001',
        'et_nome'       => 'Relogio de Parede',
        'et_preco'      => 1.00,52,
        'et_descricao'  => 'Relogio de parede',

        ]);


        if($insert){
            return "Inserido com sucesso ID: {$insert->et_id}";
        }else{
            return 'Falha no envio';
        } */


        /*
        $prod = $this->produto->find(63);
        $prod->et_codigo = 'MGD477';
        $prod->et_nome = 'Relogio de pulso ponteiro';
        $prod->et_preco = '1.000';
        $prod->et_descricao = 'Relogio de pulso de ponteiro';
        $update = $prod->save();

        if($update){
            return 'Ataulizado com sucesso';
        }else{
            return 'Não na alteração';
        }*/


      //  $prod = $this->produto->find(63);
      /* $update = $this->produto
                       ->where('et_codigo', '=', 'MFF9200')
                       ->update([
                               'et_preco'      => 4.100,

        ]);

        if($update){
            return 'Ataulizado com sucesso';
        }else{
            return 'Não na alteração';
        }*/


        $prod = $this->produto->find(63);
        $delete = $prod->delete();

        if($delete){
            return 'Deletou com sucesso!';
        }else{
            return 'Falha ao deletar';
        }



    }
}
