<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mapa</title>

  <!--importando style da página-->
  <link rel="stylesheet" type="text/css" href="css/mapa.css">

  <!--importando style do icones do bootstrap-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

  <!--importando style do fontawesome-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!--importando script da página-->
  <!-- <script src="script/mapa.js" defer></script> -->

  <!--importando script dos mapas do bing-->
  <script type='text/javascript'
    src='https://www.bing.com/api/maps/mapcontrol?callback=loadMapScenario&key=Agz-GsinzRU8zLEoIGspfeW14MkrCmOv1RXL5foc3GtKtQWkGHydai2rkhG_ZwQu&libs=Microsoft.Maps.Search'></script>

  <!--importando style do bootstrap-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

  <!--importando script do bootstrap-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"
    defer></script> 
</head>

<body>
  <?php 
  include("header.php");
  ?>

  <!--section onde o mapa e o menu de pesquisa lateral ficara posicionado-->
  <section id="containerMapa">
    <!--container do menu lateral-->
    <div id="menuLateral" class="menuLateralAcionado container-fluid">
      <!--container onde fica os itens do menu referentes a pesquisa-->
      <div id="containerPesquisa">
        <input type="text" id="inpPesquisa" name="pesquisa" placeholder="Pesquisa">
        <i class="fa-solid fa-rectangle-xmark d-none"
          style="color: #ff0000; font-size: 36px; margin-left: 10px; cursor: pointer;" id="botFechaPerfil"
          onclick="fechaPerfil()"></i>
      </div>
      <div id="sugestoes"></div>
      <!--container onde a seta que minimiza o menu esta-->
    </div>

    <!-- <div id="perfilEstabelecimento" style="display: none; " class="card bg-light perfil-estabelecimento">
      <div class="card-body d-flex d-md-none" id="dadosPerfMobile">
        <div class="row justify-content-center text-center align-items-center" id="abrePerfil">
          <i class="fa-solid fa-chevron-up col-12" style="font-size: 24px;" id="setaPerfAbre"></i>
          <p id="nomeEstabelecimentoMobile" class="card-title d-md-none col-12"
            style="text-align: center; font-size: 24px;"></p>
          <p class="col-6" style="color:#00427F; font-size: 18px;">Selo: <span style="color: goldenrod">Ouro</span></p>
          <p class="col-6" style="color:#00427F; font-size: 18px;">Nota: <span style="color: goldenrod">5</span></p>
          <img src="" alt="" class="img-fluid card-img img-perfil-estabelecimento" id="imgPerfilEstabelecimentoMobile">
        </div>
      </div>

      <img src="" alt="" class="img-fluid card-img img-perfil-estabelecimento d-none d-md-block"
        id="imgPerfilEstabelecimento">
      <i class="fa-solid fa-rectangle-xmark d-none card-img-overlay"
        style="color: #ff0000; font-size: 36px; cursor: pointer;" id="botFechaPerfilMobile" onclick="fechaPerfil()"></i>
      <div class="card-body d-none d-md-block" id="dadosPerf">
        <div class="row justify-content-center align-items-center">
          <i class="fa-solid fa-chevron-up text-center mb-3 d-md-none"
            style="font-size: 24px; transform: rotate(180deg);" id="setaPerfFecha"></i>
        </div>
        <p id="nomeEstabelecimento" class="card-title" style="text-align: center; font-size: 24px;"></p>
        <div class="row align-items-center">
          <img src="img/perfil/5estrela.png" alt="" class="img-fluid col-12 mb-0">
          <img src="img//selos/seloOuro.svg" alt="" class="img-fluid col-8 mt-0" style="transform: scale(0.4);">
          <i class="fa-solid fa-hospital col-4" style="font-size: 42px;"></i>
        </div>
        <p class="card-text" style="font-size: 20px;"><span style="color: #00427F">Telefone:</span> 3331-7500</p>

        <div class="btn-group dropend col-12 mb-2">
          <button type="button" class="dropdown-toggle bg-light"
            style="color:#00427F; outline: 0; border: 0; font-size: 20px;" data-bs-toggle="dropdown"
            aria-expanded="false">
            Horários
          </button>
          <ul class="dropdown-menu ps-3" style="width: 15rem;">
            <li class="my-1"><span style="color:#00427F">Domingo: </span>24 Horas</li>
            <li class="my-1"><span style="color:#00427F">Segunda feira: </span>24 Horas</li>
            <li class="my-1"><span style="color:#00427F">Terça feira: </span>24 Horas</li>
            <li class="my-1"><span style="color:#00427F">Quarta feira: </span>24 Horas</li>
            <li class="my-1"><span style="color:#00427F">Quinta feira: </span>24 Horas</li>
            <li class="my-1"><span style="color:#00427F">Sexta: </span>24 Horas</li>
            <li class="my-1"><span style="color:#00427F">Sábado: </span>24 Horas</li>
          </ul>
        </div>

        <a href="perfilestabelecimento.html" class="card-link col-12">Ver Mais</a>
      </div>
    </div> -->


    <!--div onde o mapa sera renderizado-->
    <div id="mapa"></div>
    <!--Fim da section-->
  </section>

  <script>
    const menuLateral = document.getElementById("menuLateral");
    var ultimoPushpinClicado = null


    document.getElementById("inpPesquisa").addEventListener('keydown', (e) => {
    if (e.key == 'Enter') {
    pesquisaMapa()
    }

    })

    document.getElementById("setaPerfAbre").addEventListener('click', (e) => {
    document.getElementById("dadosPerfMobile").classList.remove("d-flex");
    document.getElementById("dadosPerfMobile").classList.add("d-none");
    document.getElementById("dadosPerf").classList.remove("d-none");
    document.getElementById("imgPerfilEstabelecimento").classList.remove("d-none");
    document.getElementById("imgPerfilEstabelecimento").classList.remove("d-md-block");
    document.getElementById("inpPesquisa").style.display = "none";
    if (window.innerWidth <= 470) {
    document.getElementById("botFechaPerfilMobile").classList.remove("d-none");
    }
    })

    document.getElementById("setaPerfFecha").addEventListener('click', (e) => {
    document.getElementById("dadosPerfMobile").classList.add("d-flex");
    document.getElementById("dadosPerfMobile").classList.remove("d-none");
    document.getElementById("dadosPerf").classList.add("d-none");
    document.getElementById("imgPerfilEstabelecimento").classList.add("d-none");
    document.getElementById("imgPerfilEstabelecimento").classList.add("d-md-block");
    document.getElementById("inpPesquisa").style.display = "block";
    if (window.innerWidth <= 470) {
    document.getElementById("botFechaPerfilMobile").classList.add("d-none");
    }
    })


    /*funcao que calcula o tamanho do mapa com base no tamanho da tela*/
    function calculaTamanhoMapa(mapa) {
    const posicaoYMapa = mapa.offsetTop;
    var alturaPagina = window.innerHeight;
    mapa.style.height = `${alturaPagina - posicaoYMapa}px`;
    mapa.style.width = `${document.querySelector("header").clientWidth}px`
    }

    var map = null;

    function carregaPerfil(clicada) {
    document.getElementById("nomeEstabelecimento").textContent = clicada["pushpin"].getTitle();
    console.log(document.getElementById("nomeEstabelecimento").textContent)
    document.getElementById("imgPerfilEstabelecimento").setAttribute('src', clicada["imagem"]);
    if (window.innerWidth < 470) {
    document.getElementById("nomeEstabelecimentoMobile").textContent = clicada["pushpin"].getTitle();
    document.getElementById("imgPerfilEstabelecimentoMobile").setAttribute('src', clicada["imagem"]);
    console.log(document.getElementById("imgPerfilEstabelecimentoMobile").getAttribute("src"))
    }
    }

    /*esta funcao carrega o mapa*/
    function loadMapScenario() {
    const mapa = document.getElementById("mapa");
    calculaTamanhoMapa(mapa)
    var locIfes = new Microsoft.Maps.Location(-20.197329691804068, -40.2170160437478);
    /*cria um objeto de mapa da microsoft e adiciona a div que ira conter o mapa*/
    if (window.innerWidth <= 540) {
    map = new Microsoft.Maps.Map(document.getElementById("mapa"), {
        center: locIfes,
        zoom: 16,
        NavigationBarMode: "minified",
        navigationBarOrientation: "vertical",
        showMapTypeSelector: false,
        showLocateMeButton: true,
    });
    }
    //se a tela for maior que 540px inicializa o mapa com outras configuracoes
    else {
    map = new Microsoft.Maps.Map(document.getElementById("mapa"), {
        center: locIfes,
        zoom: 16,
        NavigationBarMode: "minified",
        navigationBarOrientation: "horizontal"
    });
    }

    //inicializa um objeto que ira armazenar os locais que nos cadastramos
    var locaisProprios = {}

    //carrega o modulo de autosugestao do bing maps
    Microsoft.Maps.loadModule('Microsoft.Maps.AutoSuggest', function () {
    var options = {
        maxResults: 4,
        map: map,
    };
    //inicializa o manager de auto sugestao
    var manager = new Microsoft.Maps.AutosuggestManager(options);
    //este evento faz com que toda vez que o usuario solte um tecla o algoritmo de pesquisa rode novamente
    document.getElementById("inpPesquisa").addEventListener('keyup', (e) => {
        //captura o valor do input
        var pesquisa = document.getElementById("inpPesquisa").value.toLowerCase()
        //fecha o perfil aberto
        document.getElementById("perfilEstabelecimento").style.display = "none";
        document.getElementById("botFechaPerfil").classList.add("d-none")
        //caso nao tenha nada digitado remove as sugestoes
        if (pesquisa.length == 0) {
            document.getElementById("sugestoes").style.display = "none";
            var divSugestoes = document.getElementById("sugestoes").querySelectorAll("div");
            for (let item of divSugestoes) {
                item.remove();
            }
        }
        //inicializa o array de correspondencias
        var correspondentes = []
        //procura por correspondencias com os nossos locais cadastrados
        for (let item in locaisProprios) {
            if (locaisProprios[item]["nome"].toLowerCase().match(pesquisa)) {
                correspondentes.push(locaisProprios[item]);
            }
        }
        //caso sobre espaco nas sugestoes (maximo quatro), preenche com sugestoes do bing
        manager.getSuggestions(pesquisa, function (suggestionResult) {
            if (suggestionResult.length > 0) {
                document.getElementById("sugestoes").style.display = "block";
                var quatroSugestoes = suggestionResult.slice(0, 4);
                console.log(suggestionResult)
                var quantidade = correspondentes.length;
                for (let i = 0; i < quatroSugestoes.length - quantidade; i++) {
                    let local = {
                        'nome': quatroSugestoes[i].formattedSuggestion,
                        'pushpin': new Microsoft.Maps.Pushpin(quatroSugestoes[i].location, {
                            color: "red",
                            title: quatroSugestoes[i].title
                        })
                    }
                    correspondentes.push(local);
                }
                //esvazia o container de sugestoes
                var containerSugestoes = document.getElementById("sugestoes");
                var divSugestoes = containerSugestoes.querySelectorAll("div");
                for (let item of divSugestoes) {
                    item.remove();
                }
                //se houver correspondencias, as exibe nas divs e adiciona um evento de clique que abre o perfil referente a div clicada
                if (correspondentes.length > 0) {
                    for (item of correspondentes) {
                        div = document.createElement("div");
                        div.textContent = item["nome"];
                        div.addEventListener('click', (e) => {
                            let divSugestoes = document.getElementById("sugestoes").querySelectorAll("div");
                            let sugestoes = Array.from(divSugestoes);
                            let clicada = correspondentes[sugestoes.indexOf(e.target)];
                            document.getElementById("sugestoes").style.display = "none";
                            document.getElementById("inpPesquisa").value = "";
                            map.setView({
                                center: clicada["pushpin"].getLocation(),
                                zoom: 16
                            });
                            if (clicada["imagem"] != null) {
                                document.getElementById("botFechaPerfil").classList.remove("d-none")
                                document.getElementById("perfilEstabelecimento").style.display = "block"
                                carregaPerfil(clicada)
                            }
                        })
                        containerSugestoes.appendChild(div);
                    }
                }
            }
        })
    })
    });

    //criando os pins do mapa 
    var ifes = new Microsoft.Maps.Pushpin(locIfes, {
    color: "green",
    title: "Ifes Campus Serra",
    icon: "../img/pinos/pinoEscola.svg"
    });

    var jaymeDosSantosNeves = new Microsoft.Maps.Pushpin(new Microsoft.Maps.Location(-20.199232504534884, -40.227077110956316), {
    color: "red",
    title: "Hospital Jayme dos Santos Neves",
    icon: "../img/pinos/pinoHospital.svg"
    });

    var cafeArrumado = new Microsoft.Maps.Pushpin(new Microsoft.Maps.Location(-20.19826402415827, -40.224856532079116), {
    color: "blue",
    title: "Café Arrumado"
    })

    var minhaCasa = new Microsoft.Maps.Pushpin(new Microsoft.Maps.Location(<?php echo $_POST["latitude"] . ", " . $_POST["longitude"]?>), {
      color: "blue",
      title: <?php echo $_POST["nomeEstabelecimento"]?>
    })
    //fim dos pins

    //adiconando os pins no objeto de locais proprios
    locaisProprios[1] = {
    "nome": "Ifes campus Serra",
    "pushpin": ifes,
    "imagem": "../img/ifesPerfil.jpg"
    };
    locaisProprios[2] = {
    "nome": "Jayme dos Santos Neves",
    "pushpin": jaymeDosSantosNeves,
    "imagem": "../img/jaymePerfil.jpg"
    };

    locaisProprios[3] = {
    "nome": "Café Arrumado",
    "pushpin": cafeArrumado,
    "imagem": "../img/cafeArrumadoPerfil.jpg"
    };

    locaisProprios[4] = {
      "nome": <?php echo $_POST["nomeEstabelecimento"]?>,
      "pushpin": minhaCasa,
    };

    //adicionano evento de mapa nos pins
    for (let item in locaisProprios) {
      map.entities.push(locaisProprios[item]["pushpin"]);

      //se o pin for clicado, abre o perfil do estabelecimento, caso o mesmo pin seja clicado novamente fecha o perfil
      Microsoft.Maps.Events.addHandler(locaisProprios[item]["pushpin"], 'click', function (e) {
          var perfilEstabelecimento = document.getElementById("perfilEstabelecimento");
          document.getElementById("sugestoes").style.display = "none";
          if (ultimoPushpinClicado == e.target) {
              perfilEstabelecimento.style.display = perfilEstabelecimento.style.display === "flex" ? "none" : "flex";
              if (document.getElementById("botFechaPerfil").classList.contains("d-none")) {
                  document.getElementById("botFechaPerfil").classList.remove("d-none");
              }
              else {
                  document.getElementById("botFechaPerfil").classList.add("d-none");
              }
          }
          else {
              ultimoPushpinClicado = e.target;
              perfilEstabelecimento.style.display = "flex";
              document.getElementById("botFechaPerfil").classList.remove("d-none");
              perfilEstabelecimento.classList.remove("desaparecer");
              for (let local in locaisProprios) {
                  if (locaisProprios[local]["pushpin"] == e.target) {
                      var itemClicado = locaisProprios[local];
                  }
              }
              carregaPerfil(itemClicado)
        }
    });
    }

    //adiciona um evento que faz os pins sumirem quando o zoom ficar muito pequeno
    Microsoft.Maps.Events.addHandler(map, 'viewchangeend', function (e) {
    if (map.getZoom() < 16) {
        for (let item in locaisProprios) {
            map.entities.pop(locaisProprios[item]["pushpin"]);
        }
    }
    else {
        for (let item in locaisProprios) {
            map.entities.push(locaisProprios[item]["pushpin"]);
        }
    }
    });
    }

    //funcao que fecha o perfil do estabelecimento
    function fechaPerfil() {
    document.getElementById("perfilEstabelecimento").style.display = "none";
    document.getElementById("botFechaPerfil").style.display = "none";
    if (document.getElementById("mapa").style.display == "none") {
    document.getElementById("mapa").style.display = "block"
    }
    }

    //funcao que roda quando o usuario clica enter no input sem escolher uma sugestao
    function pesquisaMapa() {

    Microsoft.Maps.loadModule('Microsoft.Maps.Search', function () {
    var searchManager = new Microsoft.Maps.Search.SearchManager(map);
    var lugar = document.getElementById("inpPesquisa").value;
    var requestOptions = {
        bounds: map.getBounds(),
        where: lugar,
        callback: function (answer, userData) {
            map.setView({ bounds: answer.results[0].bestView });
            map.entities.push(new Microsoft.Maps.Pushpin(answer.results[0].location));
        }
    };
    searchManager.geocode(requestOptions);
    });
    }

    /*adiciona o evento de resize para a janela, assim o tamanho do mapa sera recalculado toda vez*/
    window.addEventListener("resize", (e) => {
    calculaTamanhoMapa(document.getElementById("mapa"));
    })

  </script>




</body>

</html>