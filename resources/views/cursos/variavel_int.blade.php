@extends('layouts.areaDoAluno')

@section('titulo', 'Área do Aluno - Lógica')

@section('conteudo')
    <section class="conteudo flex-grow-1">
        <h1 class="titulo">Variáveis</h1>
        <h3 class="subtitulo">Tipos de Variáveis</h3>
        <p>Int - Variáveis com valores inteiros.</p>
        <p>Exemplo:</P>
        <p>var idade = 17;</p>
        <p>var graus = -3;</p>
        <p>var pontos = 0;</p>
        <p>var numeroGrande = 2000009283;</p>
        <a href="/quiz_variavel_int" class="btn btn-warning my-2 my-sm-0 ml-3 mr-3 text-white">teste seus conhecimentos</a>
    </section>    
@endsection