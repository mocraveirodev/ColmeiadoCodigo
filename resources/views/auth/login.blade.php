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
                <form method="POST" action="{{ route('login') }}" class="abc">
                    @csrf
                    <div class="form-group">
                        <label for="email">E-mail</label>
                        <input type="email"id="email" class="form-control" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="password">Senha</label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6 offset-md-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('Lembrar Senha') }}
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-warning">
                            {{ __('Entrar') }}
                        </button>

                        @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Esqueci minha senha!') }}
                            </a>
                        @endif                           
                    </div>
                </form>                
                <div class="modal-footer justify-content-center">
                    <p>Não tem uma conta? <a href="#" data-toggle="modal" data-target="#modalCadastrar" data-dismiss="modal" class="text-warning">Criar conta!</a></p>
                </div>
            </div>
        </div>
    </div>
</div>