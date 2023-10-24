<?php 
    require("../pdoTeste.php");

    $resposta = array();

    if(isset($_POST["email"]) && isset($_POST["senha"]) && isset($_POST["nome"])){
        $email = trim($_POST["email"]);
        $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
        $senha = trim($_POST["senha"]);
        $nome = filter_var($_POST["nome"], FILTER_SANITIZE_STRING);
        $token = password_hash($senha, PASSWORD_DEFAULT);

        $consulta_usuario_existente = $db->prepare("SELECT login FROM usuario WHERE login='$email'");
        $consulta_usuario_existente->execute();
        if($consulta_usuario_existente->rowCount() > 0){
            $resposta["sucesso"] = 0;
            $resposta["erro"] = "usuário já cadastrado";
        }
        else{
            $db_registra_usuario = $db->prepare("INSERT INTO usuario (email, senha, nome, foto_perfil) VALUES ($email, $token, $nome, null)");
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