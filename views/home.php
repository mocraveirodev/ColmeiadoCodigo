
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Coméia do Código</title>
    <link rel="shortcut icon" href="views/img/favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="views/css/styles.css">
</head>
<body>
    
    <?php include_once "views/includes/header.php"; ?>
    <main>
        <section id="banner" >
            <div class="container mt-5 mb-5">
                <div class="row text-center pt-5">
                    <div class="col-md-5 d-none d-md-block">
                        <img src="views/img/colmeia.svg" class="img-fluid" alt="Imagem de Colmeia">
                    </div>
                    <div class="col-md-7 my-auto">
                        <p class="pt-sm-5">APRENDA. DESENVOLVA. CONSTRUA.</p>
                        <p class="pb-sm-5">Sua própria colmeia do conhecimento.</p>
                    </div>
                </div>
            </div>
        </section>
        <section id="trilhas">
            <div class="container pt-md-5 pb-5 mb-md-5">
                <div class="row text-center pt-md-5 mt-5 pl-2 pr-2">
                    <div class="col-5 p-2 my-auto">
                        <img src="views/img/trilhas.svg" class="img-fluid" alt="Imagem das Trilhas">
                    </div>
                    <div class="col-7 p-0 my-auto text-white">
                        <p class="pb-md-5">Aprenda as principais skills utilizadas pelo mercado e alavanque a sua carreira!</p>
                        <p class="text-white"><span>Nossas trilhas de reconhecimento:</span></p>
                        <div class="d-flex flex-row justify-content-center">
                            <div class="card text-white bg-warning mb-3 mr-2 align-items-center flex-row">
                                <img width="150" src="views/img/front.svg" class="img-fluid p-2 d-none d-md-block" alt="Trilha FrontEnd">
                                <p class="card-text p-2">FrontEnd</p>
                            </div>
                            <div class="card text-white bg-warning mb-3 align-items-center flex-row border-0">
                                <img width="150" src="views/img/back.svg" class="img-fluid p-2 d-none d-md-block" alt="Trilha BackEnd">
                                <p class="card-text p-2 m-0">BackEnd<br><span>Em breve</span></p>
                                <div class="capa"></div>                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="sobre" class="text-center p-5 d-none d-md-block">
            <p class="text-white pt-md-5 mt-md-5">CONHEÇA O PROJETO:</p>
            <img src="views/img/video.png" class="img-fluid mb-md-5" alt="Video">
        </section>
        <section id="planos" class="pt-5 pb-5">
            <p class="text-center pt-md-5 mt-md-5">NOSSOS PLANOS:</p>
            <div class="d-flex justify-content-around align-items-baseline ml-2 mr-2 mb-md-5">
                <div class="card bg-warning mb-3 mr-2" style="max-width: 18rem;">
                    <div class="card-header text-center"><p class="m-0">GRATUITO</p></div>
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
                    <div class="card-header text-center"><p class="m-0">PRO</p></div>
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
                    <div class="card-header text-center"><p class="m-0">PREMIUM</p></div>
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
        <!-- <div class="d-flex justify-content-end align-items-center"> -->
            <ul class="list-inline m-0">
                <li class="list-inline-item p-3 m-0"><a href="#"><i class="fab fa-2x fa-twitter text-white"></i></a></li>
                <li class="list-inline-item p-3 m-0"><a href="#"><i class="fab fa-2x fa-facebook-f text-white"></i></a></li>
                <li class="list-inline-item p-3 m-0"><a href="#"><i class="fab fa-2x fa-instagram text-white"></i></a></li>
                <li class="list-inline-item p-3 m-0"><a href="#"><i class="fab fa-2x fa-linkedin-in text-white"></i></a></li>
            </ul>
        <!-- </div> -->
    </footer>
    



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>