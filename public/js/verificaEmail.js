function verificarEmail(email) {
    const valid = 'valid';
    var data = null;
    var json = null;
    var xhr = new XMLHttpRequest();
    xhr.withCredentials = true;

    xhr.addEventListener("readystatechange", function () {
        if (this.readyState === this.DONE) {
            json = JSON.parse(this.responseText);
        }
    });
    xhr.open("GET", "https://quickemailverification.p.rapidapi.com/v1/verify?email=" + email, false); //false faz ser uma chamada síncrona
    xhr.setRequestHeader("x-rapidapi-host", "quickemailverification.p.rapidapi.com");
    xhr.setRequestHeader("x-rapidapi-key", "cb50fe3462msh86dfd7a2e9c7ff1p10928bjsnfd3333b9da3d");
    xhr.setRequestHeader("authorization", "edc463b246334f5f7b29574626a79639fcbd92b70ab2b85f0cca72f90f8e");

    xhr.send(data);
    if(xhr.status === 200) {
        return json.result == valid;
    }
}