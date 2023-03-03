<x-layout title="Produtos">
    <a href="{{ route('produtos.create') }}" class="btn btn-info mb-2">Adicionar</a>
    @isset($mensagemSucesso)
    <div class="alert alert-success">{{ $mensagemSucesso }}</div>
    @endisset
    <ul class="list-group">
        @foreach ($produtos as $produto)
            <li class="list-group-item d-flex justify-content-between align-items-center">{{$produto->nome}}
               <div class="btn-group">
                <form action="{{ route('produtos.destroy',$produto->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm mr-2">x</button>
                </form>

                <form action="{{ route('produtos.edit', $produto->id) }}" method="put" class="ms-1">
                    @csrf
                    @method('put')
                    <button class="btn btn-warning btn-sm">e</button>
                </form>
               </div> 
            </li> 
        @endforeach
    </ul>
</x-layout>


