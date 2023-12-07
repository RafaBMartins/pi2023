<!DOCTYPE html>
<html lang="en">

<head>
  <title>Perfil usuário</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"></script>

  <link rel="stylesheet" href="css/perfilb.css">
  <script src="script/javaperfil.js" defer></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body onload="funcao()">
  <?php 
    include("header.php");
  ?>

  <?php if(!isset($_SESSION["email"])){
    header("location: http://localhost/pi2023/login.php");
    die();
  }?>
  <div id="myModal" class="modal" onclick="fechaImg()">
    <span class="close" onclick="fechaImg()">&times;</span>
    <figure style="display: flex; align-items: center;"></figure>
      <span id="seta1" class="seta" onclick="mudaImg(-1)">&lt;</span>
      <img class="modal-content" onclick="event.stopPropagation()" id="img01">
      <span id="seta2" class="seta" onclick="mudaImg(1)">&gt;</span>
    </figure>

    <div class="container-editaperfil" onclick="event.stopPropagation()">
      <form enctype="multipart/form-data" id="alterarSenha" action="php/alterarSenha.php" method="POST" style="display:none;">
        <div id="form_header">
          <h1>Alterar Senha</h1>
        </div>

        <div id="inputs">
          <div class="input-box">
            <label for="senhaAtual">
              Senha Atual
              <div class="input-field">
                <input type="password" id="senhaAtual" name="senhaAtual">
              </div>
            </label>
          </div>

          <div class="input-box">
            <label for="newPassword"> 
              Senha Nova
              <div class="input-field">
                <input type="password" id="newPassword" name="newPassword">
              </div>
            </label>
          </div>

          <div class="input-box">
            <label for="confirmNewPassword"> 
              Confirmar Senha Nova
              <div class="input-field">
                <input type="password" id="confirmNewPassword" name="confirmNewPassword">
              </div>
            </label>
          </div>
        </div>

        <button type="submit" id="btnModals">
          Alterar Senha
        </button>
      </form>

      <form enctype="multipart/form-data" id="editarPerfil" action="php/editarPerfil.php" method="POST" style="display:none;">
        <div id="form_header">
            <h1>Editar Perfil</h1>
        </div>
        <div id="inputs">
          <div class="input-box">
            <label for="novoNome">
              Novo Nome
              <div class="input-field">
                <input type="text" id="novoNome" name="novoNome">
              </div>
            </label>
          </div>
          
          <div class="btnFoto">
              <label for="novaFoto" class="novaFotoLabel">Enviar Nova Foto</label>
              <input require="true" type="file" name="novaFoto" id="novaFoto">
          </div>
        </div>

        <button type="submit" id="btnModals">
          Confirmar Alterações
        </button>
      </form>

      <form enctype="multipart/form-data" id="excluirConta" action="php/deleteUsuario.php" method="POST" style="display:none;">
        <div id="form_header">
            <h1>Excluir Perfil</h1>
        </div>
        <div id="inputs">
          <div class="input-box">
            <label for="senhaAtual">
              Senha Atual
              <div class="input-field">
                <input type="password" id="senhaAtual" name="senhaAtual">
              </div>
            </label>
          </div>
        </div>

        <button type="submit" id="btnModals">
          Excluir Conta
        </button>
      </form>
    </div>
  </div>

  <div class="container text-center p-0">    
    <div class="row"> 
      <div class="col-md-5">
        <div class="card p-0 grude">
          <div class="fAzul">

          </div>
          <div class="rCard">
            <div class="nomeContainer">
              <p id="nomeUser" class="h1 text-white"><?php echo ucfirst($_SESSION["nome"]);?></p>
            </div>
            <div>
              <div class="containerFotos">
                <p class="m-1">
                  <img src="<?php
                            require("php/pdoConnect.php");
                            $email = $_SESSION["email"];
                            $consulta = $db->prepare("SELECT foto_perfil FROM usuario WHERE email = '$email'");
                            if($consulta->execute()){
                              if($consulta->rowCount() > 0){
                                $linha = $consulta->fetch(PDO::FETCH_ASSOC);
                                if($linha["foto_perfil"] != ""){
                                  echo($linha["foto_perfil"]);
                                }
                                else{
                                  echo("img/perfil/user.png");
                                }
                              }
                            }
  ?>" id="fotoPerfil" class="rounded-circle" alt="Avatar">
                </p> 
              </div>
            </div>
          </div>
          <div class="containerBotoes">
            <button class="store-map-button w-50 m-1" onclick="exibirModal('alterarSenha')">ALTERAR SENHA</button>
            <button class="store-map-button w-50 m-1" style="text-align: center;" onclick="exibirModal('excluirConta')">EXCLUIR CONTA</button>
            <button class="store-map-button w-50 m-1" style="text-align: right;" onclick="exibirModal('editarPerfil')">EDITAR PERFIL</button>
          </div>
        </div>
      </div>
      
      <div class="col-lg-5 col-md-7">
        <!--div com avaliações do usuário-->
        <div id="avaliacoes">
          <!--primeira avaliação-->
          <?php 
              $consultaComentarios = $db->prepare("SELECT estabelecimento.nome, foto_estabelecimento.uri_image, avaliacao.descricao, avaliacao.nota, avaliacao.id as avalid FROM ESTABELECIMENTO
              INNER JOIN foto_estabelecimento ON estabelecimento.fk_foto_estabelecimento_foto_estabelecimento_pk = foto_estabelecimento.foto_estabelecimento_pk
              INNER JOIN avaliacao ON estabelecimento.id = avaliacao.fk_estabelecimento_id
              INNER JOIN usuario ON usuario.id = avaliacao.fk_usuario_id
              WHERE usuario.email = '$email'");
            ?>
            <?php if($consultaComentarios->execute()): ?>
              <?php if($consultaComentarios->rowCount() > 0): ?>
                <?php while($linha = $consultaComentarios->fetch(PDO::FETCH_ASSOC)): ?>
            
          <div class="row m-1">
                  <!--nome e imagem de quem comentou no canto superior esquerdo da avaliação-->
            <div class="col-sm-12 d-flex align-items-center">
              <img src="<?php echo $linha["uri_image"]?>" class="rounded-circle" height="50" width="50" alt="Avatar">
              <p class="m-2"><?php echo $linha["nome"];?></p>
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
                      <img src="<?php echo $imagens["uri_image"]?>" onclick="abreImg(this)" width="50px" height="50px" class="imagemAbre rounded">
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

  <?php 
  include("footer.php");
  ?>
</body>

</html>