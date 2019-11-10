<div class="modal fade" id="modalLogar" tabindex="-1" role="dialog" aria-labelledby="logarUsuario" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="logarUsuario">Entrar</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="modal-main">
            <button type="button" class="btn btn-primary">Facebook</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Google</button>
            <h5>ou entre com</h5>
        </div>
        <form action="#" method="post">
        <div class="form-group">
                <label for="email">E-mail</label>
                <input type="email" name="email" id="email" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="senha">Senha</label>
                <input type="password" name="senha" id="senha" class="form-control" oninput="this.value = this.value.replace((\\d)*([a-z])*([A-Z])*([@#$%])*)"  minlength="8" required>
            </div>
            <div class="form-group text-center">
                <button class="btn-warning" type="submit">Entrar</button>
            </div> 
            <p>esqueci minha senha!</p>
      </div>
      <div class="modal-footer">
        <h5>Não tem uma conta? <a href="#" data-toggle="modal" data-target="#modalCadastrar" data-dismiss="modal">Criar conta!</a></h5>
      </div>
    </div>
  </div>
</div>