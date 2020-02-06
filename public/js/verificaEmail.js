function verificarEmail() {
    for(let mensagemErro of document.querySelectorAll('.mensagem-erro')) {
        mensagemErro.remove();
    }
    var data = null;

    var xhr = new XMLHttpRequest();
    xhr.withCredentials = true;

    xhr.addEventListener("readystatechange", function () {
        if (this.readyState === this.DONE) {
            let json = JSON.parse(this.responseText);
            let result = json.result;
            if(result == 'invalid'){
                criaErro();
            }
            //console.log(json.result);

            //console.log(this.responseText);
        }
    });
    let email = document.querySelector('#email-register')
    xhr.open("GET", "https://quickemailverification.p.rapidapi.com/v1/verify?email=" + email.value);
    xhr.setRequestHeader("x-rapidapi-host", "quickemailverification.p.rapidapi.com");
    xhr.setRequestHeader("x-rapidapi-key", "cb50fe3462msh86dfd7a2e9c7ff1p10928bjsnfd3333b9da3d");
    xhr.setRequestHeader("authorization", "edc463b246334f5f7b29574626a79639fcbd92b70ab2b85f0cca72f90f8e");

    xhr.send(data);
}


function criaErro() {
    let campo = document.querySelector('#email-register')
    const div = document.createElement('div');
    div.innerHTML = "Erro! Digite um e-mail válido";
    div.classList.add('mensagem-erro');
    campo.insertAdjacentElement('afterend', div);
}