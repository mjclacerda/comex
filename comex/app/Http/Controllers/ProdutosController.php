<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;
use App\Models\Categoria;
use App\Http\Requests\ProdutosFormRequest;

class ProdutosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $produtos = Produto::all();
        $mensagemSucesso = $request->session()->get('mensagem.sucesso');
        $request->session()->forget('mensagem.sucesso');
        return view(view:'produtos.index')->with('produtos',$produtos)->with('mensagemSucesso',$mensagemSucesso);
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { 
        $categorias = Categoria::all();
        return view('produtos.create')->with('categorias', $categorias);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProdutosFormRequest $request)
    {
        $produto = Produto::create($request->all());
        return to_route('produtos.index')->with('mensagem.sucesso', "Produto {$produto->nome} criado com sucesso!");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Produto $produto)
    {
        $categorias = Categoria::all();
        return view('produtos.edit')->with('produto', $produto)->with('categorias', $categorias);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Produto $produto, ProdutosFormRequest $request){
        
        $produto->fill($request->all());
        $produto->save();
        return to_route('produtos.index')->with('mensagem.sucesso', "Produto '{$produto->nome}' atualizado com sucesso");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        Produto::destroy($id);
        $request->session()->put('mensagem.sucesso', 'Produto removido com sucesso!');

        return to_route('produtos.index');
    }
}
