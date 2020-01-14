<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titulo')</title>    
    <!-- Favicon -->
    <link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon">
    <!-- Fonte -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:600,700&display=swap" rel="stylesheet">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- Font Awesome  -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <!-- Style  -->
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <main id="areaDoAluno">
        <section class="menuNav">
            <img src="img/menuHamburguer.svg" alt="Menu" class="menu" onclick="menuNav()">
            <div class="menuEsquerdo">
                <div class="botoes">
                    <img src="img/fechar.svg" alt="Fechar" class="menu" onclick="menuNav()">
                    <div class="navegacao">
                        <a href="/home"><img class="btnLateral" src="img/inicio.svg" alt="Home"></a>
                        <a href="#"><img class="btnLateral ativo" src="img/areaDoAluno.svg" alt="Inicio"></a>
                        <a href="#"><img class="btnLateral" src="img/conquistas.svg" alt="Conquistas"></a>
                        <a href="#"><img class="btnLateral" src="img/chat.svg" alt="Chat"></a>
                    </div>
                </div>
            </div>
        </section>

        @yield ('conteudo')

        <section class="menuAluno">
            <img src="img/profileImg.svg" class="profile" alt="Imagem de Perfil" onclick="menuAluno()">
            <div class="menuDireito">
                <div class="botoes">
                    <img src="img/profileImg.svg" class="profile" alt="Imagem de Perfil" onclick="menuAluno()">
                    <div class="navegacao">
                        <a href="#" ><img class="btnAluno" src="img/notificacaoAtivo.svg" alt="Notificação"></a>
                        <a href="#" ><img class="btnAluno" src="img/chatNotificacao.svg" alt="Chat"></a>
                        <a href="#" ><img class="btnAluno" src="img/configuracoes.svg" alt="Configurações"></a>
                        <a href="#" ><img class="btnAluno" src="img/ajuda.svg" alt="Ajuda"></a>
                    </div>
                </div>
            </div>
        </section>

        <section class="menuResp">
            <a href="/home"><img class="btnResp" src="img/inicio.svg" alt="Home"></a>
            <a href="#"><img class="btnResp" src="img/chat.svg" alt="Chat"></a>
            <a href="#"><img class="btnResp ativoResp" src="img/areaDoAluno.svg" alt="Inicio"></a>
            <a href="#"><img class="btnResp" src="img/conquistas.svg" alt="Conquistas"></a>
            <img src="img/profileImg.svg" class="profileResp" alt="Imagem de Perfil" onclick="menuAluno()">
        </section>
        
    </main>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script>
        function menuNav() {
            $(".menuEsquerdo").toggle();
        }
        function menuAluno() {
            $(".menuDireito").toggle();
        }
    </script>

</body>
</html>