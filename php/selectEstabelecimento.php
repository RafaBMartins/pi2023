<?php
    // acos(sin(endereco.latitude*PI()/180)*sin($objeto->userLatitude*PI()/180)+cos(endereco.latitude*PI()/180)*cos($objeto->userLatitude*PI()/180)*cos(endereco.longitude*PI()/180 - $objeto->userLongitude*PI()/180))*6371 as distancia
    require("pdoConnect.php");
        $consulta = "SELECT estabelecimento.id,
        estabelecimento.nome, 
        estabelecimento.nota_media, 
        foto_estabelecimento.uri_image, 
        tipo_estabelecimento.tipo_estabelecimento,
        endereco.cidade, 
        endereco.logradouro,
        endereco.tipo_logradouro
        FROM ESTABELECIMENTO 
        INNER JOIN ENDERECO
        ON endereco.endereco_PK = estabelecimento.FK_endereco_endereco_PK
        INNER JOIN TIPO_ESTABELECIMENTO
        ON tipo_estabelecimento.tipo_estabelecimento_PK = estabelecimento.FK_tipo_estabelecimento_tipo_estabelecimento_PK
        INNER JOIN FOTO_ESTABELECIMENTO
        ON foto_estabelecimento.foto_estabelecimento_PK = estabelecimento.FK_foto_estabelecimento_foto_estabelecimento_PK
        WHERE ";
        $primeiro = true;
        if(isset($_POST["categoryFilters"])){
            $categoria = $_POST["categoryFilters"];
            $consulta = $consulta . "tipo_estabelecimento.tipo_estabelecimento_pk = $categoria";
            $primeiro = false;
        }
        if(isset($_POST["starRadio"])){
            $starRadio = $_POST["starRadio"];
            if(!$primeiro){
                $consulta = $consulta . " and ";
            }
            $consulta = $consulta . "nota_media >= $starRadio";
            $primeiro = false;
        }
        $query = $db->prepare($consulta);
        var_dump($query);
        if($query->execute()){
            $resposta = array();
            $resposta["estabelecimentos"] = array();
            if($query->rowCount() > 0){
                while($linha = $query->fetch(PDO::FETCH_ASSOC)){
                    var_dump($linha);
                }
            }
        }
?>