@extends('layouts.areaDoAluno')

@section('titulo', 'Área do Aluno - Lógica')

@section('conteudo')
    <section class="conteudo flex-grow-1">
        <h1 class="titulo">Variáveis</h1>
        <h3 class="subtitulo">Qual das variáveis abaixo é uma int?</h3>
        
        <input type="radio" name="a" id="a"><label for="a">a - var nome = ‘Maria’;</label><br>
        <input type="radio" name="b" id="b" certo><label for="b">b - var idade = 24;</label><br>
        <input type="radio" name="c" id="c"><label for="c">c - var tempo = ‘40s’;</label><br>
        <input type="radio" name="d" id="d"><label for="d">d - var sobrenome = ‘Silva’;</label><br>

        <a href="/variavel_float" class="btn btn-warning my-2 my-sm-0 ml-3 mr-3 text-white">enviar</a>
    </section>
@endsection