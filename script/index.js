const checkBoxCategory = [...document.getElementsByClassName("checkbox-category")];
checkBoxCategory.forEach(check => {
    check.addEventListener("change", (e) => {
        if(e.target.checked){
            e.target.parentElement.children[0].classList.add("category-checked");
        }
        else{
            e.target.parentElement.children[0].classList.remove("category-checked");
        }
    })
});

async function carregaEstabelecimento() {
    try {
        let posicao = await new Promise((resolve, reject) => {
            navigator.geolocation.getCurrentPosition(resolve, reject);
        });
        let dados = {"userLatitude": posicao["coords"]["latitude"], "userLongitude": posicao["coords"]["latitude"]};
        let json = JSON.stringify(dados);

        let resposta = await fetch('http://localhost:8080/pi2023/php/selectEstabelecimento.php', {
        method: 'POST', 
        body: json, 
        headers: { 'Content-Type': 'application/json' } 
        });
        let estabJson = await resposta.json();
        console.log(estabJson);
    } catch (erro) {
      console.error(erro); // você pode tratar o erro aqui
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