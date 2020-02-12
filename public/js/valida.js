const regexNome = /^[a-zA-Z]+$/g
const regexSenha = /^(?=.{8,})(?=.*[a-zA-Z])(?=.*[\d])(?=.*[!@#$%¨*^&+=.,:;-/'"ªº°§¬¢£³²¹<>₢]).*$/g

var formulario = document.getElementById("formulario");
this.formulario.addEventListener('submit', e => {
    this.handleSubmit(e);
});

function handleSubmit(e) {
    e.preventDefault();
    const camposValidos = camposSaoValidos();
    const senhasValidas = senhasSaoValidas();

    if(camposValidos && senhasValidas) {
        formulario.submit();
    }        
}

function senhasSaoValidas() {
    let valid = true;
    const senha = document.querySelector('#senha');
    const repetirSenha = document.querySelector('#repetir-senha');

    if(senha.value !== repetirSenha.value) {
        valid = false;
        criaErro(senha, 'Campos senha e repetir senha precisam ser iguais.');
        criaErro(repetirSenha, 'Campos senha e repetir senha precisam ser iguais.');
    }

    if(senha.value.length < 8 ) {
        valid = false;
        criaErro(senha, 'Senha precisa ter pelo menos 8 caracteres');
    }

    if(!senha.value.match(regexSenha)) {
        this.criaErro(senha, 'Senha precisa conter letras, números e caracteres especiais.');
        valid = false;
    }
    return valid;
}



function camposSaoValidos() {
    let valid = true;
    for(let mensagemErro of document.querySelectorAll('.mensagem-erro')) {
        mensagemErro.remove();
    }
    for(let campo of document.querySelectorAll('.validar')) {
        const label = campo.previousElementSibling.innerHTML;
        if(!campo.value) {
            criaErro(campo, `Campo "${label}" não pode ficar em branco.`)
            valid = false;
        }
        if(campo.id == 'nome') {                
            if(validaNome(campo)) valid = true;
        }
        if(campo.id == 'email-register') {
            if(!validaEmail(campo)) valid = false;
        }
    }
    return valid;
}

function validaNome(campo) {
    const nome = campo.value;
    let valid = true;
    if(nome.length <3 || nome.length > 15) {
        criaErro(campo, 'Nome precisa ter entre 3 e 15 caracteres.');
        valid = false;
    }
    if(!nome.match(regexNome)) {
        criaErro(campo, 'Nome precisa conter apenas letras.');
        valid = false;
    }
    return valid;
}

function validaEmail(campo) {
    const email = campo.value;        
    let valid = true;
    const emailOk = verificarEmail(email);
    if(!emailOk) {
        criaErro(campo, 'Erro! Digite um e-mail válido');
        valid = false;
    };
    return valid;
}

function criaErro(campo, mensagem) {
    const div = document.createElement('div');
    div.innerHTML = mensagem;
    div.classList.add('mensagem-erro');
    campo.insertAdjacentElement('afterend', div);
}
