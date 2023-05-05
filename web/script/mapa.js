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
    var locIfes = new Microsoft.Maps.Location(-20.197329691804068, -40.2170160437478);
    /*cria um objeto de mapa da microsoft e adiciona a div que ira conter o mapa*/
    map = new Microsoft.Maps.Map(document.getElementById("mapa"), {
    });

    Microsoft.Maps.loadModule('Microsoft.Maps.AutoSuggest', function () {
        var options = {
            maxResults: 4,
            map: map
        };
        var manager = new Microsoft.Maps.AutosuggestManager(options);
        manager.attachAutosuggest(document.getElementById("inpPesquisa"), document.getElementById("containerPesquisa"), selectedSuggestion);
    });

    var pushpin = new Microsoft.Maps.Pushpin(locIfes, {
        color: "green",
        title: "Ifes Campus Serra",
    })
    map.entities.push(pushpin);
}

function selectedSuggestion(suggestionResult) {
    map.setView({ bounds: suggestionResult.bestView });
    var pushpin = new Microsoft.Maps.Pushpin(suggestionResult.location);
    console.log(pushpin)
    map.entities.push(pushpin);
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
