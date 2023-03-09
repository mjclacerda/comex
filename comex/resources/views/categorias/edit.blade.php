<x-layout title="Edição de Categoria {{ $categoria->nome }}">
    <div class="container">
        <h1>Categorias</h1>
    @if($errors->any())<x-erros/>@endif
    <x-form action="{{ route ('categorias.update', $categoria->id)}}" 
        nome="{{ $categoria->nome }}" 
        bname="Alterar"
        met="PUT"/>
    </div>
</x-layout>