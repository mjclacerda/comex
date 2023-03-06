<?php

namespace App\Repositories;

use App\Http\Requests\ClientesFormRequest;
use App\Models\Cliente;

interface StoreRepository {

    public function add(ClientesFormRequest $request):Cliente;

    public function alt(Cliente $cliente, ClientesFormRequest $request):Cliente;
    
}