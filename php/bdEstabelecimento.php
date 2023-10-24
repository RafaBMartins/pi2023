<?php
    require("pdoConnect.php");
    if(isset($_FILES["img_perfil"])){
        //$uploadDir = ""
        $teste = $db->prepare("SELECT nome FROM ESTABELECIMENTO WHERE id = ?");
        $teste->execute([1]);
        $resultado = $teste->fetch(PDO::FETCH_ASSOC);
        var_dump($resultado);
        
        $insertEndereco = $db->prepare("INSERT INTO ENDERECO (logradouro, tipo_logradouro, estado, cidade, bairro, numero, latitude, longitude, FK_tipo_estabelecimento_tipo_estabelecimento_PK) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
        $insertEndereco->execute([$_POST["logradouro"], $_POST["tipo_logradouro"], $_POST["estado"], $_POS["cidade"], $_POST["bairro"], $_POST["numero"], $_POST["latitude"], $_POST["longitude"], $_POST["tipo_estab"]]);
        $idEnderco = $db->prepare("SELECT endereco_pk FROM ENDERECO WHERE bairro = ? and numero = ?");
        $idEnderco->execute([$_POST["bairro"], $_POST["numero"]]);
        $resulIdEnderco = $idEnderco->fetch(PDO::FETCH_ASSOC);
    
        $insertFoto = $db->prepare("INSERT INTO FOTO_ESTABELECIMENTO (foto_estabelecimento) VALUES (?)");
        $insertFoto->execute([$_POST["img_perfil"]]);
        $idFoto = $db->prepare("SELECT foto_estabelecimento_PK FROM FOTO_ESTABELECIMENTO")
        $idFoto->execute($idFoto);
         $resultIdFoto = $idFoto->fetch(PDO::FETCH_ASSOC);

        $insertEstab = $db->prepare("INSERT INTO ESTABELECIMENTO (nota_media, nome, FK_endereco_endereco_PK, FK_tipo_estabelecimento_tipo_estabelecimento_PK, FK_foto_estabelecimento_foto_estabelecimento_PK, FK_selo_selo_PK VALUES (null, ?, ?, ?, ?, null)");
        $insertEstab->execute([$_POST["nome_estabelecimento"], $resulIdEnderco["endereco_PK"], $_POST["tipo_estab"], $resultIdFoto["foto_estabelecimento_pk"]]);

    }
    $db = null;

?>