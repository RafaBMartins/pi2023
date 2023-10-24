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
      <label class="category-title">Categorias</label>
      <div class="category-filter">
        <ul id="ul-category">
          <li><label for="restaurante">Restaurantes</label><input class="checkbox-category" type="checkbox" name="restaurante" id="restaurante"></li>
          <li><label for="padaria">Padarias</label><input class="checkbox-category" type="checkbox" name="padaria" id="padaria"></li>
          <li><label for="cafeteria">Cafeterias</label><input class="checkbox-category" type="checkbox" name="cafeteria" id="cafeteria"></li>
          <li><label for="bar">Bares</label><input class="checkbox-category" type="checkbox" name="bar" id="bar"></li>
          <li><label for="hotel">Hotéis</label><input class="checkbox-category" type="checkbox" name="hotel" id="hotel"></li>
          <li><label for="cinema">Cinemas</label><input class="checkbox-category" type="checkbox" name="cinema" id="cinema"></li>
          <li><label for="shopping">Shoppings</label><input class="checkbox-category" type="checkbox" name="shopping" id="shopping"></li>
          <li><label for="supermercado">Supermercados</label><input class="checkbox-category" type="checkbox" name="supermercado" id="supermercado"></li>
          <li><label for="lojaderoupa">Lojas de roupas</label><input class="checkbox-category" type="checkbox" name="lojaderoupa" id="lojaderoupa"></li>
          <li><label for="hospital">Hospitais</label><input class="checkbox-category" type="checkbox" name="hospital" id="hospital"></li>
          <li><label for="farmácias">Farmácias</label><input class="checkbox-category" type="checkbox" name="farmácias" id="farmácias"></li>
          <li><label for="academia">Academias</label><input class="checkbox-category" type="checkbox" name="academia" id="academia"></li>
          <li><label for="escola">Escolas</label><input class="checkbox-category" type="checkbox" name="escola" id="escola"></li>
          <li><label for="universidade">Universidades</label><input class="checkbox-category" type="checkbox" name="universidade" id="universidade"></li>
          <li><label for="biblioteca">Bibliotecas</label><input class="checkbox-category" type="checkbox" name="biblioteca" id="biblioteca"></li>
          <li><label for="saloesdebeleza">Salões de beleza</label><input class="checkbox-category" type="checkbox" name="saloesdebeleza" id="saloesdebeleza"></li>
          <li><label for="parquespublicos">Parques públicos</label><input class="checkbox-category" type="checkbox" name="parquespublicos" id="parquespublicos"></li>
          <li><label for="museus">Museus</label><input class="checkbox-category" type="checkbox" name="museus" id="museus"></li>
          <li><label for="igreja">Igrejas</label><input class="checkbox-category" type="checkbox" name="igreja" id="igreja"></li>
          <li><label for="lojasdeeletronicos">Lojas de eletrônicos</label><input class="checkbox-category" type="checkbox" name="lojasdeeletronicos" id="lojasdeeletronicos"></li>
          <li><label for="lojasdeinformatica">Lojas de informática</label><input class="checkbox-category" type="checkbox" name="lojasdeinformatica" id="lojasdeinformatica"></li>
          <li><label for="outros">Outros</label><input class="checkbox-category" type="checkbox" name="outros" id="outros"></li>
        </ul>
      </div>

      <label class="distance-title">Distância</label>
      <div class="distance-filter">
        <input type="range" value="0" min="0" max="100" onmousemove="rangeSlider(this.value)">
        <span id="range_value">0km-</span>
      </div>

      <label class="rating-title">Nota</label>
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

      <label class="seal-title">Selo</label>
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