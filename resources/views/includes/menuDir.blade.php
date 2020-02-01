<section class="menuAluno">
    <p class="text-dark mt-4 pr-3 text-center" onclick="menuAluno()">{{$user->name}}<br><i class="fas fa-angle-double-down"></i></p>
    <div class="menuDireito">
        <div class="botoes">
        <p class="text-warning mt-4 pr-2 text-center" onclick="menuAluno()">{{$user->name}}<br><i class="fas fa-angle-double-down"></i></p>
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