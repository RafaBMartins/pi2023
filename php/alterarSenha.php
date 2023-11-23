<?php
    //ainda, nao funcional
    require("pdoConnect.php");
    session_start();
    if(isset($_SESSION["email"]) && isset($_POST["senhaAtual"]) && isset($_POST["newPassword"]) && isset($_POST["confirmNewPassword"])){
        $resposta = array();
        $senhaAtual = $_POST["senhaAtual"];
        var_dump($_POST["senhaAtual"]);
        $email = $_SESSION["email"];
        $consultaToken = $db->prepare("SELECT senha FROM usuario WHERE email = '$email'");
        $consultaToken->execute();
        $linha = $consultaToken->fetch(PDO::FETCH_ASSOC);
        var_dump($linha);
        if(password_verify($senhaAtual, $linha["senha"])){
            echo "teste";
        }
        else{
            echo "não";
        }
        

    }
    else{
        $resposta["sucesso"] = 0;
        $resposta["erro"] = "faltam parametros";
    }
    //header("location: http://localhost:8080/pi2023/pusu.php");
    //die();
?>