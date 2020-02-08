@extends('layouts.areaDoAluno')

@section('titulo', "Área do Aluno - Curso")

@section('conteudo')
    <section class="conteudo flex-grow-1">
        <h1 class="titulo">{{$conteudo->titulo}}</h1>
        <h3 class="subtitulo">{{$conteudo->subtitulo}}</h3>
        <div class="conteudo-curso"></div>
        <a href="/quiz" class="btn btn-warning btn-curso text-center">teste seus conhecimentos</a>
    </section>
    <script>
        let conteudo = @json($conteudo->conteudo);
        console.log(conteudo);
        document.querySelector('.conteudo-curso').innerHTML = conteudo;
    </script>
@endsection