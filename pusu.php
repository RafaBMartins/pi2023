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

  <link rel="stylesheet" href="css/perfilest.css">
  <script src="script/javaperfil.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body onload="texto()">
  <?php 
  include("header.php");
  ?>
  

  <div id="myModal" class="modal">
    <span class="close" onclick="fechaImg()">&times;</span>
    <img class="modal-content" id="img01">
  </div>

  <div class="container text-center p-0">    
    <div class="row"> 
      <div class="col-md-5">
        <div class="card p-0 grude">
          <p class="h1">Sergio Malandro</p>
          <div>
            <p class="m-1">
              <img src="img/perfil/pcamigos.jfif" class="rounded-circle" height="auto" width="70%" alt="Avatar">
            </p>  
          </div>
        </div>
      </div>
            <div class="col-lg-5 col-md-7">
              <!--div com avaliações do usuário-->
              <div id="avaliacoes">
                <!--primeira avaliação-->
                <div class="row m-1">
                  <!--nome e imagem de quem comentou no canto superior esquerdo da avaliação-->
                  <div class="col-sm-12 d-flex align-items-center">
                    <img src="img/perfil/pcamigos.jfif" class="rounded-circle" height="70" width="70" alt="Avatar">
                    <p class="m-2">Sergio Malandro</p>
                    <img src="img/perfil/5estrela.png" height="15" width="100" alt="Avaliação">
                  </div>
                  <div class="col-sm-12">
                    <img src="img/perfil/pcamigos.jfif" onclick="abreImg(this)" width="10%" class="imagemAbre rounded">
                    <img src="img/perfil/grelhazeze.jpg" onclick="abreImg(this)" width="10%" class="imagemAbre rounded">
                    <img src="img/perfil/pcamigos.jfif" onclick="abreImg(this)" width="10%" class="imagemAbre rounded">
                    <img src="img/perfil/pcamigos.jfif" onclick="abreImg(this)" width="10%" class="imagemAbre rounded">
                    <img src="img/perfil/pcamigos.jfif" onclick="abreImg(this)" width="10%" class="imagemAbre rounded">
                  </div>
                  <!--comentário e espaçamento do texto da avaliação-->
                  <div class="col-sm-12">
                    <div class="p-1 border-bottom">
                      <p class="text-start comentario">O Severino Boteco Porreta é um bar com Pintado decoração agradável, atendimento Tucunaré
                        eficiente e música ao vivo. O cardápio oferece variedade de Jatuarana pratos a preços razoáveis.
                        A organização do Tilápia espaço pode ser confusa e o Traíra tempo de espera pode ser longo em
                        momentos de maior movimento. Recomendado para os amantes da culinária, mas esteja preparado para
                        possível aglomeração e tempo de espera.</p>
                    </div>
                  </div>
                </div>

                <div class="row m-1">
                  <!--nome e imagem de quem comentou no canto superior esquerdo da avaliação-->
                  <div class="col-sm-12 d-flex align-items-center">
                    <img src="img/perfil/pcamigos.jfif" class="rounded-circle" height="70" width="70" alt="Avatar">
                    <p class="m-2">Sergio Malandro</p>
                    <img src="img/perfil/5estrela.png" height="15" width="100" alt="Avaliação">
                  </div>
                  
                  <!--comentário e espaçamento do texto da avaliação-->
                  <div class="col-sm-12">
                    <div class="p-1 border-bottom">
                      <p class="text-start comentario">O Severino Boteco Porreta é um bar com Pintado decoração agradável, atendimento Tucunaré
                        eficiente e música ao vivo. O cardápio oferece variedade de Jatuarana pratos a preços razoáveis.
                        A organização do Tilápia espaço pode ser confusa e o Traíra tempo de espera pode ser longo em
                        momentos de maior movimento. Recomendado para os amantes da culinária, mas esteja preparado para
                        possível aglomeração e tempo de espera.</p>
                    </div>
                  </div>
                </div>

                <div class="row m-1">
                  <!--nome e imagem de quem comentou no canto superior esquerdo da avaliação-->
                  <div class="col-sm-12 d-flex align-items-center">
                    <img src="img/perfil/pcamigos.jfif" class="rounded-circle" height="70" width="70" alt="Avatar">
                    <p class="m-2">Sergio Malandro</p>
                    <img src="img/perfil/5estrela.png" height="15" width="100" alt="Avaliação">
                  </div>
                  <!--comentário e espaçamento do texto da avaliação-->
                  <div class="col-sm-12">
                    <div class="p-1 border-bottom">
                      <p class="text-start comentario">O Severino Boteco Porreta é um bar com Pintado decoração agradável, atendimento Tucunaré
                        eficiente e música ao vivo. O cardápio oferece variedade de Jatuarana pratos a preços razoáveis.
                        A organização do Tilápia espaço pode ser confusa e o Traíra tempo de.</p>
                    </div>
                  </div>
                </div>

                <div class="row m-1">
                  <!--nome e imagem de quem comentou no canto superior esquerdo da avaliação-->
                  <div class="col-sm-12 d-flex align-items-center">
                    <img src="img/perfil/pcamigos.jfif" class="rounded-circle" height="70" width="70" alt="Avatar">
                    <p class="m-2">Sergio Malandro</p>
                    <img src="img/perfil/5estrela.png" height="15" width="100" alt="Avaliação">
                  </div>
                  <!--comentário e espaçamento do texto da avaliação-->
                  <div class="col-sm-12">
                    <div class="p-1 border-bottom">
                      <p class="text-start mb-0 comentario">O Severino Boteco Porreta é um bar com Pintado decoração agradável, atendimento Tucunaré
                        eficiente e música ao vivo. O cardápio oferece variedade de Jatuarana pratos a preços razoáveis.
                        A organização do Tilápia espaço pode ser confusa e o Traíra tempo de espera pode ser longo em
                        momentos de maior movimento. Recomendado para os amantes da culinária, mas esteja preparado para
                        possível aglomeração e tempo de espera.</p>
                    </div>
                  </div>
                </div>

                <div class="row m-1">
                  <!--nome e imagem de quem comentou no canto superior esquerdo da avaliação-->
                  <div class="col-sm-12 d-flex align-items-center">
                    <img src="img/perfil/pcamigos.jfif" class="rounded-circle" height="70" width="70" alt="Avatar">
                    <p class="m-2">Sergio Malandro</p>
                    <img src="img/perfil/5estrela.png" height="15" width="100" alt="Avaliação">
                  </div>
                  <!--comentário e espaçamento do texto da avaliação-->
                  <div class="col-sm-12">
                    <div class="p-1 border-bottom">
                      <p class="text-start comentario">om bar! A garrafa desce redonda que nus..! Sempre que passo em Uberaba dou uma visita pra tomar
                        uma dose sjakdhasjkdashdajkshdo wdjka whdjawhd jwahdjhad jhsjk hhas dhsajdkhsajhd kjashdawyhd uawhy udauiwyh uwyd uyuwy duiy uiwy y
                      dhasjhd ahd adk jashdjk haskjdhkj hdsjkadiwo uqoeiu ue qwiou</p>
                    </div>
                  </div>
                </div>

              </div>

              <!--div com visitas-->
              <div id="visitas">
                <!--último registro de visita-->
                <div class="row mb-4">
                  <!--foto do lugar da visita-->
                  <div class="col-sm-2 mr-3">
                    <div class="mr-2">
                      <img src="img/perfil/potente.jpg" class="rounded-circle ms-sm-3" height="60" width="60"
                        alt="Avatar">
                    </div>
                  </div>
                  <!--nome centralizado horizontalmente-->
                  <div class="col-sm-2 d-flex align-items-center justify-content-center">
                    <div class="">
                      <p>BAR POTENTE</p>
                    </div>
                  </div>
                  <!--classificação de acessibilidade-->
                  <div class="col-sm-2">
                    <img src="img/selos/seloBronze.svg" class="rounded-circle" height="60" width="60" alt="Selo">
                  </div>
                  <!--classificação de usuário em estrelas-->
                  <div class="col-sm-6 d-flex align-items-center justify-content-center">
                    <div class="">
                      <img src="img/perfil/4estrela.png" height="35" width="229" alt="Avaliação">
                    </div>
                  </div>
                </div>
                <!--penúltimo registro de visita-->
                <div class="row mb-4">
                  <div class="col-sm-2 mr-3">
                    <div class="mr-2">
                      <img src="img/perfil/img1.png" class="rounded-circle ms-sm-3" height="60" width="60"
                        alt="Avatar">
                    </div>
                  </div>
                  <div class="col-sm-2 d-flex align-items-center justify-content-center">
                    <div class="">
                      <p>Lugar</p>
                    </div>
                  </div>
                  <div class="col-sm-2">
                    <img src="img/selos/seloOuro.svg" class="rounded-circle" height="60" width="60" alt="Selo">
                  </div>
                  <div class="col-sm-6 d-flex align-items-center justify-content-center">
                    <div class="">
                      <img src="img/perfil/5estrela.png" height="35" width="229" alt="Avaliação">
                    </div>
                  </div>
                </div>
                <!--primeiro registro de visita-->
                <div class="row mb-4">
                  <div class="col-sm-2 mr-3">
                    <div class="mr-2">
                      <img src="img/perfil/porreta.jpg" class="rounded-circle ms-sm-3" height="60" width="60  "
                        alt="Avatar">
                    </div>
                  </div>
                  <div class="col-sm-2 d-flex align-items-center justify-content-center">
                    <div class="">
                      <p>Severino Boteco porreta</p>
                    </div>
                  </div>
                  <div class="col-sm-2">
                    <img src="img/selos/seloPrata.svg" class="rounded-circle" height="60" width="60" alt="Selo">
                  </div>
                  <div class="col-sm-6 d-flex align-items-center justify-content-center">
                    <div class="">
                      <img src="img/perfil/5estrela.png" height="35" width="229" alt="Avaliação">
                    </div>
                  </div>
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