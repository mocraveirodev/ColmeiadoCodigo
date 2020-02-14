<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Colmeia do Código</title>
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
    <!-- {{ print_r($errors->all()) }}
    @if(!empty($errors->all()))
        @foreach ($errors->all() as $error)
            <div>{{ $error }}</div>
        @endforeach
    @endif -->
    @include('includes.header')

    <div class="menuDireito">
        <div class="botoes">
            <img src="img/profileImg.svg" class="profile mr-3" alt="Imagem de Perfil" onclick="menuAluno()">
            <div class="navegacao">
                <a href="/notificacao" ><img class="btnAluno" src="img/notificacaoAtivo.svg" alt="Notificação"></a>
                <a href="/chat" ><img class="btnAluno" src="img/chatNotificacao.svg" alt="Chat"></a>
                <a href="/config" ><img class="btnAluno" src="img/configuracoes.svg" alt="Configurações"></a>
                <a href="/ajuda" ><img class="btnAluno" src="img/ajuda.svg" alt="Ajuda"></a>
                <form method="post" action="{{ route('logout') }}" > @csrf <button type="submit" class="btn text-warning">logout</button></form>
            </div>
        </div>
    </div>
    <main id="home">
        <section id="banner" class="text-center">
            <div class="container">
                <div class="row text-center pt-5 mt-5 mt-md-0">
                    <div class="col-md-5 d-none d-md-block">
                        <img src="img/colmeia.svg" class="img-fluid" alt="Imagem de Colmeia">
                    </div>
                    <div class="col-md-7 my-auto">
                        <p class="pt-sm-5">APRENDA. DESENVOLVA. CONSTRUA.</p>
                        <p class="pb-sm-5">Sua própria colmeia do conhecimento.</p>
                        <a href="#" class="btn btn-warning my-2 my-sm-0 ml-3 mr-3 mb-5 text-dark" data-toggle="modal" data-target="#modalCadastrar">Venha para nossa Colmeia</a>
                    </div>
                </div>
            </div>
            <a class="setas" href="#trilhas"><i class="fas fa-angle-double-down fa-3x text-warning d-none d-md-block mt-4"></i></a>
        </section>
        <section id="trilhas">
            <div class="container">
                <div class="row pt-5">
                    <div class="col-5 p-2 my-auto">
                        <img src="img/trilhas.svg" class="img-fluid" alt="Imagem das Trilhas">
                    </div>
                    <div class="col-7 p-0 my-auto text-white">
                        <p class="pb-md-3">Aprenda as principais skills utilizadas pelo mercado e alavanque a sua carreira!</p>
                        <p class="pb-md-4"><span>Nossas trilhas de reconhecimento:</span></p>
                        <div class="d-flex flex-row justify-content-center">
                            @if(Auth::user())
                                <a href="/colmeia">
                                    <div class="card text-white bg-warning mb-3 mr-2 align-items-center flex-row">
                                        <img src="img/front.svg" class="img-fluid p-2 d-none d-md-block" alt="Trilha FrontEnd">
                                        <p class="card-text p-2">FrontEnd</p>
                                    </div>
                                </a>
                            @else
                                <a href="#" data-toggle="modal" data-target="#modalLogar">
                                    <div class="card text-white bg-warning mb-3 mr-2 align-items-center flex-row">
                                        <img src="img/front.svg" class="img-fluid p-2 d-none d-md-block" alt="Trilha FrontEnd">
                                        <p class="card-text p-2">FrontEnd</p>
                                    </div>
                                </a>
                            @endif
                            <div class="card text-white bg-warning mb-3 align-items-center flex-row border-0">
                                <img src="img/back.svg" class="img-fluid p-2" alt="Trilha BackEnd">
                                <p class="card-text p-2 m-0">BackEnd</p>
                                <div class="capa texto">Em breve</div>                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="sobre" class="text-center d-none d-md-block">
            <p class="text-white pt-md-5 pb-md-5 mt-md-5">CONHEÇA O PROJETO:</p>
            <p class="text-center pt-5 pb-5">
                <i class="fas fa-fw fa-quote-left text-white"></i>
                A Colmeia do Código é uma iniciativa criada pelos alunos do curso de desenvolvimento Web FullStack da Digital House com intuito de descomplicar e tornar mais acessível o conhecimento de programação, pois todos sabemos como já é difícil ter linguagens de programação em inglês, para além dessa barreira queremos proporcionar o acesso aos conceitos e conteúdos 100% em português para que todos possam construir sua própria colmeia do conhecimento e colaborar com os outros.
                <i class="fas fa-fw fa-quote-right text-white"></i>
            </p>
        </section>
        <section id="planos">
            <p class="text-center p-4 m-0">NOSSOS PLANOS:</p>
            <div class="d-flex justify-content-around align-items-baseline ml-2 mr-2 mb-md-5">
                <div class="card bg-warning mb-3 mr-2" style="max-width: 18rem;">
                    <div class="card-header text-center">GRATUITO</div>
                    <div class="card-body p-1 text-center">
                        <ul class="m-0 p-2 p-sm-4 text-left mb-5">
                            <li>Acesso a todos os cursos;</li>
                            <li>Mais de 500 horas de conteúdo;</li>
                            <li>Acesso ao chat da colmeia;</li>
                        </ul>
                        <button type="button" class="btn text-white shadow-lg">INSCREVA-SE</button>
                    </div>
                </div>
                <div class="card bg-warning mb-3 mr-2" style="max-width: 18rem;">
                    <div class="card-header text-center">PRO</div>
                    <div class="card-body p-1 text-center">
                        <ul class="m-0 p-2 p-sm-4 text-left">
                            <li>Acesso a todos os cursos;</li>
                            <li>Mais de 500 horas de conteúdo;</li>
                            <li>Acesso ao chat da colmeia;</li>
                            <li>Game interativo de estudo;</li>
                            <li>Certificado de conclusão;</li>
                            <li>Suporte;</li>
                        </ul>
                        <p class="p-3 m-0">R$ 320,00</p>
                        <button type="button" class="btn text-white shadow-lg">INSCREVA-SE</button>
                    </div>
                </div>
                <div class="card bg-warning mb-3" style="max-width: 18rem;">
                    <div class="card-header text-center">PREMIUM</div>
                    <div class="card-body p-1 text-center">
                        <ul class="m-0 p-2 p-sm-4 text-left">
                            <li>Acesso a todos os cursos;</li>
                            <li>Mais de 500 horas de conteúdo;</li>
                            <li>Acesso ao chat da colmeia;</li>
                            <li>Game interativo de estudo;</li>
                            <li>Certificado de conclusão;</li>
                            <li>Suporte;</li>
                            <li>Consultoria de carreira;</li>
                            <li>Acesso ao grupo fechado de dicas;</li>
                            <li>Projetos para construir portfólio;</li>
                            <li>Vagas e dicas de processos seletivos;</li>
                        </ul>
                        <p class="p-3 m-0">R$ 320,00</p>
                        <button type="button" class="btn text-white shadow-lg">INSCREVA-SE</button>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer class="text-center">
        <p class="text-white m-0 p-3">Colmeia do código © 2019 Todos os direitos reservados</p>
        <ul class="list-inline m-0">
            <li class="list-inline-item p-3 m-0"><a href="#"><i class="fab fa-2x fa-twitter text-white"></i></a></li>
            <li class="list-inline-item p-3 m-0"><a href="#"><i class="fab fa-2x fa-facebook-f text-white"></i></a></li>
            <li class="list-inline-item p-3 m-0"><a href="#"><i class="fab fa-2x fa-instagram text-white"></i></a></li>
            <li class="list-inline-item p-3 m-0"><a href="#"><i class="fab fa-2x fa-linkedin-in text-white"></i></a></li>
        </ul>
    </footer>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="js/verificaEmail.js"></script>
    <script src="js/valida.js" type="text/javascript"></script>
</body>
</html>