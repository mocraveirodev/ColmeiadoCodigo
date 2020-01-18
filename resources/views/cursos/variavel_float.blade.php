@extends('layouts.areaDoAluno')

@section('titulo', 'Área do Aluno - Lógica')

@section('conteudo')
    <section class="conteudo flex-grow-1">
        <h1 class="titulo">Variáveis</h1>
        <h3 class="subtitulo">Float - Variáveis com ponto flutuante ou casas decimais.</h3>
        <p>Observação: em linguagens de programação utiliza-se "<strong>.</strong>" (ponto final) para separar casas decimais em vez da ',' (vírgula).</p>
        <p>Exemplo:</p>
        <p>var peso = 32.59345;</p>
        <p>var PI = 3.14;</p>
        <p>var meuSaldo = -1034.32</p> 
        <a href="/quiz_variavel_float" class="btn btn-warning my-2 my-sm-0 ml-3 mr-3 text-white">teste seus conhecimentos</a>
    </section>
@endsection