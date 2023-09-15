<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/loginRegister.css">
    <title>Wheelieway</title>
</head>
<body>
    <?php
    filter_var($email, FILTER_SANITIZE_EMAIL)
    if(!filter_var($email, FILTER_VALIDADE_EMAIL)) {
        echo("Email Invalido")
    } else echo("Email Valido")

    
    ?>
    <form>
        <input type="email" placeholder="Email">
        <input type="password" placeholder="Senha">
    </form>
</body>