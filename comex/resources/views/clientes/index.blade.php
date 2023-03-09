<x-layout title="Clientes">
    <div class="container">
        <h1>Clientes</h1>
    @if($errors->any())<x-erros/>@endif
    <a href="" class="btn btn-info mb-2">Pesquisar</a>
    <a href="{{ route('clientes.create') }}" class="btn btn-info mb-2">Cadastrar</a>
    <ul class="list-group">
        @foreach ($clientes as $cliente)
            <li class="list-group-item d-flex justify-content-between align-items-center">{{$cliente->nome}}
               <div class="btn-group">
                <form action="{{ route('clientes.destroy',$cliente->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm mr-2">x</button>
                </form>

                <form action="{{ route('clientes.edit',$cliente->id) }}" method="put" class="ms-1">
                    @csrf
                    @method('put')
                    <button class="btn btn-warning btn-sm">e</button>
                </form>
               </div> 
            </li> 
        @endforeach
    </ul>
    </div>
</x-layout>


