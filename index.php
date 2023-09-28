<!DOCTYPE html>
<html lang="pt-br">
<head>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"></script>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="/css/index.css" rel="stylesheet">
  <script src="/script/index.js" defer></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <title>WheelieWay</title>
</head>
<body>
  <?php 
    include("header.php");
  ?>
  <img src="img/index/CadastreEstabelecimento.png">

  <div id="search_content">
    <div id="searchBar_content">
      <input type="search">
      <i class="fa-solid fa-magnifying-glass"></i>
    </div>

    <div id="filter_content">
      <div class="category-filter">
        <ul>
          <li>Restaurantes</li>
          <li>Hoteis</li>
          <li>Centros Educativos</li>
          <li>Hospitais</li>
          <li>Lojas</li>
          <li>Lazer e Esporte</li>
          <li>Eventos e Festas</li>
        </ul>
      </div>

      <div class="distance-filter">
      </div>

      <div class="rating-filter">
        <ul>
          <li>
            <input type="radio" id="1star" name="starRadio">
            <label for="1star">1 Estrela</label>
            <i class="fa-solid fa-star"></i>
          </li>
          <li>
            <input type="radio" id="2star" name="starRadio">
            <label for="2star">2 Estrela</label>
            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
          </li>
          <li>
            <input type="radio" id="3star" name="starRadio">
            <label for="3star">3 Estrela</label>
            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
          </li>
          <li>
            <input type="radio" id="4star" name="starRadio">
            <label for="4star">4 Estrela</label>
            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
          </li>
          <li>
            <input type="radio" id="5star" name="starRadio">
            <label for="5star">5 Estrela</label>
            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
          </li>
        </ul>
      </div>

      <div class="seal-filter">
        <img src="img/selos/seloOuro.svg">
        <img src="img/selos/seloPrata.svg">
        <img src="img/selos/seloBronze.svg">
      </div>
    </div>

    <div id="stores_content">
      <div class="store-card">
        <img src="img/index/storeimg1">
        <div class="store-header">
          <label class="store-name"></label>
          <a class="store-rating">
          <i class="fa-solid fa-star"></i>
          5
          </a>
        </div>
        <label class="store-category">Restaurante</label>
        <label class="store-distance">12km</label>
        <img src="img/selos/seloOuro.svg">
      </div>
    </div>
  </div>

  <?php 
  include("footer.php");
  ?>
</body>
</html>