function btnEntrar() {

    let email = document.getElementById("email-input").value;
    res1 = ValidarEmail(email);

    let senha = document.getElementById("senha-input").value;
    res2 = validarSenha(senha);

    if(res1 && res2) {
        window.location.pathname = '../web/html/home.html'
    }
}

function ValidarEmail(email) {

    if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email))
    {
        return (true)
    }
        alert("Você digitou um email inválido!")
        return (false)
}

function validarSenha(senha) {

    if (/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}$/.test(senha)) 
    {
        return (true)
    }
        alert("Você digitou uma senha inválida!")
        return (false)
}