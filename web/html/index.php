<!DOCTYPE html>
<html lang="pt-br" class="vh-100">

<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>WheelieWay</title>

  <!--importando style do bootstrap-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

  <!--importando script do bootstrap-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"
    defer></script>

  <!--importando style da página-->
  <link href="../css/home.css" rel="stylesheet">

</head>
<body class="vh-100">
  <?php 
  include("../html/header.php");
  ?>
  <!--container principal da página-->
  <div class="container-fluid">

    <!--começo de uma row que tera 2 col-->
    <div class="row d-flex flex-column justify-content-center align-items-center">

      <!--coluna da barra de pesquisa-->
      <div class="input-group input-group-lg mt-5 col-sm-5">
        <span class="input-group-text border-0 px-1"><img src="../img/Icones/search.svg" class="mx-1"></span>
        <input type="text" class="form-control form-control-lg rounded" placeholder="Estabelecimento"
          aria-label="Search" aria-describedby="basic-addon2" />
        <img src="../img/Icones/filter.svg" class="mx-2">
      </div>


      <!--coluna para a lista de estabelecimentos que aparecera-->
      <div class="col-sm-4 mt-5">

        <ol>


          <!--um elemento da lista que é um card do estabelecimento-->
          <li>
            <div class="card mb-4 d-flex align-items-top p-2">
              <div class="d-flex align-items-top p-2">
                <img class="card-img-start img-fluid img-size rounded border blue-border"
                  src="../img/perfil/grelhazeze.jpg">
                <div class="w-100">
                  <!--titulo-->
                  <h4 href="perfilestabelecimento.php" class="card-title ms-2">Grelha do Zêzere<img class="img-fluid m-1"
                      src="../img/Icones/restauranteIcon.svg"></h4>
                  <!--distancia-->
                  <h6 class="card-subtitle ms-2">2,5 km</h6>
                  <!--estrelas-->
                  <div class="m-2">
                    <span class="fa fa-star blue"></span>
                    <span class="fa fa-star blue"></span>
                    <span class="fa fa-star blue"></span>
                    <span class="fa fa-star-half-o blue"></span>
                    <span class="fa fa-star-o blue"></span>
                    <!--selo-->
                    <img src="../img/selos/seloPrata.svg" class="img-fluid ms-2">
                    <!--texto clicavel para acessar o perfil completo do estabelecimento-->
                    <a href="perfilestabelecimento.php" class="blue ms-2">Ver Mais</a>
                  </div>
                </div>
              </div>
            </div>
          </li>


          <li>
            <div class="card mb-4">
              <div class="d-flex align-items-top p-2">
                <img class="card-img-start img-fluid img-size rounded border blue-border"
                  src="../img/perfil/grelhazeze.jpg">
                <div>
                  <h4 href="perfilestabelecimento.php" class="card-title ms-2">Grelha do Zêzere<img class="img-fluid m-1"
                      src="../img/Icones/restauranteIcon.svg"></h4>
                  <h6 class="card-subtitle ms-2">2,5 km</h6>
                  <div class="m-2">
                    <span class="fa fa-star blue"></span>
                    <span class="fa fa-star blue"></span>
                    <span class="fa fa-star blue"></span>
                    <span class="fa fa-star-half-o blue"></span>
                    <span class="fa fa-star-o blue"></span>
                    <img src="../img/selos/seloPrata.svg" class="img-fluid ms-2">
                    <a href="perfilestabelecimento.php" class="blue ms-2">Ver Mais</a>
                  </div>
                </div>
              </div>
            </div>
          </li>


          <li>
            <div class="card mb-4">
              <div class="d-flex align-items-top p-2">
                <img class="card-img-start img-fluid img-size rounded border blue-border"
                  src="../img/perfil/grelhazeze.jpg">
                <div>
                  <h4 class="card-title ms-2">Grelha do Zêzere<img class="img-fluid m-1"
                      src="../img/Icones/restauranteIcon.svg"></h4>
                  <h6 class="card-subtitle ms-2">2,5 km</h6>
                  <div class="m-2">
                    <span class="fa fa-star blue"></span>
                    <span class="fa fa-star blue"></span>
                    <span class="fa fa-star blue"></span>
                    <span class="fa fa-star-half-o blue"></span>
                    <span class="fa fa-star-o blue"></span>
                    <img src="../img/selos/seloPrata.svg" class="img-fluid ms-2">
                    <a href="perfilestabelecimento.php" class="blue ms-2">Ver Mais</a>
                  </div>
                </div>
              </div>
            </div>
          </li>


        </ol>

      </div>

    </div>

  </div>
  <?php 
  include("../html/footer.php");
  ?>
</body>

</html>