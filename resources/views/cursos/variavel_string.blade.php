@extends('layouts.areaDoAluno')

@section('titulo', 'Área do Aluno - Lógica')

@section('conteudo')
    <section class="conteudo flex-grow-1">
        <h1 class="titulo">Variáveis</h1>
        <h3 class="subtitulo">String - Variáveis de texto, normalmente chamada de "cadeia de caracteres". Os valores desse tipo são atribuídos utilizando aspas duplas (") ou aspas simples (') como delimitador.</h3>
        <p>Observação: Tudo o que é declarado entre os delimitadores (") ou (') é entendido como parte da string, mesmo que sejam números.</p>        
        <p>Exemplo:</p>
        <p>var nome = "Gabriel Mendonça";</p>
        <p>var dataNascimento = "17 de Junho de 1988";</p>
        <p>var email = "gabriel@host2.com.br";</p>
        <p>var tempo = "20s";</p>
        <a href="/quiz_variavel_string" class="btn btn-warning my-2 my-sm-0 ml-3 mr-3 text-white">teste seus conhecimentos</a>
    </section>
@endsection