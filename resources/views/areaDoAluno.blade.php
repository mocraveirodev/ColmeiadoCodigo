@extends('layouts.templateColmeia')

@section('titulo')
    Página Área do Aluno
@endsection

@section('conteudo')
    <section class="conteudo flex-grow-1 ">
        <h1 class="titulo">Colmeia</h1>
        <div class="cursos">
            <a href="#" class="btnCurso html">HTML5</a>
            <a href="#" class="btnCurso css"><img src="/img/cadeado.svg" alt="Cadeado"> CSS</a>
            <a href="#" class="btnCurso js"><img src="/img/cadeado.svg" alt="Cadeado"> JAVASCRIPT</a>
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