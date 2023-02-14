<x-layout title="Categorias">
    <a href="/categorias/criar" class="btn btn-info mb-2">Adicionar</a>
    <ul class="list-group">
        @foreach ($categorias as $categoria)
            <li class="list-group-item">{{$categoria}}</li>
        @endforeach
    </ul>
</x-layout>


