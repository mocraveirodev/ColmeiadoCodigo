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
                <div id="facegmail" class="row container-fluid justify-content-center">
                    <div class="col-sm">
                        <button type="button" class="btn btn-primary">Facebook</button>
                    </div>
                    <div class="col-sm">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Google</button>
                    </div>
                </div>
                <div class="d-flex justify-content-center m-3">        
                    <h5 class="fonte-cinza">ou entre com</h5>
                </div>
                <form action="#" method="post">
                    <div class="form-group">
                        <label for="email">E-mail</label>
                        <input type="email" name="email" id="email" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="senha">Senha</label>
                        <input type="password" name="senha" id="senha" class="form-control" minlength="8" required>
                    </div>
                    <div class="form-group text-center">
                        <button class="btn-warning" type="submit">Entrar</button>
                    </div> 
                    <div class="row container-fluid justify-content-end"> 
                        <h5 class="fonte-cinza">esqueci minha senha!</h5>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <div class="row container-fluid justify-content-center">
                    <h5 class="fonte-cinza">Não tem uma conta? <a href="#" data-toggle="modal" data-target="#modalCadastrar" data-dismiss="modal" class="link">Criar conta!</a></h5>
                </div>
            </div>
        </div>
    </div>
</div>