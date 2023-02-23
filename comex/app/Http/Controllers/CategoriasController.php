<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoriasFormRequest;
use Illuminate\Http\Request;
use App\Models\Categoria;

class CategoriasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $categorias = Categoria::query()->orderBy('nome')->get();
        $mensagemSucesso = $request->session()->get('mensagem.sucesso');
        $request->session()->forget('mensagem.sucesso');
        return view(view:'categorias.index')->with('categorias',$categorias)->with('mensagemSucesso',$mensagemSucesso);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categorias.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoriasFormRequest $request)
    {
       $categoria = Categoria::create($request->all());
        return to_route('categorias.index')->with('mensagem.sucesso', "Categoria {$categoria->nome} criada com sucesso!");
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
    public function edit(Categoria $categoria)
    {
        return view('categorias.edit')->with('categoria',$categoria);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Categoria $categoria, CategoriasFormRequest $request)
    {   
        $categoria->fill($request->all());
        $categoria->save();
        return to_route('categorias.index')->with('mensagem.sucesso', "Categoria '{$categoria->nome}' atualizada com sucesso");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        Categoria::destroy($id);
        $request->session()->put('mensagem.sucesso', 'Categoria removida com sucesso!');

        return to_route('categorias.index');
    }
}
