<?php 
    // "email"=>"monica@email.com","senha"=>'$2y$10$WXI2Yxl3jO1uS4sORvYiJu/LSMi8d4MS3/2VJm0u9tod82HKTUH9u'
    $usuario = ["email"=>"monica@email.com","senha"=>'$2y$10$WXI2Yxl3jO1uS4sORvYiJu/LSMi8d4MS3/2VJm0u9tod82HKTUH9u'];
    include_once "views/includes/cadastro.php";
    include_once "views/includes/login.php";
?>
<header>
<?php if(isset($usuario) && $usuario != []) {?>
    <nav class="navbar navbar-expand-lg fixed-top p-0">
        <a class="navbar-brand ml-5" href="/ColmeiadoCodigo/"><img class="logo" src="views/img/logo horizontal.png" alt="Logo Colmeia do Código"></a>
        <ul class="navbar-nav mr-auto ml-5">
            <li class="nav-item">
                <a class="nav-link text-white" href="#trilhas">TRILHAS</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="#sobre">SOBRE</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="#planos">PLANOS</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="/ColmeiadoCodigo/area-aluno">COLMEIA</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="/ColmeiadoCodigo/area-aluno">CONQUISTAS</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="/ColmeiadoCodigo/area-aluno">CHAT</a>
            </li>
        </ul>
        <img src="views/img/profileImg.svg" class="profile mr-4" alt="Imagem de Perfil" onclick="menuAluno()">
    </nav>
<?php }else{ ?>
    <nav class="navbar navbar-expand-lg fixed-top p-0">
        <a class="navbar-brand ml-5 p-2" href="/ColmeiadoCodigo/"><img class="logo" src="views/img/logo horizontal.png" alt="Logo Colmeia do Código"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapseMenu" aria-controls="collapseMenu" aria-expanded="false" aria-label="Toggle navigation">
            <div class="container" onclick="menuChange(this)">
                <div class="bar1"></div>
                <div class="bar2"></div>
                <div class="bar3"></div>
            </div>
        </button>
        <div class="collapse navbar-collapse text-center" id="collapseMenu">
            <ul class="navbar-nav mr-auto ml-5">
                <li class="nav-item">
                    <a class="nav-link text-white" href="#trilhas">TRILHAS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#sobre">SOBRE</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#planos">PLANOS</a>
                </li>
            </ul>
            <a href="#" class="btn btn-warning my-2 my-sm-0 ml-3 mr-3 text-white" data-toggle="modal" data-target="#modalCadastrar">cadastrar</a>
            <a href="#" class="btn text-warning ml-4 mr-4" data-toggle="modal" data-target="#modalLogar">login</a>
        </div>
    </nav>
<?php } ?>
</header>
<script>
    function menuChange(x) {
        x.classList.toggle("change");
    }

    function menuAluno() {
        if(window.innerWidth >= 992){
            $(".menuDireito").toggle();
        }else{
            window.location.href = "/ColmeiadoCodigo/area-aluno";
        }
    }
</script>