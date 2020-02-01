@include('auth.login')
@include('auth.register')

<header>
@if (auth()->user() && auth()->user() != [])
    <nav class="navbar navbar-expand-lg fixed-top p-0">
        <a class="navbar-brand ml-5" href="{{ route('home') }}"><img class="logo" src="img/logo horizontal.png" alt="Logo Colmeia do Código"></a>
        <ul class="navbar-nav mr-auto ml-5">
            <li class="nav-item">
                <a class="nav-link text-white" href="{{ route('cursos') }}">CURSOS</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="#sobre">SOBRE</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="#planos">PLANOS</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="{{ route('colmeia') }}">COLMEIA</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="{{ route('colmeia') }}">CONQUISTAS</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="{{ route('colmeia') }}">CHAT</a>
            </li>
        </ul>
        <p class="text-warning p-3 m-0" onclick="menuAluno()">Olá {{$user->name}}! <i class="fa fa-caret-down pl-2"></i></p>
    </nav>
@else
    <nav class="navbar navbar-expand-lg fixed-top p-0">
        <a class="navbar-brand ml-5 p-2" href="{{ route('home') }}"><img class="logo" src="img/logo horizontal.png" alt="Logo Colmeia do Código"></a>
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
                    <a class="nav-link text-white" href="{{ route('cursos') }}">CURSOS</a>
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
@endif
</header>
<script>
    function menuChange(x) {
        x.classList.toggle("change");
    }

    function menuAluno() {
        if(window.innerWidth >= 992){
            $(".menuDireito").toggle();
        }else{
            window.location.href = "{{ route('colmeia') }}";
        }
    }
</script>