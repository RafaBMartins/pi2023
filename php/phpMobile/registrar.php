<?php 
    require("../pdoConnect.php");

    $resposta = array();

    if(isset($_POST["email"]) && isset($_POST["password"]) && isset($_POST["userName"])){
        $email = trim($_POST["email"]);
        $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
        $senha = trim($_POST["password"]);
        $token = password_hash($senha, PASSWORD_DEFAULT);
        $nome = filter_var($_POST["userName"], FILTER_SANITIZE_STRING);
        //$token = password_hash($senha, PASSWORD_DEFAULT, array());

        $consulta_usuario_existente = $db->prepare("SELECT email FROM usuario WHERE email='$email'");
        $consulta_usuario_existente->execute();
        if($consulta_usuario_existente->rowCount() > 0){
            $resposta["sucesso"] = 0;
            $resposta["erro"] = "usuário já cadastrado";
        }
        else{
            $db_registra_usuario = $db->prepare("INSERT INTO usuario (email, senha, nome, foto_perfil) VALUES ('$email', '$token', '$nome', null)");
            if($db_registra_usuario->execute()){
                $resposta["sucesso"] = 1;
            }
            else{
                $resposta["sucesso"] = 0;
                $resposta["erro"] = $db_registra_usuario->error;
            }

        }
    }
    else{
        $resposta["sucesso"] = 0;
        $resposta["erro"] = "faltam parametros";
    }

    $db = null;
    echo json_encode($resposta);
?>