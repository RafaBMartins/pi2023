<?php
    require("pdoConnect.php");
    session_start();
    var_dump($_SESSION);
    var_dump($_POST);
    if(isset($_SESSION["email"]) && isset($_POST["senhaAtual"]) && isset($_POST["newPassword"]) && isset($_POST["confirmNewPassword"])){
        $resposta = array();
        $senhaAtual = $_POST["senhaAtual"];
        $tokenAtual = password_hash($senhaAtual, PASSWORD_DEFAULT);
        $novaSenha = $_POST["newPassword"];
        $tokenNova = password_hash($novaSenha, PASSWORD_DEFAULT);
        $confNovaSenha = $_POST["confirmNewPassword"];
        $email = $_SESSION["email"];
        if(($novaSenha === $confNovaSenha) && ($novaSenha != $senhaAtual)){
            $consulta = $db->prepare("UPDATE usuario SET senha = :senhaNova WHERE email = :email AND senha = :senhaAtual");
            $consulta->bindParam(':senhaNova', $tokenNova);
            $consulta->bindParam(':email', $email);
            $consulta->bindParam(':senhaAtual', $tokenAtual);
            if($consulta->execute()){
                $resposta["sucesso"] = 1;
            }
            else{
                $resposta["sucesso"] = 0;
                $resposta["erro"] = "erro: " . $consulta->error;
            }
        }
        else{
            $resposta["sucesso"] = 0;
            $resposta["erro"] = "as senhas não conferem, ou a senha atual é igual a antiga";
        }
    }
    else{
        $resposta["sucesso"] = 0;
        $resposta["erro"] = "faltam parametros";
    }
    header("location: http://localhost:8080/pi2023/pusu.php");
    die();
?>