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