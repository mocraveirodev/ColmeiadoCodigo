@extends('layouts.areaDoAluno')

@section('titulo', 'Área do Aluno - Lógica')

@section('conteudo')
    <section class="conteudo flex-grow-1">
        <h1 class="titulo">Variáveis</h1>
        <h3 class="subtitulo">Vamos ver o que você aprendeu?</h3>
        <div class="conteudo-quiz">
            <div class="pergunta">
                <p>Se temos:</p>
                <p>var x = 50;</p>
                <p>var y = 15;</p>
                <p>Qual é o valor da variável x?</p>
                <form class="resposta">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="quiz" id="a" value="a">
                        <label class="form-check-label" for="a">
                            <span class="opcao">A -</span> 89
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="quiz" id="b" value="b">
                        <label class="form-check-label" for="b">
                            <span class="opcao">B -</span> 15
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="quiz" id="c" value="c" certo>
                        <label class="form-check-label" for="c">
                            <span class="opcao">C -</span> 50
                        </label>
                    </div> 
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="quiz" id="d" value="d">
                        <label class="form-check-label" for="d">
                            <span class="opcao">D -</span> 35
                        </label>
                    </div>
                </form>
            </div>
        </div>
        <div class="mensagem esconde"></div>

        <a class="btn btn-warning btn-curso resp" onclick="respostaCerta()">verificar resposta</a>
        <a class="btn btn-warning btn-curso prox esconde" href="/variavel"> próximo ►► </a>
        <a class="btn btn-warning btn-volt esconde" href="/variavel"> ◄◄ voltar </a>
    </section>
    <script>
        function respostaCerta(){
            let respostas = document.querySelectorAll('input');
            let mensagem = document.querySelector('.mensagem');
            let resp = document.querySelector('.resp');
            let prox = document.querySelector('.prox');
            let volt = document.querySelector('.btn-volt');

            respostas.forEach(resposta => {
                if(resposta.checked){
                    if(resposta.hasAttribute("certo")){
                        mensagem.textContent = "Sua resposta está certa!"
                        mensagem.classList.add('certo');
                        mensagem.classList.remove('errado');
                        mensagem.classList.remove('esconde');
                        resp.classList.add('esconde');
                        prox.classList.remove('esconde');
                        volt.classList.add('esconde');
                        exit;
                    }else{
                        mensagem.innerHTML = `Sua resposta está errada!<br>Tente de novo ou volte!`;
                        mensagem.classList.add('errado');
                        mensagem.classList.remove('certo');
                        mensagem.classList.remove('esconde');
                        resp.classList.remove('esconde');
                        prox.classList.add('esconde');
                        volt.classList.remove('esconde');
                        exit;
                    }
                }else{
                    mensagem.textContent = "Escolha uma resposta!"
                    mensagem.classList.add('errado');
                    mensagem.classList.remove('certo');
                    mensagem.classList.remove('esconde');
                    resp.classList.remove('esconde');
                    prox.classList.add('esconde');
                    volt.classList.add('esconde');
                }
            });
        }
    </script>
@endsection