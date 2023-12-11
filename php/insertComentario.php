<?php
    require("pdoConnect.php");
    session_start();
    $id = $_GET["id"];
    if(!isset($_SESSION["email"])){
        header("location: http://localhost/pi2023/login.php?msg=avaliacao&id=$id");
        die();
    }
    if(isset($_POST["comentarioTexto"]) && isset($_POST["estrela"]) && isset($_FILES["photos"])){
        $email = $_SESSION["email"];
        $comentario = $_POST["comentarioTexto"];
        $nota = $_POST["estrela"];
        $idEstab = $_POST["idEstab"];
        var_dump($idEstab);
        $queryIdUser = $db->prepare("SELECT id FROM usuario where email = '$email'");
        if($queryIdUser->execute()){
            $idUser = $queryIdUser->fetch(PDO::FETCH_ASSOC)["id"];
            $insertAval = $db->prepare("INSERT INTO avaliacao (descricao, dt_avaliacao, nota, fk_usuario_id, fk_estabelecimento_id) values ('$comentario', null, $nota, $idUser, $idEstab)");
            $insertAval->execute();
            $queryIdAval = $db->prepare("SELECT id FROM avaliacao WHERE descricao = '$comentario' and nota = $nota and fk_usuario_id = $idUser and fk_estabelecimento_id = $idEstab ");
            $queryIdAval->execute();
            $idAVal = $queryIdAval->fetch(PDO::FETCH_ASSOC)["id"];
            
            foreach($_FILES["photos"]["tmp_name"] as $chave => $valor){
                $filename = $valor;
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

                $consulta = $db->prepare("INSERT INTO fotos_avaliacao (descricao, fk_avaliacao_id) VALUES ('$img_url', $idAVal)");
                $consulta->execute();
            }
        }
        header("location: http://localhost/pi2023/pergunta.php?id=$id");
    }
?>