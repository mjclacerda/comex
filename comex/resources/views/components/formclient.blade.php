<form method="POST" action="{{$action}}">
    @csrf
    @isset($met)
    @method('PUT')
    @endisset
    <div class="form-floating mb-3">
        <input type="text" id="nome" name="nome" class="form-control" placeholder="nome" @isset($nome) value="{{ $nome }}"@endisset>
        <label for="nome">Nome</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" id="cpf" name="cpf" class="form-control" placeholder="cpf" @isset($cpf) value="{{ $cpf }}"@endisset>
        <label for="cpf">CPF</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" id="telefone" name="telefone" class="form-control" placeholder="telefone" @isset($telefone) value="{{ $telefone }}"@endisset>
        <label for="telefone">Telefone</label>
    </div>
        <div class=" mt-3"> Endereço</div>
    <div class="form-floating mb-3">
        <input type="text" id="rua" name="rua" class="form-control" placeholder="Logradouro" @isset($rua) value="{{ $rua }}"@endisset>
        <label for="rua">Logradouro</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" id="numero" name="numero" class="form-control" placeholder="Numero" @isset($numero) value="{{ $numero }}"@endisset>
        <label for="numero">Número</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" id="complemento" name="complemento" class="form-control" placeholder="complemento" @isset($complemento) value="{{ $complemento }}"@endisset>
        <label for="complemento">Complemento</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" id="bairro" name="bairro" class="form-control" placeholder="Bairro" @isset($bairro) value="{{ $bairro }}"@endisset>
        <label for="bairro">Bairro</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" id="cidade" name="cidade" class="form-control" placeholder="cidade" @isset($cidade) value="{{ $cidade }}"@endisset>
        <label for="cidade">Cidade</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" id="estado" name="estado" class="form-control" placeholder="estado" @isset($estado) value="{{ $estado }}"@endisset>
        <label for="estado">Estado</label>
    </div>
    <button type="submit" class="btn btn-primary">{{ $bname }}</button>
</form>