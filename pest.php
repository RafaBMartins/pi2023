<!DOCTYPE html>
<html lang="en">

<head>
  <title>Perfil estabelecimento</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"></script>

  <link rel="stylesheet" href="css/perfilest.css">
  <script src="script/javaperfil.js" defer></script>
  <script src="script/estrelas.js" defer></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body onload="funcao()">
  <?php 
    include("header.php");
    require("php/pdoConnect.php");
    $idEstab = $_GET["id"];
    $consultaEstab = $db->prepare("SELECT estabelecimento.id,
    estabelecimento.nome, 
    tipo_estabelecimento.tipo_estabelecimento_pk,
    foto_estabelecimento.uri_image,
    estabelecimento.fk_selo_selo_pk as selo,
    endereco.estado,
    endereco.cidade,
    endereco.bairro,
    endereco.logradouro,
    endereco.tipo_logradouro,
    endereco.numero,
    avg(avaliacao.nota) as nota_media,
    count(avaliacao.descricao) as qtd_aval
    FROM ESTABELECIMENTO 
    INNER JOIN ENDERECO
    ON endereco.endereco_PK = estabelecimento.FK_endereco_endereco_PK
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
    endereco.estado,
    endereco.cidade,
    endereco.bairro,
    endereco.logradouro,
    endereco.tipo_logradouro,
    endereco.numero,
    estabelecimento.fk_selo_selo_pk,
    foto_estabelecimento.uri_image");
    if($consultaEstab->execute()){
      $resultado = $consultaEstab->fetch(PDO::FETCH_ASSOC);
    }
  ?>
  <div id="myModal" class="modal" onclick="fechaImg()">
    <span class="close" onclick="fechaImg()">&times;</span>
    <figure style="display: flex; align-items: center;"></figure>
      <span id="seta1" class="seta" onclick="mudaImg(-1)">&lt;</span>
      <img class="modal-content" onclick="event.stopPropagation()" id="img01">
      <span id="seta2" class="seta" onclick="mudaImg(1)">&gt;</span>
    </figure>

    <div class="container-editaperfil" onclick="event.stopPropagation()">
      <form enctype="multipart/form-data"  id="avaliarEstabelecimento" action="php/insertComentario.php?id=<?php echo $_GET["id"]?>" method="POST" style="display: none;">
          <div id="form_header">
              <h1>AVALIE O ESTABELECIMENTO</h1>
          </div>

          <div id="inputs">
            <div class="input-box">
              <label for="comentarioTexto">
                Descrição da Avaliação
                <div class="input-field">
                  <textarea id="comentarioTexto" rows="3" name="comentarioTexto"></textarea>
                </div>
              </label>
            </div>

            <div class="input-box-rating">
              <label>
                De Sua Nota Ao Estabelecimento
              </label>
                <div class="input-field-rating">
                  <i class="fa-regular fa-star estrelaAvaliacao" id="0"></i>
                  <i class="fa-regular fa-star estrelaAvaliacao" id="1"></i>
                  <i class="fa-regular fa-star estrelaAvaliacao" id="2"></i>
                  <i class="fa-regular fa-star estrelaAvaliacao" id="3"></i>
                  <i class="fa-regular fa-star estrelaAvaliacao" id="4"></i>
                </div>
                  <input class="estrela" type="radio" name="estrela" value="1" id="0Input" style="display: none;">
                  <input class="estrela" type="radio" name="estrela" value="2" id="2Input" style="display: none;">
                  <input class="estrela" type="radio" name="estrela" value="3" id="3Input" style="display: none;">
                  <input class="estrela" type="radio" name="estrela" value="4" id="4Input" style="display: none;">
                  <input class="estrela" type="radio" name="estrela" value="5" id="5Input" style="display: none;">
            </div>

            <div class="input-box-photo">
              <label>
                Adicione Fotos a Sua Avaliação
                <div id="photosName" class="d-flex">
                  <input type="file" name="photos[]" multiple="multiple" id="photos">
                </div>
              </label>
            </div>
          </div>
          <input type="hidden" name="idEstab" value="<?php echo $_GET["id"]; ?>" id="id_estab">
          <button type="submit" id="btnModals">
            Enviar Avaliação
          </button>
      </form>
    </div>
  </div>

  <div class="container text-center p-0">    
    <div class="row"> 
      <div class="col-md-6">
          <div class="card p-0 grude">
            <p class="h1">
              <?php echo ucfirst($resultado["nome"]); ?>
              <i class="<?php
                $icones = [
                  1 =>	"fa-solid fa-utensils",
                  5 =>	"fa-solid fa-bed",
                  9 =>	"fa-solid fa-shirt",
                  13 =>	"fa-solid fa-graduation-cap",
                  10 =>	"fa-solid fa-stethoscope",
                  12 =>	"fa-solid fa-dumbbell",
                  3 =>	"fa-solid fa-mug-hot",
                  4 =>	"fa-solid fa-wine-glass",
                  11 =>	"fa-solid fa-prescription-bottle-medical",
                  7 =>	"fa-solid fa-bag-shopping",
                  15 => "fa-solid fa-landmark",
                  2 =>	"fa-solid fa-bread-slice",
                  6 =>	"fa-solid fa-film",
                  8 =>	"fa-solid fa-cart-shopping",
                  14 =>	"fa-solid fa-book",
                  16 =>	"fa-solid fa-ellipsis"
                ];
                echo($icones[$resultado["tipo_estabelecimento_pk"]]);
                ?>" style="font-size: 42px; color: var(--color-blue3);"></i>
            </p>
            <!--carrosel-->
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <!--item do carrosel inicial-->
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <!--imagem do carrosel com altura de 1/4 da largura e imagem que ocupa o espaço disponível-->
                    <div class="ratio w-100" style="--bs-aspect-ratio: 50%;">
                      <img src="<?php echo $resultado["uri_image"] ?>" class="object-fit-cover">
                    </div>
                  </div>
                </div> 
              </div>
            <div class="well m-3">
                <div class=" d-grid row">
                  <div class="d-flex column justify-content-between">
                    <label class="infoTitle">CLASSIFICAÇÃO</label><img style="display:<?php if($resultado["selo"] == null) echo "none";?>" src="img/selos/selo<?php echo $resultado["selo"] ?>.svg" class="m-auto" height="55px" width="55px">
                    <button class="btnAvaliar btnAvaliarDesktop" onclick="exibirModal('avaliarEstabelecimento')">AVALIAR ESTABELECIMENTO</button>
                  </div>
                  <label class="col-12 d-flex w-100" style="font-size:20px; align-self:start; align-items:center;"><?php echo round($resultado["nota_media"], 2); ?><i class="fa-solid fa-star d-flex" style="color:var(--color-blue5); align-items:center; height:30px;"></i> - <?php
                  if($resultado["nota_media"] > 0 && $resultado["nota_media"] <= 2 ) $qualidade = "Ruim";
                  else if($resultado["nota_media"] >= 2 && $resultado["nota_media"] < 4) $qualidade = "Bom";
                  else if($resultado["nota_media"] >= 4) $qualidade = "Excelente";
                  else $qualidade = "Não avaliado";
                  echo $qualidade;
                  ?> (<?php echo $resultado["qtd_aval"]; ?> Avaliações)</label>
                </div>
            </div>
            <div class="well">
            
          </div>
        <div class="well m-3">
          <div class="containerEndereco">
            <label class="infoTitle">ENDEREÇO</label>
            <label class="infoEndereco" style="text-align:start;"><?php echo(ucfirst($resultado["tipo_logradouro"]) . " " . $resultado["logradouro"] . ", " .  $resultado["numero"] . " - " . $resultado["bairro"] . ", " . $resultado["cidade"] . "- " . $resultado["estado"]); ?></label>
          </div>
          <div class="d-flex aa">
            <button class="btnAvaliar btnAvaliarMobile" onclick="exibirModal('avaliarEstabelecimento')">AVALIAR ESTABELECIMENTO</button>
          </div>
        </div>
        </div>
      </div>
      
      <div class="col-lg-5 col-md-7">
        <!--div com avaliações do usuário-->
        <div id="avaliacoes">
          <!--primeira avaliação-->
          <?php 
              $consultaComentarios = $db->prepare("SELECT usuario.nome, avaliacao.descricao, avaliacao.nota, avaliacao.id as avalId from estabelecimento inner join avaliacao
              on estabelecimento.id = avaliacao.fk_estabelecimento_id
              inner join usuario
              on usuario.id = avaliacao.fk_usuario_id
              inner join fotos_avaliacao
              on avaliacao.id = fotos_avaliacao.fk_avaliacao_id where estabelecimento.id = $idEstab
              GROUP BY avaliacao.id, usuario.nome");
            ?>
            <?php if($consultaComentarios->execute()): ?>
              <?php if($consultaComentarios->rowCount() > 0): ?>
                <?php while($linha = $consultaComentarios->fetch(PDO::FETCH_ASSOC)): ?>

            
          <div class="row m-1">
                  <!--nome e imagem de quem comentou no canto superior esquerdo da avaliação-->
            <div class="col-sm-12 d-flex align-items-center">
              <img src="img/perfil/pcamigos.jfif" class="rounded-circle" height="50" width="50" alt="Avatar">
              <p class="m-2"><?php echo $linha["nome"]; ?></p>
              <?php for($i = 0; $i < $linha["nota"]; $i++){ ?>
               <?php echo "<i class='fa-solid fa-star' style='color:var(--color-blue5);'></i>"; }
              for($i = 0; $i < 5 - $linha["nota"]; $i++){ ?>
                <?php echo "<i class='fa-regular fa-star' style='color:var(--color-blue5);'></i>";} ?>
            </div>
            <div class="col-sm-12">
              <div class="row justify-content-center">
                <div class="imagens">
                  <?php
                    $avalId = $linha["avalid"];
                    $consultaImgComent = $db->prepare("SELECT fotos_avaliacao.descricao as uri_image from estabelecimento inner join avaliacao
                    on estabelecimento.id = avaliacao.fk_estabelecimento_id
                    inner join usuario
                    on usuario.id = avaliacao.fk_usuario_id
                    inner join fotos_avaliacao
                    on avaliacao.id = fotos_avaliacao.fk_avaliacao_id where avaliacao.id = $avalId");
                    $consultaImgComent->execute();?>
                    <?php while($imagens = $consultaImgComent->fetch(PDO::FETCH_ASSOC)): ?>
                      <?php if($imagens["uri_image"] != ""): ?>
                        <img src="<?php echo $imagens["uri_image"]?>" onclick="abreImg(this)" width="50px" height="50px" class="imagemAbre rounded">
                      <?php endif ?>
                    <?php endwhile ?>
                </div>
              </div>
            </div>
            <!--comentário e espaçamento do texto da avaliação-->
            <div class="col-sm-12">
              <div class="p-1 border-bottom">
                <p class="text-start comentario"><?php echo $linha["descricao"]?></p>
              </div>
            </div>
          </div>
          <?php endwhile ?>
          <?php else: ?>
            <div class="nao_comentarios">Não há comentários</div>
          <?php endif?>
          <?php endif?>


          </div>

        </div>

      </div>    
          
    </div>
  </div>

  <?php 
  include("footer.php");
  ?>
</body>

</html>