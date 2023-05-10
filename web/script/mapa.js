const menuLateral = document.getElementById("menuLateral");
const alturaPagina = window.innerHeight;


/*adicionando o evento de click a seta, a funcao faz as alteracoes necessarias para que o campo de pesquisa suma, diminuindo sua largura, e faz a seta girar*/
document.getElementById("setaMenuLateral").addEventListener('click', (e) => {
    let menuLateral = document.getElementById("menuLateral");
    if(!menuLateral.classList.contains("menuLateralAcionado")){
        /*adiciona a classe que faz com que o campo de pesquisa apareca*/
        menuLateral.classList.add("menuLateralAcionado");
        document.getElementById("containerPesquisa").style.dislay = "flex";
        document.getElementById("inpPesquisa").style.display = "block";
        document.getElementById("setaMenuLateral").style.marginRight = "0";
        document.getElementById("setaMenuLateral").style.transform = "rotate(180deg)"
    }
    else{
        /*remove a classe que torna o campo de pesquisa visivel*/
        menuLateral.classList.remove("menuLateralAcionado");
        document.getElementById("containerPesquisa").style.dislay = "none";
        document.getElementById("inpPesquisa").style.display= "none";
        document.getElementById("setaMenuLateral").style.marginRight = "3vw";
        document.getElementById("setaMenuLateral").style.transform = "rotate(0)"
    }
})

document.getElementById("inpPesquisa").addEventListener('keydown', (e) => {
    if(e.key == 'Enter'){
        pesquisaMapa()
    }

})



/*funcao que calcula o tamanho do mapa com base no tamanho da tela*/
function calculaTamanhoMapa(mapa){
    const posicaoYMapa = mapa.offsetTop;
    const posicaoXMapa = mapa.offsetLeft;
    const larguraPagina = window.innerWidth;
    mapa.style.width = `${larguraPagina}px`;
    mapa.style.height = `${alturaPagina - posicaoYMapa}px`;
}

var map = null;

/*esta funcao carrega o mapa*/
function loadMapScenario() {
    const mapa = document.getElementById("mapa");
    calculaTamanhoMapa(mapa)
    var locIfes = new Microsoft.Maps.Location(-20.197329691804068, -40.2170160437478);
    /*cria um objeto de mapa da microsoft e adiciona a div que ira conter o mapa*/
    map = new Microsoft.Maps.Map(document.getElementById("mapa"), {
    });

    locaisProprios = {}

    Microsoft.Maps.loadModule('Microsoft.Maps.AutoSuggest', function () {
        var options = {
            maxResults: 4,
            map: map,
            center: locIfes
        };
        var manager = new Microsoft.Maps.AutosuggestManager(options);
        // manager.attachAutosuggest(document.getElementById("inpPesquisa"), document.getElementById("containerPesquisa"), selectedSuggestion);
        document.getElementById("inpPesquisa").addEventListener('keyup', (e) => {
            var pesquisa = document.getElementById("inpPesquisa").value.toLowerCase()
            if(pesquisa.length == 0){
                document.getElementById("sugestoes").style.display = "none";
                var divSugestoes = document.getElementById("sugestoes").querySelectorAll("div")
                for(let item of divSugestoes){
                    item.remove()
                }
            }
            var correspondentes = []
            for(let item in locaisProprios){
                    if(locaisProprios[item]["nome"].toLowerCase().slice(0,pesquisa.length) == pesquisa){
                        correspondentes.push(locaisProprios[item])
                    }
            }
            manager.getSuggestions(pesquisa, function (suggestionResult){
                if(suggestionResult.length > 0){
                document.getElementById("sugestoes").style.display = "block";
                var quatroSugestoes = suggestionResult.slice(0,4)
                var quantidade = correspondentes.length
                for(let i = 0; i < quatroSugestoes.length-quantidade; i++){
                    let local = {
                        'nome': quatroSugestoes[i].formattedSuggestion,
                        'pushpin': new Microsoft.Maps.Pushpin(quatroSugestoes[i].location, {
                            color: "red",
                            title: quatroSugestoes[i].title
                        })
                    }
                    correspondentes.push(local)
            }
            var containerSugestoes = document.getElementById("sugestoes")
            var divSugestoes = containerSugestoes.querySelectorAll("div")
            for(let item of divSugestoes){
                    item.remove()
            }
           for(item of correspondentes){
                div = document.createElement("div")
                div.textContent = item["nome"]
                div.addEventListener('click', (e) =>{
                    let divSugestoes = document.getElementById("sugestoes").querySelectorAll("div")
                    let sugestoes = Array.from(divSugestoes)
                    let clicada = correspondentes[sugestoes.indexOf(e.target)]
                    map.setView({
                        center: clicada["pushpin"].getLocation(),
                        zoom: 16
                    })
                })
                containerSugestoes.appendChild(div)
           }
        }
    })
        })
    });

    var ifes = new Microsoft.Maps.Pushpin(locIfes, {
        color: "green",
        title: "Ifes Campus Serra",
    })

    var jaymeDosSantosNeves = new Microsoft.Maps.Pushpin(new Microsoft.Maps.Location(-20.199232504534884, -40.227077110956316), {
        color: "red",
        title: "Hospital Jayme dos Santos Neves"
    })


    locaisProprios[1] = {
        nome: "Ifes campus Serra",
        pushpin: ifes
    }
    locaisProprios[2] = {
        "nome": "Jayme dos Santos Neves",
        "pushpin": jaymeDosSantosNeves
    }

    for(let item in locaisProprios){
        map.entities.push(locaisProprios[item]["pushpin"]);

        Microsoft.Maps.Events.addHandler(locaisProprios[item]["pushpin"], 'click', function (e) { 
            document.getElementById("perfilEstabelecimento").style.display = document.getElementById("perfilEstabelecimento").style.display === "block" ? "none" : "block";
        });
    }
}

function pesquisaMapa(){

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
window.addEventListener("resize", (e) =>{
    calculaTamanhoMapa(document.getElementById("mapa"))
} )
