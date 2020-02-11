@extends('layouts.areaDoAluno')

@section('titulo', "Área do Aluno - Curso")

@section('conteudo')
    <section class="conteudo flex-grow-1">
        <h1 class="titulo">{{$titulo}}</h1>
        <h3 class="subtitulo">Você conseguiu!!!!!</h3>
        <div class="conteudo-curso d-block d-md-flex ">
            <img src="img/abelhas.gif" alt="Abelhas comemorando">
            <p class="lead my-auto mx-auto">Você concluiu o curso de {{$titulo}}!</p>
        </div>
        <a href="/colmeia" class="btn btn-warning btn-curso text-center">Volte para sua Colmeia</a>
    </section>
@endsection