<!DOCTYPE html>
<html lang="en">

<head>
  <title>Perfil Estabelecimento</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"></script>

  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> bootstrap do perfil conflitando com o header-->
  <link rel="stylesheet" href="../css/perfilest.css">
  <script src="../script/javaperfil.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
  <!--<?php 
  include("header.php");
  ?>-->
  <!--container que centraliza texto com todo conteúdo-->
  <div class="container text-center">
    <div class="row">

      <!--ocupa apenas uma parte da página e colaca borda em tudo menos no topo-->
      <div class="col-sm-12">
        <div class="border border-top-0">
          <div class="row">
            <div class="col-sm-12">
              <!--cola borda e espaçamento na parte de cima do perfil-->
              <div class="panel mb-3 mt-0 border">

                <!--carrosel-->
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                  <div class="carousel-indicators">
                    <!--elementos do carrosel com número do botão associado a eles-->
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                      class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                      aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                      aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
                      aria-label="Slide 3"></button>
                  </div>
                  <!--item do carrosel inicial-->
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <!--imagem do carrosel com altura de 1/4 da largura e imagem que ocupa o espaço disponível-->
                      <div class="ratio w-100" style="--bs-aspect-ratio: 25%;">
                        <img src="../img/perfilestabelecimento/1006771.png" class="object-fit-cover">
                      </div>
                    </div>
                    <!--item do carrosel-->
                    <div class="carousel-item">
                      <div class="ratio w-100" style="--bs-aspect-ratio: 25%;">
                        <img src="../img/perfilestabelecimento/6ec80cc0-196c-11ed-bacf-6fad6e8c2d0e--minified.png"
                          class="object-fit-cover">
                      </div>
                    </div>
                    <!--item do carrosel-->
                    <div class="carousel-item">
                      <div class="ratio w-100" style="--bs-aspect-ratio: 25%;">
                        <img src="../img/perfilestabelecimento/caixaca-813072.jpg" class="object-fit-cover">
                      </div>
                    </div>
                    <!--item do carrosel-->
                    <div class="carousel-item">
                      <div class="ratio w-100" style="--bs-aspect-ratio: 25%;">
                        <img src="../img/perfil/img1.png" class="object-fit-cover">
                      </div>
                    </div>
                  </div>
                  <!--botões nas laterais do carrosel que mudam o item ativo-->
                  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                  </button>
                  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                  </button>
                </div>

                <!--linha com nome do estabelecimento centralizada-->
                <div class="row mb-2 d-flex justify-content-center">
                  <div class="col-sm-12 d-flex justify-content-center">
                    <p class="h1 mt-4 mb-2 d-inline text-center">Caixaça Econômica</p>
                  </div>
                </div>
                <!--linha com classificação em estrelas do lugar, em acessibilidade e em tipo de estabelecimento; seus itens estão centralizados; possui margem em baixo e entre suas linhas-->
                <div class="row gy-3 mb-4 d-flex justify-content-center">
                  <!--imagem alinhada dentro da div com determinado tamanho máximo-->
                  <div class="col-sm-4 col-9 d-flex flex-wrap align-items-center">
                    <img src="../img/perfil/5estrela.png" class="m-auto" height="auto" width="80%">
                  </div>
                  <div class="col-sm-4 col-6 d-flex flex-wrap align-items-center">
                    <img src="../img/selos/seloBronze.svg" class="mw m-auto selo" height="auto" width="50%" alt="Selo">
                  </div>
                  <div class="col-sm-4 col-6 d-flex justify-content-center">
                    <img src="../img/selos/seloBronze.svg" class="mw m-auto selo" width="50%" alt="Selo">
                  </div>
                </div>
                <!--linha com margem em baixo-->
                <div class="row mb-4">
                  <!--descrição centralizada, determinado tamanho de fonte e espaçamento interno-->
                  <div class="col-sm-12 d-flex justify-content-center">
                    <p class="h6 p-2">O Bar Caixaça Econômica é um estabelecimento acolhedor Heineken com uma atmosfera
                      descontraída. O bar oferece Amstel uma incrível seleção Velho Barreiro de caipirinhas, drinks e
                      cervejas artesanais. A cozinha apresenta Pirassununga 51 petiscos e pratos saborosos para
                      acompanhar as bebidas. Preços acessíveis e Budweiser um atendimento atencioso completam a
                      experiência.</p>
                  </div>
                </div>

                <!--distância horizontal entre as linhas-->
                <div class="row gy-4">
                  <!--tabas que mudam o que está visível com texto centralizado-->
                  <div id="tabas" class="col-sm-12 d-flex justify-content-center">
                    <p class="taba" id="tavaliacoes" onclick="mudarTab('avaliacoes', 'visitas')">Avaliações</p>
                    <p class="taba" id="tvisitas" onclick="mudarTab('visitas', 'avaliacoes')">Informações básicas</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!--espaço das avaliações/informações-->
          <div class="row">
            <div class="col-sm-12">
              <!--div das avaliações sobre o estabelecimento-->
              <div id="avaliacoes">
                <!--estrutura das avaliações idêntica às do perfil, porém sem a foto do estabelecimento-->
                <div class="row">
                  <div class="col-sm-12">
                    <img src="../img/perfil/pcamigos.jfif" class="rounded-circle" height="70" width="70" alt="Avatar">
                    <a class="link-body-emphasis link-offset-2 link-underline-opacity-0" href="perfilusuario.php">Paulo</a>
                    
                  </div>
                  <div class="col-sm-12">
                    <div class="p-1">
                      <p>Bar muito bom eu recomendo a todos meus grandes amigos 👍.</p>
                    </div>
                  </div>
                  <div class="col-sm-12">
                    <div class="border-bottom pb-2">
                      <img src="../img/perfil/5estrela.png" height="35" width="229">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12">
                    <img src="../img/perfilestabelecimento/1601677114568.jfif" class="rounded-circle" height="70"
                      width="70" alt="Avatar">
                    <a class="link-body-emphasis link-offset-2 link-underline-opacity-0" href="perfilusuario.php">Homem</a>
                    
                  </div>
                  <div class="col-sm-12">
                    <div class="p-1">
                      <p> om bar! A garrafa desce redonda que nus..! Sempre que passo em Uberaba dou uma visita pra
                        tomar uma dose</p>
                    </div>
                  </div>
                  <div class="col-sm-12">
                    <div class="border-bottom pb-2">
                      <img src="../img/perfil/5estrela.png" height="35" width="229">
                    </div>
                  </div>
                </div>
              </div>

              <!--div das informações do estabelecimento-->
              <div id="visitas">
                <div class="row mb-2">
                  <!--coluna da localização, telefone/celular e contato do estabelecimento, quebra quando chega a 575 pixel (tamanho de tela sm)-->
                  <div class="col-sm-6">
                    <!--linha com itens centralizados e margem em baixo-->
                    <div class="row mb-2 align-items-center">
                      <!--centraliza a imagem-->
                      <div class="col-sm-4 mr-3 d-flex align-items-center justify-content-center">
                        <div class="">
                          <img src="../img/perfilestabelecimento/2838912.png" class="rounded-circle ms-sm-3" height="60"
                            width="60" alt="Avatar">
                        </div>
                      </div>
                      <!--informação que ocupa a maior parte da linha-->
                      <div class="col-sm-8">
                        <p class="px-2">Av. dos Sabiás, 330 - Morada de Laranjeiras, Serra - ES, 29166-630</p>
                      </div>
                    </div>
                    <!--linha com itens centralizados e margem em baixo-->
                    <div class="row mb-2 align-items-center">
                      <!--centraliza a imagem-->
                      <div class="col-sm-4 mr-3 d-flex align-items-center justify-content-center">
                        <div class="">
                          <img src="../img/perfilestabelecimento/pngtree-phone-icon-png-image_506.png"
                            class="rounded-circle ms-sm-3" height="60" width="60" alt="Avatar">
                        </div>
                      </div>
                      <!--informação que ocupa a maior parte da linha-->
                      <div class="col-sm-8">
                        <div class="me-2">3331-7500</div>
                      </div>
                    </div>
                    <!--linha com itens centralizados e margem em baixo-->
                    <div class="row mb-2 align-items-center">
                      <!--centraliza a imagem-->
                      <div class="col-sm-4 mr-3 d-flex align-items-center justify-content-center">
                        <div class="">
                          <img src="../img/perfilestabelecimento/1006771.png" class="rounded-circle ms-sm-3" height="60"
                            width="60" alt="Avatar">
                        </div>
                      </div>
                      <!--informação que ocupa a maior parte da linha-->
                      <div class="col-sm-8">
                        <a href="https://www.ifes.edu.br/" class="me-2">caixacaeconomica.net</a>
                      </div>
                    </div>
                  </div>
                  <!--horários que ocupam metade do espaço de informações-->
                  <div class="col-sm-6">
                    <!--linha com itens centralizados e margem em baixo-->
                    <div class="row mb-2 align-items-center">
                      <!--imagem que ocupa metade do espaço do horário-->
                      <div class="col-sm-6">
                        <img src="../img/perfilestabelecimento/clock-icon-transparent-free-icon.png"
                          class="rounded-circle ms-sm-3" height="60" width="60" alt="Avatar">
                      </div>
                      <!--coluna com os horários, cada um fica em uma linha e possui espaçamento vertical que some quando chega em 767px (tamanho de tela md no bootstrap)-->
                      <div class="col-sm-6">
                        <div class="row gy-md-2">
                          <!--colunas que quebram quando a tela chega em tamanho de tela sm-->
                          <div class="col-sm-12">
                            <div class="me-2">Domingo: 13:00-5:00</div>
                          </div>
                          <div class="col-sm-12">
                            <div class="me-2">Segunda: 13:00-5:00</div>
                          </div>
                          <div class="col-sm-12">
                            <div class="me-2">Terça: 13:00-5:00</div>
                          </div>
                          <div class="col-sm-12">
                            <div class="me-2">Quarta: 13:00-5:00</div>
                          </div>
                          <div class="col-sm-12">
                            <div class="me-2">Quinta: 13:00-5:00</div>
                          </div>
                          <div class="col-sm-12">
                            <div class="me-2">Sexta: 13:00-5:00</div>
                          </div>
                          <div class="col-sm-12">
                            <div class="me-2">Sábado: 13:00-5:00</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!--<?php 
  include("footer.php");
  ?>-->
</body>


</html>