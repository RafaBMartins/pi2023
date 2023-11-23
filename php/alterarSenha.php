<?php
    require("pdoConnect.php");
    session_start();
    if(isset($_SESSION["email"]) && isset($_POST["senhaAtual"]) && isset($_POST["newPassword"]) && isset($_POST["confirmNewPassword"])){
        $resposta = array();
        $senhaAtual = $_POST["senhaAtual"];
        $email = $_SESSION["email"];
        $consultaToken = $db->prepare("SELECT senha FROM usuario where email = '$email'");
        var_dump($consultaToken);
        $consultaToken->execute();
        $linha = $consultaToken->fetch(PDO::FETCH_ASSOC);
        var_dump($linha);
        

    }
    else{
        $resposta["sucesso"] = 0;
        $resposta["erro"] = "faltam parametros";
    }
    header("location: http://localhost:8080/pi2023/pusu.php");
    die();
?>