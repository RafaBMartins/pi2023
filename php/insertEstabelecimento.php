<?php
    require("pdoConnect.php");

    $resposta = array();

    if(isset($_FILES["img_perfil"]) && isset($_POST["nome_estabelecimento"]) && isset($_POST["tipo_estab"]) && isset($_POST["estado"]) && isset($_POST["cidade"]) && isset($_POST["bairro"]) && isset($_POST["tipo_logradouro"]) && isset($_POST["logradouro"]) && isset($_POST["latitude"]) && isset($_POST["longitude"])){
        $nome_estabelecimento = filter_var($_POST["nome_estabelecimento"], FILTER_SANITIZE_STRING);
        $logradouro = filter_var($_POST["logradouro"], FILTER_SANITIZE_STRING);
        $cidade = filter_var($_POST["cidade"], FILTER_SANITIZE_STRING);
        $bairro = filter_var($_POST["bairro"], FILTER_SANITIZE_STRING);
        $numeroEndereco = filter_var($_POST["numero"], FILTER_SANITIZE_NUMBER_INT);
        $img_perfil = filter_var($_POST["img_perfil"], FITLER_SANITIZE_URL);

        $consulta = $db->prepare("SELECT * FROM ESTABELECIMENTO WHERE estado = $estado and cidade = $cidade and bairro = $bairro and tipo_logradouro = $tipo_logradouro and logradouro = $logradouro and numero = $numero");
        $consulta->execute();
        
        if($consulta->rowCount() > 0){
            $resposta["sucesso"] = 0;
            $resposta["erro"] = "estabelecimento ja cadastrado";
        }
        else{
            $insertEndereco = $db->prepare("INSERT INTO ENDERECO (logradouro, tipo_logradouro, estado, cidade, bairro, numero, latitude, longitude, FK_tipo_estabelecimento_tipo_estabelecimento_PK) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
            $insertEndereco->execute([$logradouro, $_POST["tipo_logradouro"], $_POST["estado"], $cidade, $bairro, $numeroEndereco, $_POST["latitude"], $_POST["longitude"], $_POST["tipo_estab"]]);
            $idEnderco = $db->prepare("SELECT endereco_pk FROM ENDERECO WHERE bairro = ? and numero = ?");
            $idEnderco->execute([$_POST["bairro"], $_POST["numero"]]);
            $resulIdEnderco = $idEnderco->fetch(PDO::FETCH_ASSOC);
        
            $insertFoto = $db->prepare("INSERT INTO FOTO_ESTABELECIMENTO (foto_estabelecimento) VALUES (?)");
            $insertFoto->execute([$img_perfil]);
            $idFoto = $db->prepare("SELECT foto_estabelecimento_PK FROM FOTO_ESTABELECIMENTO")
            $idFoto->execute($idFoto);
            $resultIdFoto = $idFoto->fetch(PDO::FETCH_ASSOC);

            $insertEstab = $db->prepare("INSERT INTO ESTABELECIMENTO (nota_media, nome, FK_endereco_endereco_PK, FK_tipo_estabelecimento_tipo_estabelecimento_PK, FK_foto_estabelecimento_foto_estabelecimento_PK, FK_selo_selo_PK VALUES (null, ?, ?, ?, ?, null)");
            if($insertEstab->execute([$nome_estabelecimento, $resulIdEnderco["endereco_PK"], $_POST["tipo_estab"], $resultIdFoto["foto_estabelecimento_pk"]])) $resposta["sucesso"] = 1;
        }
    }
    else{
        $resposta["sucesso"] = 0;
        $resposta["erro"] = "faltam parametros"
    }
    $db = null;
    echo json_encode($respota);
?>