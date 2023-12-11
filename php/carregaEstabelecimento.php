<?php
    require("pdoConnect.php");
    $resposta = array();
    //var_dump($_GET);

    // $user_latitude = $_POST["latitude"];
    // $user_longitude = $_POST["longitude"];
    $query = "SELECT estabelecimento.id,
    estabelecimento.nome, 
    avg(avaliacao.nota) as nota_media, 
    foto_estabelecimento.uri_image, 
    tipo_estabelecimento.tipo_estabelecimento,
    estabelecimento.fk_selo_selo_pk as selo,
    endereco.cidade, 
    endereco.logradouro,
    endereco.bairro,
    endereco.numero,
count(avaliacao.descricao) as qtd_aval,
    endereco.tipo_logradouro,
    endereco.latitude,
    endereco.longitude
    FROM ESTABELECIMENTO 
    INNER JOIN ENDERECO
    ON endereco.endereco_PK = estabelecimento.FK_endereco_endereco_PK
    INNER JOIN TIPO_ESTABELECIMENTO
    ON tipo_estabelecimento.tipo_estabelecimento_PK = estabelecimento.FK_tipo_estabelecimento_tipo_estabelecimento_PK
    INNER JOIN FOTO_ESTABELECIMENTO
    ON foto_estabelecimento.foto_estabelecimento_PK = estabelecimento.FK_foto_estabelecimento_foto_estabelecimento_PK
    LEFT JOIN AVALIACAO
    ON avaliacao.fk_estabelecimento_id = estabelecimento.id
group by estabelecimento.id, estabelecimento.nome, foto_estabelecimento.uri_image, tipo_estabelecimento.tipo_estabelecimento, endereco.cidade, endereco.bairro, endereco.numero, endereco.logradouro, endereco.tipo_logradouro, endereco.latitude, endereco.longitude";
    $consulta = $db->prepare($query);
    if($consulta->execute()){
        $respostas["sucesso"] = 1;
        $respostas["estabelecimentos"] = array();
        if($consulta->rowCount() > 0){
            while($linha = $consulta->fetch(PDO::FETCH_ASSOC)){
                $estabelecimento = array();
                $estabelecimento["id"] = $linha["id"];
                $estabelecimento["nome_estabelecimento"] = ucfirst($linha["nome"]);
                $estabelecimento["nota_media"] = $linha["nota_media"];
                $estabelecimento["foto_estabelecimento"] = $linha["uri_image"];
                $estabelecimento["tipo_estabelecimento"] = $linha["tipo_estabelecimento"];
                $estabelecimento["cidade"] = ucfirst($linha["cidade"]);
                $estabelecimento["logradouro"] = ucfirst($linha["logradouro"]);
                $estabelecimento["tipo_logradouro"] = ucfirst($linha["tipo_logradouro"]);
                $estabelecimento["bairro"] = ucfirst($linha["bairro"]);
                $estabelecimento["numero"] = ucfirst($linha["numero"]);
                $estabelecimento["qtd_aval"] = $linha["qtd_aval"];
                $estabelecimento["latitude"] = $linha["latitude"];
                $estabelecimento["longitude"] = $linha["longitude"];
                $estabelecimento["selo"] = $linha["selo"];
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