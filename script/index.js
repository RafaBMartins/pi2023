const checkBoxCategory = [...document.getElementsByClassName("checkbox-category")];

for (let i = 0; i < checkBoxCategory.length; i++) {
  checkBoxCategory[i].addEventListener('change', () => {
    for (let j = 0; j < checkBoxCategory.length; j++) {
      if (checkBoxCategory[j] !== checkBoxCategory[i]) {
        checkBoxCategory[j].parentElement.children[0].classList.remove("category-checked");
        checkBoxCategory[j].parentElement.children[1].classList.remove("category-checked");
      }
    }

    if (checkBoxCategory[i].checked) {
      checkBoxCategory[i].parentElement.children[0].classList.add("category-checked");
      checkBoxCategory[i].parentElement.children[1].classList.add("category-checked");
    } else {
      checkBoxCategory[i].parentElement.children[0].classList.remove("category-checked");
      checkBoxCategory[i].parentElement.children[1].classList.remove("category-checked");
    }
  });
}
window.addEventListener('beforeunload', (e) => {
  window.location.href = "http://localhost/pi2023/";
});

function geraCards(estabJson){
    let storeContent = document.getElementById("stores_content");
    let estabelecimentos = estabJson["estabelecimentos"];
    estabelecimentos.forEach((estabelecimento) => {
        divStoreCard = document.createElement("div");
        if(estabelecimento["nota_media"] > 0 && estabelecimento["nota_media"] <= 2 ) qualidade = "Ruim";
        else if(estabelecimento["nota_media"] >= 2 && estabelecimento["nota_media"] < 4) qualidade = "Bom";
        else if(estabelecimento["nota_media"] >= 4) qualidade = "Excelente";
        else qualidade = "Não avaliado";
        divStoreCard.classList.add("store-card");
        divStoreCard.innerHTML = `<div class="store-photo"><img id="${estabelecimento["id"]}" src="${estabelecimento["foto_estabelecimento"]}"></div>
        <!--container com as informações gerais do estabelecimento-->
        <div class="store-infos">
          <!--categoria do estabelecimento-->
          <label class="store-category">${estabelecimento["tipo_estabelecimento"]}</label>
          <!--nome do estabelecimento-->
          <label class="store-name">${estabelecimento["nome_estabelecimento"]}</label>
          <!--nota do estabelecimento-->
          <label class="store-rating">${Math.round(estabelecimento["nota_media"])}<i class="fa-solid fa-star"></i> - ${qualidade} (${estabelecimento["qtd_aval"]} Avaliações)</label>
          <!--selo do estabelecimento-->
          <img src="img/selos/seloOuro.svg" class="store-seal">
        </div>
        <!--container com as informações referentes a endereço do estabelecimento-->
        <div class="location-infos">
          <!--endereço em extenso do estabelecimento-->
          <label class="store-location">${estabelecimento["tipo_logradouro"]}  ${estabelecimento["logradouro"]}, ${estabelecimento["cidade"]}, ${estabelecimento["bairro"]}, ${estabelecimento["numero"]}</label>
          <!--botão para redirecionar o usuario ao mapa, na localização do estabelecimento-->
          <button onclick="verNoMapa(${estabelecimento["latitude"]}, ${estabelecimento["longitude"]})" class="store-map-button">VER NO MAPA</button>
        </div>`
        document.getElementById("stores_content").append(divStoreCard);
      
      document.getElementById(estabelecimento["id"]).addEventListener('click', (e) => {
        window.open(`http://localhost/pi2023/pest.php?id=${estabelecimento["id"]}`);
      })

      document.getElementById('btnVerMapa').addEventListener('click', (e) => {
        
      })
    })
}

function verNoMapa(latitude, longitude){
  window.open(`http://localhost/pi2023/mapa.php?latitude=${latitude}&longitude=${longitude}`);
}

function limparFiltros(){
  window.location.href = "http://localhost/pi2023/";
}

async function carregaEstabelecimento() {
        var param = new URLSearchParams(window.location.search);
        var estabelecimentos = param.get("json");
        if(estabelecimentos != null){
          estabJson = JSON.parse(estabelecimentos);
          geraCards(estabJson);
        }
        else{
          var estab = JSON.parse(estabelecimentos);
          let posicao = await new Promise((resolve, reject) => {
              navigator.geolocation.getCurrentPosition(resolve, reject);
          });
          let dados = {"userLatitude": posicao["coords"]["latitude"], "userLongitude": posicao["coords"]["latitude"]};
          let json = JSON.stringify(dados);

          let resposta = await fetch('http://localhost/pi2023/php/carregaEstabelecimento.php', {
          method: 'POST', 
          body: json, 
          headers: { 'Content-Type': 'application/json' } 
          });
          let estabJson = await resposta.json();
          console.log(estabJson);
          geraCards(estabJson);
        }

  }

async function buscarEstabelecimentos(){
    let resposta = await fetch(`https://dev.virtualearth.net/REST/v1/Locations?query={${endereco}}&maxResults=1&key=Agz-GsinzRU8zLEoIGspfeW14MkrCmOv1RXL5foc3GtKtQWkGHydai2rkhG_ZwQu`, {
        method: 'GET', // ou 'POST'
        headers: {
          'Content-Type': 'application/json',
          // 'Authorization': 'Bearer seu-token' // se necessário
        },
      });
    let dados = await resposta.json();
    return dados;    
}

function filtro(){
  let input = document.getElementById("pesquisa").value.toUpperCase();
  let cards = document.getElementsByClassName("store-card");

  for (i = 0; i < cards.length; i++) {
    let a = cards[i].getElementsByClassName("store-name")[0];
    txtValue = a.textContent || a.innerText;
    if (txtValue.toUpperCase().indexOf(input) > -1) {
        cards[i].style.display = "";
    } else {
        cards[i].style.display = "none";
    }
  }
}