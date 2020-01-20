@extends('layouts.areaDoAluno')

@section('titulo', 'Área do Aluno - Lógica')

@section('conteudo')
    <section class="conteudo flex-grow-1">
        <h1 class="titulo">@yield('tituloCurso')</h1>
        <h3 class="subtitulo">@yield('subtituloCurso')</h3>
        <div class="conteudo-curso">
            @yield('conteudoCurso')
        </div>
        <a href="/quiz" class="btn btn-warning btn-curso text-center">teste seus conhecimentos</a>
    </section>
@endsection