<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Cadastre
</button>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <form action="cadastrar.php" method="post">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Faça seu cadastro</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="flex-column">
          <div class="row">
            <div class="text-center">
        <label for="">Login </label>
        </div>
        <input type="text" id="nome" name="nome">
      </div>
        <div class="row">
          <div class="text-center">
        <label for="">Senha </label>
        </div>
        <input type="text" id="senha" name="senha">
      </div>
    </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Confirme</button>
      </div>
    </div>
    </form>
  </div>
</div>
