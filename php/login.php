<?php 
    require("pdoConnect.php");
    
    $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    $senha = $_POST["password"];
    $respota = array();

    $consulta = $db->prepare("SELECT email, nome FROM USUARIO WHERE email = '$email' and senha = '$senha'");
    if($consulta->execute()){
        var_dump($consulta->rowCount());
        if($consulta->rowCount() > 0){
            $resposta["sucesso"] = 1;
        }
        else{
            $resposta["sucesso"] = 0;
            $resposta["erro"] = "usuario nao encontrado";
        }
    }
    else{
        $resposta["sucesso"] = 0;
        $respota["erro"] = $consulta->error;
    }
?>