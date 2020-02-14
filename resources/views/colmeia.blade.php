@extends('layouts.areaDoAluno')

@section('titulo', 'Área do Aluno - Colmeia')

@section('conteudo')
    <section class="conteudo flex-grow-1">
        <h1 class="titulo">Colmeia</h1>
        <div class="cursos">
            <a href="/html" class="btnCurso html">HTML5</a>
            <a href="/css" class="btnCurso css">CSS</a>
            <a href="/variavel" class="btnCurso logica">LÓGICA</a>
            <a href="/js" class="btnCurso js">JAVASCRIPT</a>
        </div>
        <div class="progresso">
            <p>Meta Diária</p>
            <div class="progress">
                <div class="progress-bar bg-warning" role="progressbar" style="width: 50%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <p class="progressoPorc">50%</p>
        </div>
    </section>
@endsection