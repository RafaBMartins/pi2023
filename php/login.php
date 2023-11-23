<?php 
    require("pdoConnect.php");
    
    $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
 
    $senha = $_POST["password"];
    $token = password_hash($senha, PASSWORD_DEFAULT);
    $respota = array();

    $consulta = $db->prepare("SELECT email, nome, senha FROM USUARIO WHERE email = '$email'");
    if($consulta->execute()){
        var_dump($consulta->rowCount());
        if($consulta->rowCount() > 0){
            while($linha = $consulta->fetch(PDO::FETCH_ASSOC)){
                    if(password_verify($senha, $linha["senha"])){
                        $resposta["sucesso"] = 1;
                        session_start();
                         $_SESSION["nome"] = $linha["nome"];
                         $_SESSION["email"] = $linha["email"];
                        var_dump($_SESSION);
                        header('location: http://localhost/pi2023/pusu.php');
                        die();
                    }
                    else{
                        $resposta["sucesso"] = 0;
                        $resposta["erro"] = "senhas não conferem";
                    }
            }
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