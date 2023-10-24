<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="css/index.css" rel="stylesheet">
  <script src="script/index.js" defer></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <title>WheelieWay</title>
</head>
<body>
  <?php 
    include("header.php");
  ?>
  <img src="img/index/CadastreEstabelecimento.png" style="width: 100%;">

  <div id="search_content">
    <div id="searchBar_content">
      <input type="search" spellcheck="false">
      <i class="fa-solid fa-magnifying-glass" id="searchButton"></i>
    </div>

    <div id="filter_content">
      <div class="category-filter">
        <ul id="ul-category">
          <li><label for="restaurante">Restaurantes</label><input class="checkbox-category" type="checkbox" name="restaurante" id="restaurante"></li>
          <li><label for="hoteis">Hoteis</label><input class="checkbox-category" type="checkbox" name="hoteis" id="hoteis"></li>
          <li><label for="lojas">Lojas</label><input class="checkbox-category" type="checkbox" name="lojas" id="lojas"></li>
          <li><label for="centros-educativos">Centros Educativos</label><input class="checkbox-category" type="checkbox" name="centros-educativos" id="centros-educativos"></li>
          <li><label for="hospitais">Hospitais</label><input class="checkbox-category" type="checkbox" name="hospitais" id="hospitais"></li>
          <li><label for="lazer-esporte">Lazer e Esporte</label><input class="checkbox-category" type="checkbox" name="lazer-esporte" id="lazer-esporte"></li>
          <li><label for="academias">Academias</label><input class="checkbox-category" type="checkbox" name="academias" id="academias"></li>
          <li><label for="eventos-festas">Eventos e Festas</label><input class="checkbox-category" type="checkbox" name="eventos-festas" id="eventos-festas"></li>
        </ul>
      </div>

      <div class="distance-filter">
        <input type="range" value="0" min="0" max="100" onmousemove="rangeSlider(this.value)">
        <span id="range_value">0km</span>
      </div>

      <div class="rating-filter">
        <ul>
          <li>
            <input type="radio" id="1star" name="starRadio">
            <label for="1star">
              <i class="fa-solid fa-star"></i>
              <i class="fa-regular fa-star"></i>
              <i class="fa-regular fa-star"></i>
              <i class="fa-regular fa-star"></i>
              <i class="fa-regular fa-star"></i>
              1+
            </label>
          </li>
          <li>
            <input type="radio" id="2star" name="starRadio">
            <label for="2star">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-regular fa-star"></i>
              <i class="fa-regular fa-star"></i>
              <i class="fa-regular fa-star"></i>
              2+
            </label>
          </li>
          <li>
            <input type="radio" id="3star" name="starRadio">
            <label for="3star">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-regular fa-star"></i>
              <i class="fa-regular fa-star"></i>
              3+
            </label>
          </li>
          <li>
            <input type="radio" id="4star" name="starRadio">
            <label for="4star">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-regular fa-star"></i>
              4+
            </label>
          </li>
          <li>
            <input type="radio" id="5star" name="starRadio">
            <label for="5star">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              5+
            </label>
          </li>
        </ul>
      </div>

      <div class="seal-filter">
        <input type="radio" id="goldSeal" name="sealFilter">
        <label for="goldSeal">
          <img src="img/selos/seloOuro.svg">
        </label>
        <input type="radio" id="silverSeal" name="sealFilter">
        <label for="silverSeal">
          <img src="img/selos/seloPrata.svg">
        </label>
        <input type="radio" id="bronzeSeal" name="sealFilter">
        <label for="bronzeSeal">
          <img src="img/selos/seloBronze.svg">
        </label>
      </div>

      <button class="clean-filters">LIMPAR FILTROS</button>
    </div>

    <div id="stores_content">

      <div class="store-card">
        <img src="https://i.imgur.com/S9u0RbB.jpg" class="store-photo">
        <div class="store-infos">
          <div class="store-header">
            <label class="store-name">Chopp's Center</label>
            <a class="store-rating">
            <i class="fa-solid fa-star"></i>
            5
            </a>
          </div>
          <label class="store-category">Restaurante</label>
          <label class="store-distance">à 12km</label>
          <div class="store-footer">
            <img src="img/selos/seloOuro.svg" style="height: 50px; width: 50px;">
            <label class="endereco">Serra, Avenida dos sábias, 08</label>
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