<?php
require("../pdoConnect.php");
    $idEstab = 80;
    $resposta = array();
    $consultaEstab = $db->prepare("SELECT estabelecimento.id,
    estabelecimento.nome, 
    tipo_estabelecimento.tipo_estabelecimento_pk,
    foto_estabelecimento.uri_image,
    avg(avaliacao.nota) as nota_media,
    count(avaliacao.descricao) as qtd_aval
    FROM ESTABELECIMENTO
    INNER JOIN TIPO_ESTABELECIMENTO
    ON tipo_estabelecimento.tipo_estabelecimento_PK = estabelecimento.FK_tipo_estabelecimento_tipo_estabelecimento_PK
    INNER JOIN FOTO_ESTABELECIMENTO
    ON foto_estabelecimento.foto_estabelecimento_PK = estabelecimento.FK_foto_estabelecimento_foto_estabelecimento_PK
    LEFT JOIN AVALIACAO
    ON AVALIACAO.fk_estabelecimento_id = estabelecimento.id
    WHERE estabelecimento.id = $idEstab
    group by estabelecimento.id,
    estabelecimento.nome, 
    tipo_estabelecimento.tipo_estabelecimento_pk,
    foto_estabelecimento.uri_image");

    $consultaComentarios = $db->prepare("SELECT usuario.nome,
    usuario.foto_perfil,
    avaliacao.descricao,
    avaliacao.id as avalid,
    avaliacao.nota
    FROM usuario INNER JOIN avaliacao ON usuario.id = avaliacao.fk_usuario_id
    INNER JOIN estabelecimento on estabelecimento.id = avaliacao.fk_estabelecimento_id
    WHERE estabelecimento.id = $idEstab");
    if($consultaEstab->execute()){
        while($linha = $consultaEstab->fetch(PDO::FETCH_ASSOC)){
            $resposta["estabelecimento"] = array();
            $resposta["estabelecimento"]["nome"] = $linha["nome"];
            $resposta["estabelecimento"]["tipo_estabelecimento"] = $linha["tipo_estabelecimento_pk"];
            $resposta["estabelecimento"]["uri_image"] = $linha["uri_image"];
            $resposta["sucesso"] = 1;
        }
    }
    $consultaComentarios->execute();
    $resposta["comentarios"] = array();
    while($linha = $consultaComentarios->fetch(PDO::FETCH_ASSOC)){
        $resposta["comentario"] = array();
        $resposta["comentario"]["nome"] = $linha["nome"];
        $resposta["comentario"]["foto_perfil"] = $linha["foto_perfil"];
        $resposta["comentario"]["descricao"] = $linha["descricao"];
        $avalId = $linha["avalid"];
        $consultaImagens = $db->prepare("SELECT fotos_avaliacao.descricao as uri_image from estabelecimento inner join avaliacao
        on estabelecimento.id = avaliacao.fk_estabelecimento_id
        inner join usuario
        on usuario.id = avaliacao.fk_usuario_id
        inner join fotos_avaliacao
        on avaliacao.id = fotos_avaliacao.fk_avaliacao_id where avaliacao.id = $avalId");
        $consultaImagens->execute();
        $resposta["comentario"]["imagens"] = array();
        while($linhaImg = $consultaImagens->fetch(PDO::FETCH_ASSOC)){
            array_push($resposta["comentario"]["imagens"], $linhaImg["uri_image"]);
        }
        array_push($resposta["comentarios"], $resposta["comentario"]);
    }
    $resposta["sucesso"] = 1;
    var_dump($resposta) ;
    

?>