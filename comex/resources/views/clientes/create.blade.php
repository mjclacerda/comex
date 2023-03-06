<x-layout title="Clientes">
    @if($errors->any())<x-erros/>@endif
    <x-formclient action="{{ route ('clientes.store')}}" bname="Adicionar"/>
</x-layout>