<section class="menuAluno">
    <p class="text-warning p-3 m-0" onclick="menuAluno()">{{$user->name}}! <i class="fa fa-caret-down pl-2"></i></p>
    <div class="menuDireito">
        <div class="botoes">
            <p class="text-warning p-3 m-0" onclick="menuAluno()">{{$user->name}}! <i class="fa fa-caret-down pl-2"></i></p>
            <div class="navegacao">
                <a href="/notificacao" ><img class="btnAluno" src="img/notificacaoAtivo.svg" alt="Notificação"></a>
                <a href="{{ route('chat') }}" ><img class="btnAluno" src="img/chatNotificacao.svg" alt="Chat"></a>
                <a href="/config" ><img class="btnAluno" src="img/configuracoes.svg" alt="Configurações"></a>
                <a href="/ajuda" ><img class="btnAluno" src="img/ajuda.svg" alt="Ajuda"></a>
                <form method="post" action="{{ route('logout') }}" > @csrf <button type="submit" class="btn text-warning">logout</button></form>
            </div>
        </div>
    </div>
</section>