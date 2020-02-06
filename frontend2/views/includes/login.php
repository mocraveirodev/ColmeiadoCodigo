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
                <div class="facegmail">
                    <button type="button" class="btn btn-primary">Facebook</button>
                    <button type="button" class="btn btn-danger">Google</button>
                </div>
                <p class="m-3">ou entre com</p>
                <form action="/ColmeiadoCodigo/area-aluno" method="post" class="formulario">
                    <div class="form-group">
                        <label for="email">E-mail</label>
                        <input type="email" name="email" id="email" class="form-control validar" required>
                    </div>
                    <div class="form-group">
                        <label for="senha">Senha</label>
                        <input type="password" name="senha" id="senha" class="form-control validar" minlength="8" required>
                    </div>
                    <div class="form-group text-center">
                        <button class="btn btn-warning" type="submit">Entrar</button>
                    </div>
                </form>
                <p class="text-right">esqueci minha senha!</p>
            </div>
            <div class="modal-footer justify-content-center">
                <p>Não tem uma conta? <a href="#" data-toggle="modal" data-target="#modalCadastrar" data-dismiss="modal" class="text-warning">Criar conta!</a></p>
            </div>
        </div>
    </div>
</div>