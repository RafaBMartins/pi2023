<?php
    require("../pdoConnect.php");
    $resposta = array();

    $userLatitude = $_GET["latitude"];
    $userLongitude = $_GET["longitude"];
    $query = "SELECT estabelecimento.id,
    estabelecimento.nome, 
    foto_estabelecimento.uri_image, 
    tipo_estabelecimento.tipo_estabelecimento,
    avg(avaliacao.nota) as nota_media,
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
    INNER JOIN AVALIACAO ON AVALIACAO.FK_ESTABELECIMENTO_ID = ESTABELECIMENTO.ID
    GROUP BY estabelecimento.id,
    estabelecimento.nome, 
    foto_estabelecimento.uri_image, 
    tipo_estabelecimento.tipo_estabelecimento,
    endereco.cidade, 
    endereco.logradouro,
    endereco.tipo_logradouro";
    $consulta = $db->prepare($query);
    if($consulta->execute()){
        $respostas["sucesso"] = 1;
        $respostas["estabelecimentos"] = array();
        if($consulta->rowCount() > 0){
            while($linha = $consulta->fetch(PDO::FETCH_ASSOC)){
                $estabelecimento = array();
                $estabelecimento["id"] = $linha["id"];
                $estabelecimento["nome_estabelecimento"] = $linha["nome"];
                $estabelecimento["nota_media"] = $linha["nota_media"];
                $estabelecimento["foto_estabelecimento"] = $linha["uri_image"];
                $estabelecimento["tipo_estabelecimento"] = $linha["tipo_estabelecimento"];
                $estabelecimento["cidade"] = $linha["cidade"];
                $estabelecimento["logradouro"] = $linha["logradouro"];
                $estabelecimento["tipo_logradouro"] = $linha["tipo_logradouro"];
                array_push($respostas["estabelecimentos"], $estabelecimento);
            }
        }
    }
    else{
        $respostas["sucesso"] = 0;
        $respostas["erro"] = "erro: " . $consulta->error;
  
    }
    echo json_encode($respostas);
?>