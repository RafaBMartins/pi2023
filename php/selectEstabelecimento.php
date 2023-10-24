<?php
    require("pdoConnect.php");
    $resposta = array();
    $user_latitude = $_POST["latitude"];
    $user_longitude = $_POST["longitude"];
    $query = "SELECT estabelecimento.id,
    estabeleciment.nome, 
    estabelecemineto.nota_media, 
    foto_estabelecimento.foto_estabelecimento, 
    tipo_estabelecimento.tipo_estabelecimento, 
    endereco.logradouro,
    endereco.tipo_logradouro
    acos(sin(estabelecimento.latitude*PI()/180)*sin($user_latitude*PI()/180)+cos(estabelecimento.latitude*PI()/180)*cos($user_latitude*PI()/180)*cos($user_longitude*PI()/180-estabelecimento.longitude*PI()/180))*6371 as distancia
    FROM ESTABELECIMENTO
    INNER JOIN ENDERECO
    ON endereco.endereco_PK = estabelecimento.FK_endereco_endereco_PK
    INNER JOIN TIPO_ESTABELECIMENTO
    ON tipo_estabelecimento.tipo_estabelecimento_PK = estabelecimento.FK_tipo_estabelecimento_tipo_estabelecimento_PK
    INNER JOIN FOTO
    ON foto_estabelecimento.foto_estabelecimento_PK = estabelecimento.FK_foto_estabelecimneto_foto_estabelecimento_PK
    ORDER BY distancia DESC;"
    $consulta = $db->prepare($query);
    if($consulta->execute()){
        $resposta["sucesso"] = 1
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
    }
    else{
        $resposta["sucesso"] = 0;
        $resposta["erro"] = "erro: " . $consulta->error;
  
    }
    echo json_encode($resposta);
?>