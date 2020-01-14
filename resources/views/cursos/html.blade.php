@extends('layouts.areaDoAluno')

@section('titulo')
    Página Área do Aluno
@endsection

@section('conteudo')
<!-- colocar aulas -->
<div>
        <h1>Atributos</h1>
            <p> Atributos são informações que passamos na Tag para que ela se comporte da maneira esperada. <br>
                Existem atributos globais (que funcionam em todas as Tags) e específicos (que são direcionados para cada Tag, através de especificação). <br>
                Os Atributos possuem nome e um valor, existem Atributos que você vai usar praticamente sempre e existem outros que serão mais raros.
            </p>
        <h2>Atibutos globais</h2>
            <p>Atributos globais se aplicam a todos os elementos HTML, pois eles fornecem informações adicionais que os navegadores usam para determinar a forma como os elementos são exibidos na página. Alguns atributos:<br>
                ID – atributo que define um identificador único para o elemento.<br>
                CLASS – Recebe o nome de uma classe, que será útil para CSS e JavaScript.<br>
                TITLE – Define o texto que aparece quando o mouse está sobre o elemento.<br>
                STYLE – Recebe propriedade CSS para estilizar o documento.<br>
                ACCESSKEY - Determina uma (ou mais) tecla(s) de atalho para o elemento. Para definir mais de uma tecla, coloque-as separadas por espaço.<br>
                DRAGGABLE - Define se um elemento é arrastável ou não.<br>
                HIDDEN - Oculta o elemento onde for declarado.<br>
                LANG - Determina o idioma em que está escrito o conteúdo do elemento.<br>
                TABINDEX - Organiza os elementos por ordem de tabulação. Deve-se usar valor numérico.
            </p>
    </div>



@endsection