<?php
    require("pdoConnect.php");
    session_start();
    if(isset($_SESSION["email"]) && isset($_POST["senhaAtual"])){    
        $senha = $_POST["senhaAtual"];
        $consulta = $db->prepare("DELETE FROM usuario WHERE email = :email AND senha = :senhaAtual");
        $consulta->bindParam(':email', $_SESSION["email"]);
        $consulta->bindParam(':senhaAtual', $senha);
        if($consulta->execute()){
            $resposta["sucesso"] = 1;
            header('location: ')
        }
        else{
            $resposta["sucesso"] = 0;
            $resposta["erro"] = "erro: " . $consulta->error;
        }
    }
    else{
        $resposta["sucesso"] = 0;
        $resposta["erro"] = "faltam parâmetros";
    }
?>