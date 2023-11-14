<?php
    require("pdoConnect.php");
    $resposta = array();
    // $user_latitude = $_POST["latitude"];
    // $user_longitude = $_POST["longitude"];
    $query = "SELECT estabelecimento.id,
    estabelecimento.nome, 
    estabelecimento.nota_media, 
    foto_estabelecimento.uri_image, 
    tipo_estabelecimento.tipo_estabelecimento, 
    endereco.logradouro,
    endereco.tipo_logradouro,
acos(sin(endereco.latitude*PI()/180)*sin(20*PI()/180)+cos(endereco.latitude*PI()/180)*cos(20*PI()/180)*cos(20*PI()/180-endereco.longitude*PI()/180))*6371 as distancia
    FROM ESTABELECIMENTO
    INNER JOIN ENDERECO
    ON endereco.endereco_PK = estabelecimento.FK_endereco_endereco_PK
    INNER JOIN TIPO_ESTABELECIMENTO
    ON tipo_estabelecimento.tipo_estabelecimento_PK = estabelecimento.FK_tipo_estabelecimento_tipo_estabelecimento_PK
    INNER JOIN FOTO_ESTABELECIMENTO
    ON foto_estabelecimento.foto_estabelecimento_PK = estabelecimento.FK_foto_estabelecimento_foto_estabelecimento_PK
    ORDER BY distancia DESC";
    $consulta = $db->prepare($query);
    if($consulta->execute()){
        $respostas["sucesso"] = 1
        $resposta["estabelecimentos"] = array();
        if($consulta->countRows() > 0){
            while($linha = $consulta->fetch(PDO::FETCH_ASSOC)){
                $estabelecimento = array();
                $estabelecimento["id"] = $linha["id"];
                $estabelecimento["nome_estabelecimento"] = $linha["nome"];
                $estabelecimento["nota_media"] = $linha["nota_media"];
                $estabelecimento["foto_estabelecimento"] = $linha["foto_estabelecimento"];
                $estabelecimento["tipo_estabelecimento"] = $linha["tipo_estabelecimento"];
                $estabelecimento["logradouro"] = $linha["logradouro"];
                $estabelecimento["tipo_logradouro"] = $linha["tipo_logradouro"];
                $estabelecimento["distancia"] = $linha["distancia"];
                array_push($respostas["estabelecimentos"], $estabelecimento);
            }
        }
        var_dump($resposta));
    }
    else{
        $respostas["sucesso"] = 0;
        $respostas["erro"] = "erro: " . $consulta->error;
  
    }
    echo json_encode($respostas);
?>