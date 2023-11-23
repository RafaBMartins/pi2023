<?php
    require("pdoConnect.php");
    session_start();
    if(isset($_SESSION["email"]) && isset($_POST["senhaAtual"])){    
        $senha = $_POST["senhaAtual"];
        $token = password_hash($senha, PASSWORD_DEFAULT);
        $consulta = $db->prepare("DELETE FROM usuario WHERE email = :email AND senha = :senhaAtual");
        $consulta->bindParam(':email', $_SESSION["email"]);
        $consulta->bindParam(':senhaAtual', $token);
        if($consulta->execute()){
            $resposta["sucesso"] = 1;
            session_destroy();
            header("location: https://pi2023-u7xly6uh.b4a.run/");
            die();
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
    header("location: https://pi2023-u7xly6uh.b4a.run/pusu.php");
    die();
?>