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
                <div class="facegmail">
                    <button type="button" class="btn btn-primary">Facebook</button>
                    <button type="button" class="btn btn-danger">Google</button>
                </div>
                <p class="m-3">ou cadastre-se com</p>
                <form action="{{ route('register') }}" method="post" id="formulario" class="formulario">
                    @csrf
                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="text" name="name" id="nome" class="form-control validar" required>
                    </div>
                    <div class="form-group">
                        <label for="email">E-mail</label>
                        <input type="email" name="email" id="email-register" class="form-control validar" required>
                    </div>
                    <div class="form-group">
                        <label for="senha">Senha</label>
                        <input type="password" name="password" id="senha" class="form-control validar" minlength="8" required>
                        <p class="senha">Sua senha deve ter no mínimo 8 caracteres e incluir letras, números e símbolos</p>
                    </div>
                    <div class="form-group">
                        <label for="repetir-senha">Confirme a Senha</label>
                        <input type="password" name="password_confirmation" id="repetir-senha" class="form-control validar" minlength="8" required>
                        <p class="senha">Sua senha deve ter no mínimo 8 caracteres e incluir letras, números e símbolos</p>
                    </div>
                    <button class="btn btn-warning" action="{{ route('register') }}" id="registerbtn" type="submit" >Comece a aprender agora!</button>
                </form>
            </div>
            <div class="modal-footer justify-content-center">
                <p>Já tem uma conta? <a href="#" data-toggle="modal" data-target="#modalLogar" data-dismiss="modal" class="text-warning">Entrar em sua conta!</a></p>
            </div>
        </div>
    </div>
</div>