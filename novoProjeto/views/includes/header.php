<?php include_once "views/includes/cadastro.php"; ?>
<?php include_once "views/includes/login.php"; ?>
<header>
    <nav class="navbar navbar-expand-lg fixed-top">
        <a class="navbar-brand ml-5" href="/NewColmeia/projeto"><img width="150" src="views/img/logo horizontal.png" alt="Logo Colmeia do Código"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapseMenu" aria-controls="collapseMenu" aria-expanded="false" aria-label="Toggle navigation">
            <div class="container" onclick="menuChange(this)">
                <div class="bar1"></div>
                <div class="bar2"></div>
                <div class="bar3"></div>
            </div>
        </button>
        <div class="collapse navbar-collapse" id="collapseMenu">
            <ul class="navbar-nav mr-auto ml-5">
                <li class="nav-item">
                    <a class="nav-link text-white" href="/NewColmeia/projeto/trilhas-home">TRILHAS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="/NewColmeia/projeto/sobre-home">SOBRE</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="/NewColmeia/projeto/planos-home">PLANOS</a>
                </li>
            </ul>
            <div class="login text-center p-3">
                <button class="btn btn-warning my-2 my-sm-0 ml-3 mr-3" data-toggle="modal" data-target="#modalCadastrar"><a href="#" class="text-white">cadastrar</a></button>
                <a href="#" class="btn text-warning ml-5 mr-5" data-toggle="modal" data-target="#modalLogar">login</a>
            </div>
        </div>
    </nav>
</header>
<script>
    function menuChange(x) {
        x.classList.toggle("change");
    }
</script>