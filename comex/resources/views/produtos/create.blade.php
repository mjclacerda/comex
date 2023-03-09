<x-layout title="Novo Produto">
    <div class="container">
        <h1>Produtos</h1>
    @if($errors->any())<x-erros/>@endif
    <x-formprod 
    action="{{ route ('produtos.store')}}" 
    bname="Criar" :nome="old('nome')" 
    :categorias="$categorias" 
    :descricao="old('descricao')" 
    :preco="old('preco')" 
    :estoque="old('estoque')"/>
    </div>
</x-layout>