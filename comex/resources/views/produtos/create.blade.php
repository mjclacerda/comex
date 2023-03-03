<x-layout title="Novo Produto">
    @if($errors->any())<x-erros/>@endif
    <x-formprod action="{{ route ('produtos.store')}}" bname="Criar" :nome="old('nome')" :categorias="$categorias" :descricao="old('descricao')" :preco="old('preco')" :estoque="old('estoque')"/>
</x-layout>