@extends('layouts.areaDoAluno')

@section('titulo', 'Área do Aluno - Lógica')

@section('conteudo')
    <section class="conteudo flex-grow-1">
        <h1 class="titulo">Variáveis</h1>
        <h3 class="subtitulo">Qual das variáveis abaixo é um float?</h3>         

        <input type="radio" name="a" id="a" certo><label for="a">a - var meuPeso = 56.5;</label><br>
        <input type="radio" name="b" id="b"><label for="b">b - var minha idade = 28;</label><br>
        <input type="radio" name="c" id="c"><label for="c">c - var endereco = “Rua das Acácias, 500”</label><br>
        <input type="radio" name="d" id="d"><label for="d">d - var graus = +17;</label><br>

        <a href="/variavel_string" class="btn btn-warning my-2 my-sm-0 ml-3 mr-3 text-white">enviar</a>
    </section>
@endsection