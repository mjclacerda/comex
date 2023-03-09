<x-layout title="Edição de Produtos {{ $produto->nome }}">
    <div class="container">
        <h1>Produtos</h1>
    @if($errors->any())<x-erros/>@endif
    <x-formprod action="{{ route ('produtos.update', $produto->id) }}"
        nome="{!! $produto->nome !!}"
        :categorias="$categorias"
        catid="{!! $produto->categoria_id !!}"
        catname="{!! $produto->categoria->nome!!}"
        descricao="{!! $produto->descricao !!}" 
        preco="{{ $produto->preco }}"
        estoque="{{ $produto->estoque }}"
        bname="Alterar"
        met="PUT"/>
    </div>
</x-layout>