<?php
    require("pdoConnect.php");
    session_start();
    if(isset($_POST["comentarioTexto"]) && isset($_POST["estrela"]) && isset($_FILES["photos"]) && isset($_SESSION["email"])){
        $email = $_SESSION["email"];
        $nomeEstab = $_POST["nomeEstabelecimento"];
        $tipoLogradouro = $_POST["tipoLogradouro"];
        $logradouro = $_POST["logradouro"];
        $numero = $_POST["numero"];
        $bairro = $_POST["bairro"];
        $cidade = $_POST["cidade"];
        $estado = $_POST["estado"];
        $comentario = $_POST["comentarioTexto"];
        $estrela = $_POST["estrela"];
        $queryIdEstab = $db->query("SELECT id FROM estabelecimento
        INNER JOIN ENDERECO
        ON endereco.endereco_PK = estabelecimento.FK_endereco_endereco_PK
        WHERE estabelecimento.nome='$nome' endereco.estado = '$estado' and endereco.cidade = '$cidade' and endereco.bairro = '$bairro' and endereco.tipo_logradouro = '$tipo_logradouro' and endereco.logradouro = '$logradouro' and endereco.numero = $numero");
        if($queryIdEstab->execute()){
            $idEstab = $queryIdEstab->fetch(PDO::FETCH_ASSOC);
            $queryIdUser = $db->query("SELECT id FROM usuario where email = '$email'");
            if($queryIdUser->execute()){
                $idUser = $queryIdUser->fetch(PDO::FETCH_ASSOC);
                $insertAval = $db->query("INSERT INTO avaliacao (descricao, dt_avaliacao, nota, fk_usuario_id, fk_estabelecimento_id) values ('$comentario', null, $estrela, $idUser, $idEstab)");
                $idImagens = array();
                foreach($_FILES["photos"]["tmp_name"] as $chave => $valor){
                    $filename = $_FILES['img_perfil']['tmp_name'];
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

                    $consulta = $db->query("INSERT INTO foto_avaliacao () VALUES ()")
                }
            }
        }
    }
?>