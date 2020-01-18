@extends('layouts.areaDoAluno')

@section('titulo', 'Área do Aluno - Lógica')

@section('conteudo')
    <section class="conteudo flex-grow-1">
        <h1 class="titulo">Variáveis</h1>
        <h3 class="subtitulo">Se temos:</h3>        
        <p>var x = 50;</p>
        <p>var y = 15;</p>
        <p>qual é o valor da variável x?</p>    

        <input type="radio" name="a" id="a"><label for="a">a - 89;</label><br>
        <input type="radio" name="b" id="b"><label for="b">b - 15;</label><br>
        <input type="radio" name="c" id="c" certo><label for="c">c - 50;</label><br>
        <input type="radio" name="d" id="d"><label for="d">d - 35;</label><br>

        <a href="/variavel_int" class="btn btn-warning my-2 my-sm-0 ml-3 mr-3 text-white">enviar</a>
    </section>
@endsection