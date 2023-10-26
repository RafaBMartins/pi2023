<?php
    require("pdoConnect.php");

    $resposta = array();
    var_dump($_POST);

    if(isset($_POST["img_perfil"]) && isset($_POST["nome_estabelecimento"]) && isset($_POST["tipo_estab"]) && isset($_POST["estado"]) && isset($_POST["cidade"]) && isset($_POST["bairro"]) && isset($_POST["tipo_logradouro"]) && isset($_POST["logradouro"]) && isset($_POST["latitude"]) && isset($_POST["longitude"])){
        $nome_estabelecimento = filter_var($_POST["nome_estabelecimento"], FILTER_SANITIZE_STRING);
        $logradouro = filter_var($_POST["logradouro"], FILTER_SANITIZE_STRING);
        $cidade = filter_var($_POST["cidade"], FILTER_SANITIZE_STRING);
        $bairro = filter_var($_POST["bairro"], FILTER_SANITIZE_STRING);
        $numeroEndereco = filter_var($_POST["numero"], FILTER_SANITIZE_NUMBER_INT);
        $img_perfil = filter_var($_POST["img_perfil"], FILTER_SANITIZE_URL);
        $estado = $_POST["estado"];
        $tipo_logradouro = $_POST["tipo_logradouro"];
        $numero = $_POST["numero"];
        $latitude = $_POST["latitude"];
        $longitude = $_POST["longitude"];
        $tipo_estab = $_POST["tipo_estab"];
        $query = trim("SELECT * FROM ENDERECO WHERE endereco.estado = '$estado' and endereco.cidade = '$cidade' and endereco.bairro = '$bairro' and endereco.tipo_logradouro = '$tipo_logradouro' and endereco.logradouro = '$logradouro' and endereco.numero = $numero");
        $consulta = $db->prepare($query);
        $consulta->execute();
        
        if($consulta->rowCount() > 1){
            $resposta["sucesso"] = 0;
            $resposta["erro"] = "estabelecimento ja cadastrado";
        }
        else{
            $insertEndereco = $db->prepare("INSERT INTO ENDERECO (logradouro, tipo_logradouro, estado, cidade, bairro, numero, latitude, longitude) VALUES ('$logradouro', '$tipo_logradouro', '$estado', '$cidade', '$bairro', $numero, $latitude, $longitude)");
            $insertEndereco->execute();
            $idEnderco = $db->prepare("SELECT endereco_pk FROM ENDERECO WHERE bairro = '$bairro' and numero = $numero");
            $idEnderco->execute();
            $resulIdEnderco = $idEnderco->fetch(PDO::FETCH_ASSOC);
            $idEnderecoEstab = $resulIdEnderco["endereco_pk"];
            
            $insertFoto = $db->prepare("INSERT INTO foto_estabelecimento (uri_image, descricao) VALUES ('$img_perfil', null)");
            $insertFoto->execute();
            $idFoto = $db->prepare("SELECT foto_estabelecimento_PK FROM FOTO_ESTABELECIMENTO WHERE uri_image = '$img_perfil'");
            $idFoto->execute();
            $resultIdFoto = $idFoto->fetch(PDO::FETCH_ASSOC);
            $idFotoEstab = $resultIdFoto["foto_estabelecimento_pk"];

            $insertEstab = $db->prepare("INSERT INTO ESTABELECIMENTO (nota_media, nome, FK_endereco_endereco_PK, FK_tipo_estabelecimento_tipo_estabelecimento_PK, FK_foto_estabelecimento_foto_estabelecimento_PK, FK_selo_selo_PK) VALUES (null, '$nome_estabelecimento', $idEnderecoEstab, '$tipo_estab', $idFotoEstab, null)");
            if($insertEstab->execute()); $resposta["sucesso"] = 1;
        }
    }
    else{
        $resposta["sucesso"] = 0;
        $resposta["erro"] = "faltam parametros";
    }
    $db = null;
    echo json_encode($resposta);
?>