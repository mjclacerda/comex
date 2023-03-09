<x-layout title="Clientes">
    <div class="container">
        <h1>Clientes</h1>
    @if($errors->any())<x-erros/>@endif
    <x-formclient action="{{ route ('clientes.store')}}" bname="Adicionar"/>
    </div>
</x-layout>