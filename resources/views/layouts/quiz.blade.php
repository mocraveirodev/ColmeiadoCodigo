@extends('layouts.areaDoAluno')

@section('titulo', 'Área do Aluno - Curso')

@section('conteudo')
    <section class="conteudo flex-grow-1">
        <h1 class="titulo">{{$quiz[0]->titulo}}</h1>
        <h3 class="subtitulo">Vamos ver o que você aprendeu?</h3>
        <div class="conteudo-quiz">
            <div class="box-pergunta">
                <div class="pergunta"></div>
                <form class="resposta"></form>
            </div>
        </div>
        <div class="mensagem esconde"></div>

        <a class="btn btn-warning btn-curso resp" onclick="respostaCerta()">verificar resposta</a>
        <a class="btn btn-warning btn-curso prox esconde" href="/html"> próximo ►► </a>
        <a class="btn btn-warning btn-volt esconde" href="/html"> ◄◄ voltar </a>
    </section>
    <script>
        let pergunta = @json($quiz[0]->pergunta);
        let resposta = @json($quiz[0]->resposta);
        document.querySelector('.pergunta').innerHTML = pergunta;
        document.querySelector('.resposta').innerHTML = resposta;
    </script>
@endsection