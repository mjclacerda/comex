<x-layout title="Categorias">
    <div class="container">
        <h1>Categorias</h1>
        <a href="{{ route('categorias.create') }}" class="btn btn-info mb-2">Adicionar</a>
        @isset($mensagemSucesso)
        <div class="alert alert-success">{{ $mensagemSucesso }}</div>
        @endisset
        <ul class="list-group">
            @foreach ($categorias as $categoria)
                <li class="list-group-item d-flex justify-content-between align-items-center">{{$categoria->nome}}
                   <div class="btn-group">
                    <form action="{{ route('categorias.destroy',$categoria->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm mr-2">x</button>
                    </form>
    
                    <form action="{{ route('categorias.edit',$categoria->id) }}" method="put" class="ms-1">
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


