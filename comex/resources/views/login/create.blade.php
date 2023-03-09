  <x-layout title="new user">
    <div class="row justify-content-md-center">
        <form class="col col-lg-4">
          <h1 class="m-3">Cadastro de Usuários</h1>
        @if($errors->any())<x-erros/>@endif
        <div class="mb-3 row">
          <label for="Nome" class="col-sm-3 col-form-label">Nome</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="Nome">
          </div>
        </div>
        <div class="mb-3 row">
          <label for="Email" class="col-sm-3 col-form-label">Email</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="Email" placeholder="email@example.com">
          </div>
        </div>
        <div class="mb-3 row">
          <label for="inputPassword" class="col-sm-3 col-form-label">Password</label>
          <div class="col-sm-8">
            <input type="password" class="form-control" id="inputPassword">
          </div>
        </div>
        <div class="mb-3 row">
          <label for="confirmpass" class="col-sm-3 col-form-label">Confirm Password</label>
          <div class="col-sm-8">
            <input type="password" class="form-control" id="confirmpass">
          </div>
        </div>
        </form>
    </div>
  </x-layout>