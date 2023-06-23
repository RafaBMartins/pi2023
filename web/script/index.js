/*função que é ativida ao apertar o botão do formulario de login*/
function btnEntrar() {

    /*iniciando validação de email*/
    let email = document.getElementById("email-input").value;
    res1 = ValidarEmail(email);

    /*iniciando validação de senha*/
    let senha = document.getElementById("senha-input").value;
    res2 = validarSenha(senha);

    /*confirmando as respostas e indo para home*/
    if (res1 && res2) {
        window.location.pathname = '../web/html/home.html'
    }
}

/*função que valida email*/
function ValidarEmail(email) {

    if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email)) {
        return (true)
    }
    alert("Você digitou um email inválido!")
    return (false)
}

/*função que valida senha*/
function validarSenha(senha) {

    if (/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}$/.test(senha)) {
        return (true)
    }
    alert("Você digitou uma senha inválida!")
    return (false)
}