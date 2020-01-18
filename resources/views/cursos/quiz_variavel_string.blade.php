@extends('layouts.areaDoAluno')

@section('titulo', 'Área do Aluno - Lógica')

@section('conteudo')
    <section class="conteudo flex-grow-1">
        <h1 class="titulo">Variáveis</h1>
        <h3 class="subtitulo">Qual das variáveis abaixo <strong>não</strong> é uma string?</h3>         

        <input type="radio" name="a" id="a"><label for="a">a - var nome = “Jéssica”;</label><br>
        <input type="radio" name="b" id="b"><label for="b">b - var sobrenome =  “Moraes”;</label><br>
        <input type="radio" name="c" id="c"><label for="c">c - var valido =  “false”;</label><br>
        <input type="radio" name="d" id="d" certo><label for="d">d - var inválido = true;</label><br>

        <a href="/colmeia" class="btn btn-warning my-2 my-sm-0 ml-3 mr-3 text-white">enviar</a>
    </section>
@endsection