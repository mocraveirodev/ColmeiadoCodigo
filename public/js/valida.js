class ValidaFormulario {
    
    constructor() {
        this.formulario = document.querySelector('.formulario');
        this.eventos();        
    }

    eventos() {        
        this.formulario.addEventListener('submit', e => {
            
            this.handleSubmit(e);
        });
    }
    
    handleSubmit(e) {
        e.preventDefault();
        console.log('oi');
        const camposValidos = this.camposSaoValidos();
        const senhasValidas = this.senhasSaoValidas();
        if(camposValidos && senhasValidas) {
            this.formulario.submit();
        }        
    }

    senhasSaoValidas() {
        let valid = true;
        const senha = this.formulario.querySelector('#senha');
        const repetirSenha = this.formulario.querySelector('#repetir-senha');

        if(senha.value !== repetirSenha.value) {
            valid = false;
            this.criaErro(senha, 'Campos senha e repetir senha precisam ser iguais.');
            this.criaErro(repetirSenha, 'Campos senha e repetir senha precisam ser iguais.');
        }

        if(senha.value.length < 8 ) {
            valid = false;
            this.criaErro(senha, 'Senha precisa ter pelo menos 8 caracteres');
        }

        // if(!senha.match()) {
        //     this.criaErro(campo, 'Senha precisa conter letras, números e caracteres especiais.');
        //     valid = false;
        // }
    }


    camposSaoValidos() {
        let valid = true;
        for(let mensagemErro of this.formulario.querySelectorAll('.mensagem-erro')) {
            mensagemErro.remove();
        }
        for(let campo of this.formulario.querySelectorAll('.validar')) {
            const label = campo.previousElementSibling.innerHTML;
            if(!campo.value) {
                this.criaErro(campo, `Campo "${label}" não pode ficar em branco.`)
                valid = false;
            }
            if(campo.classList.contains('nome')) {
                if(!this.validaNome(campo)) valid = false;
            }
        }
        return valid;
    }

    validaNome(campo) {
        const nome = campo.value;
        let valid = true;
        if(nome.length <3 || nome.length > 15) {
            this.criaErro(campo, 'Nome precisa ter entre 3 e 15 caracteres.');
            valid = false;
        }
        if(!nome.match(/^[a-zA-Z]+$/g)) {
            this.criaErro(campo, 'Nome precisa conter apenas letras.');
            valid = false;
        }
        return valid;
    }

    criaErro(campo, mensagem) {
        const div = document.createElement('div');
        div.innerHTML = mensagem;
        div.classList.add('mensagem-erro');
        campo.insertAdjacentElement('afterend', div);
    }
}

const valida = new ValidaFormulario();