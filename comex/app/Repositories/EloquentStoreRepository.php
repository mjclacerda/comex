<?php

namespace App\Repositories;

use App\Http\Requests\ClientesFormRequest;
use Illuminate\Support\Facades\DB;
use App\Models\Cliente;
use App\Models\Endereco;

class EloquentStoreRepository implements StoreRepository{

    public function add(ClientesFormRequest $request):Cliente
    {
        return DB::transaction(function () use ($request){
            $cliente = Cliente::create($request->all());
            $endereco = [];
            $endereco[] = [
                'cliente_id' => $cliente->id,
                'rua' => $request->rua,
                'numero' => $request->numero,
                'complemento' => $request->complemento,
                'bairro' => $request->bairro,
                'cidade' => $request->cidade,
                'estado' => $request->estado,
            ];
            Endereco::insert($endereco);
            return $cliente;
        });
    }

    public function alt(Cliente $cliente, ClientesFormRequest $request):Cliente
    {
        return DB::transaction(function () use ($cliente, $request){
        $cliente->fill($request->all());
        $cliente->save();
        Endereco::where('id', $cliente->endereco->id)->
        update(['cliente_id' => $cliente->id,
        'rua' => $request->rua,
        'numero' => $request->numero,
        'complemento' => $request->complemento,
        'bairro' => $request->bairro,
        'cidade' => $request->cidade,
        'estado' => $request->estado]);
        return $cliente;
        });
    }
}