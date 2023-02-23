<x-layout title="Edição de Categoria {{ $categoria->nome }}">
    @if($errors->any())<x-erros/>@endif
    <x-form action="{{ route ('categorias.update', $categoria->id)}}" 
        nome="{{ $categoria->nome }}" 
        bname="Alterar"
        met="PUT"/>
</x-layout>