<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClientesFormRequest;
use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Repositories\StoreRepository;

class ClientesController extends Controller
{
    public function __construct(private StoreRepository $repository)
    {  
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $clientes = Cliente::all();
        $mensagemSucesso = $request->session()->get('mensagem.sucesso');
        $request->session()->forget('mensagem.sucesso');
        return view('clientes.index')->with('clientes',$clientes)->with('mensagemSucesso',$mensagemSucesso);;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clientes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ClientesFormRequest $request)
    {
        $cliente = $this->repository->add($request);
        return to_route('clientes.index')->with('mensagem.sucesso', "Cliente {$cliente->nome} cadastrado com sucesso!");

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
    public function edit(Cliente $cliente)
    {
        return view('clientes.edit')->with('cliente',$cliente);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Cliente $cliente, ClientesFormRequest $request)
    {
        $cliente = $this->repository->alt($cliente, $request);
        return to_route('clientes.index')->with('mensagem.sucesso', "Cliente '{$cliente->nome}' atualizado com sucesso");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        Cliente::destroy($id);
        $request->session()->put('mensagem.sucesso', 'Cliente removido com sucesso');
        return to_route('clientes.index');
    }
}
