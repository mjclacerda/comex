<div class="mb-3">
  <select >
    @foreach ($categorias->all() as $categoria)
        <option value="{{ $categoria->id }}">{{ $categoria->nome }}</option>
   @endforeach
 </select>
</div>