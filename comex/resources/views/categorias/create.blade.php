<x-layout title="Nova Categoria">
    <div class="container">
        <h1>Categorias</h1>
    @if($errors->any())<x-erros/>@endif
    <x-form action="{{ route ('categorias.store')}}" bname="Criar" :nome="old('nome')"/>
    </div>
</x-layout>