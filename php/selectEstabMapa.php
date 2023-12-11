<?php
    require("pdoConnect.php");

    $resposta = array();

    $query = "SELECT estabelecimento.id,
    estabelecimento.nome, 
    avg(avaliacao.nota) as nota_media, 
    tipo_estabelecimento.tipo_estabelecimento_pk,
count(avaliacao.descricao) as qtd_aval,
    endereco.latitude,
    estabelecimento.fk_selo_selo_pk as selo,
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
group by estabelecimento.id, estabelecimento.nome, tipo_estabelecimento.tipo_estabelecimento_pk, endereco.latitude, endereco.longitude, estabelecimento.fk_selo_selo_pk";
    $consulta = $db->prepare($query);
    if($consulta->execute()){
        $resposta["estabelecimentos"] = array();
        if($consulta->rowCount() > 0){
            $resposta["sucesso"] = 1;
            while($linha = $consulta->fetch(PDO::FETCH_ASSOC)){
                $estabelecimento = array();
                $estabelecimento["nome"] = $linha["nome"];
                $estabelecimento["tipo_estabelecimento"] = $linha["tipo_estabelecimento_pk"];
                $estabelecimento["latitude"] = $linha["latitude"];
                $estabelecimento["longitude"] = $linha["longitude"];
                $estabelecimento["nota_media"] = $linha["nota_media"];
                $estabelecimento["qtd_aval"] = $linha["qtd_aval"];
                $estabelecimento["id"] = $linha["id"];
                $estabelecimento["selo"] = $linha["selo"];
                array_push($resposta["estabelecimentos"], $estabelecimento);
            }
        }
        else{
            $resposta["sucesso"] = 0;
            $resposta["erro"] = 'nenhum estabelecimento encontrado';
        }
    }
    else{
        $resposta["sucesso"] = 0;
        $resposta["erro"] = "erro: " . $consulta->error;
    }

    echo json_encode($resposta);
?>