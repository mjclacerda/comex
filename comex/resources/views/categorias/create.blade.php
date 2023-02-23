<x-layout title="Nova Categoria">
    @if($errors->any())<x-erros/>@endif
    <x-form action="{{ route ('categorias.store')}}" bname="Criar" :nome="old('nome')"/>
</x-layout>