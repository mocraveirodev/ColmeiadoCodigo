<div class="modal fade" id="modalCadastrar" tabindex="-1" role="dialog" aria-labelledby="cadastrarUsuario" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="cadastrarUsuario">Cadastrar</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
        <span aria-hidden="true">&times;</span>
        </button>          
      </div>
      <div class="modal-body">
        <div class="modal-main">
            <button type="button" class="btn btn-primary">Facebook</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Google</button>
            <h5>ou cadastre-se com</h5>
        </div>
        <form action="#" method="post">
            <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" name="nome" id="nome" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="email" name="email" id="email" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="senha">Senha</label>
                <input type="password" name="senha" id="senha" class="form-control" oninput="this.value = this.value.replace((\\d)*([a-z])*([A-Z])*([@#$%])*)"  minlength="8" required>
                <p>Sua senha deve conter 8 caracteres ou mais e incluir letras, números e símbolos</p>
            </div>

            <div class="form-group text-center">
                <button class="btn-warning" type="submit">Comece a aprender agora!</button>
            </div>   
      </div>
      <div class="modal-footer">
        <h5>Já tem uma conta? <a href="#" data-toggle="modal" data-target="#modalLogar" data-dismiss="modal">Entrar em sua conta!</a></h5>             
      </div>
    </div>
  </div>
</div>