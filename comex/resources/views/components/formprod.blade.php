<form action="{{$action}}" method="post">
        @csrf

        @isset($met)
        @method('PUT')
        @endisset
        <div class="mb-3">
            <label for="cat" class="form-label">Categoria:</label>
            <select class="form-control" name="categoria_id" aria-label="Default select example">
                <option @isset ($catid) value={{ $catid }} @endisset selected>@isset($catname){{ $catname }}@endisset</option>
                  @foreach ($categorias as $categoria)
                  <option value="{{ $categoria->id }}" @selected(old('categoria_id')==$categoria->id)>{{ $categoria->nome }}</option>
                  @endforeach
             </select>
            <label for="nome" class="form-label">Nome:</label>
            <input type="text" id="nome" name="nome" class="form-control" @isset($nome) value="{{ $nome }}"@endisset>
            <label for="descricao" class="form-label">Descrição:</label>
            <input type="text" id="descricao" name="descricao" class="form-control" @isset($descricao) value="{{ $descricao }}"@endisset>
            <label for="preco" class="form-label">Preço:</label>
            <input type="text" id="preco" name="preco" class="form-control" @isset($preco) value="{{ $preco }}"@endisset>
            <label for="estoque" class="form-label">Estoque:</label>
            <input type="text" id="estoque" name="estoque" class="form-control" @isset($estoque) value="{{ $estoque}}"@endisset>
        </div>
        
        <button type="submit" class="btn btn-primary">{{ $bname }}</button>
</form>