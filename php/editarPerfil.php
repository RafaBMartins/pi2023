<?php
    //esse arquivo recebe um nome pelo formulario e procura por uma correspondecia no banco usando o email que esta armazenado na sessao e altera o nome do usuario
    //tambem atualiza a sessao com os dados novos
    require("pdoConnect.php");
    session_start();
    if(!(isset($_POST["novoNome"]) && isset($_SESSION["email"]))){
        header("location: http://localhost/pi2023/pusu.php");
        die();
    }
    
    $resposta = array();
    $resposta["nome"] = array();
    $respos["foto"] = array();
    $email = $_SESSION["email"];
    if(isset($_POST["novoNome"]) && $_POST["novoNome"] != ""){
        $novoNome = filter_var($_POST["novoNome"], FILTER_SANITIZE_STRING);
        $consulta = $db->prepare("UPDATE usuario SET nome = :novoNome WHERE email = :email");
        $consulta->bindParam(':novoNome', $novoNome);
        $consulta->bindParam(':email', $email);
        if($consulta->execute()){
            $_SESSION["nome"] = $novoNome;
            $respostas["nome"]["sucesso"] = 1;
        }
        else{
            $resposta["nome"]["sucesso"] = 0;
            $resposta["erro"] = "erro: " . $consulta->error;
        }

    }
    if(isset($_FILES["novaFoto"])){
        $filename = $_FILES['novaFoto']['tmp_name'];
        $client_id= "488371ea46cb4a3";
        $handle = fopen($filename, "r");
        $data = fread($handle, filesize($filename));
        $pvars   = array('image' => base64_encode($data));
        $timeout = 30;

        // Criar um contexto de fluxo com os cabeçalhos e os dados da requisição
        $context = stream_context_create(array(
        'http' => array(
            'method' => 'POST',
            'header' => "Content-type: application/x-www-form-urlencoded\r\n".
                        "Authorization: Client-ID ".$client_id."\r\n",
            'content' => http_build_query($pvars),
            'timeout' => $timeout
        )
        ));

        // Enviar a requisição e obter a resposta
        $out = file_get_contents('https://api.imgur.com/3/image.json', false, $context);
        $pms = json_decode($out,true);
        $img_url=$pms['data']['link'];

        $update = $db->prepare("UPDATE usuario set foto_perfil = '$img_url' WHERE email = '$email'");
        if($update->execute()){
            $resposta["foto"]["sucesso"] = 1;
        }
        else{
            $resposta["foto"]["sucesso"] = 0;
            $resposta["erro"] = "erro: " . $consulta->error;
        }

    }
    header("location: http://localhost/pi2023/pusu.php");
    die();
?>