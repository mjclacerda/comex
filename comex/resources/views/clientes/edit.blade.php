<x-layout title="Edição de Clientes {{ $cliente->nome }}">
    @if($errors->any())<x-erros/>@endif
    <x-formclient action="{{ route ('clientes.update', $cliente->id) }}"
        nome="{!! $cliente->nome !!}"
        cpf="{!! $cliente->cpf !!}"
        telefone="{!! $cliente->telefone !!}"
        rua="{!! $cliente->endereco->rua !!}"
        numero="{!! $cliente->endereco->numero !!}"
        complemento="{!! $cliente->endereco->complemento !!}"
        bairro="{!! $cliente->endereco->bairro !!}"
        cidade="{!! $cliente->endereco->cidade !!}"
        estado="{!! $cliente->endereco->estado !!}"
        bname="Alterar"
        met="PUT"/>
</x-layout>