<?php
    require("pdoConnect.php");
    session_start();
    if(!(isset($_POST["novoNome"]) && isset($_SESSION["email"]))){
        header("location: http://localhost:8080/pi2023/pusu.php");
        die();
    }
    $resposta = array();
    $email = $_SESSION["email"];
    $novoNome = filter_var($_POST["novoNome"], FILTER_SANITIZE_STRING);
    $consulta = $db->prepare("UPDATE usuario SET nome = :novoNome WHERE email = :email");

    $consulta->bindParam(':novoNome', $novoNome);
    $consulta->bindParam(':email', $email);

    if($consulta->execute()){
        $_SESSION["nome"] = $novoNome;
        $respostas["sucesso"] = 1;
    }
    else{
        $resposta["sucesso"] = 0;
        $resposta["erro"] = "erro: " . $consulta->error;
    }
    header("location: http://localhost:8080/pi2023/pusu.php");
    die();
?>