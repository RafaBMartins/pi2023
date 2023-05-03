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



/*funcao que calcula o tamanho do mapa com base no tamanho da tela*/
function calculaTamanhoMapa(mapa){
    const posicaoYMapa = mapa.offsetTop;
    const posicaoXMapa = mapa.offsetLeft;
    const larguraPagina = window.innerWidth;
    mapa.style.width = `${larguraPagina}px`;
    mapa.style.height = `${alturaPagina - posicaoYMapa}px`;
}

/*esta funcao carrega o mapa*/
function loadMapScenario() {
    const mapa = document.getElementById("mapa");
    /*cria um objeto de mapa da microsoft e adiciona a div que ira conter o mapa*/
    var map = new Microsoft.Maps.Map(document.getElementById("mapa"), {
        credentials: "Agz-GsinzRU8zLEoIGspfeW14MkrCmOv1RXL5foc3GtKtQWkGHydai2rkhG_ZwQu"
    });
    
    /*cria um campo de pesquisa do bing*/
    /*nao esta funcionando ainda*/
    Microsoft.Maps.loadModule('Microsoft.Maps.Search', function () {
        var searchManager = new Microsoft.Maps.Search.SearchManager(map);
        var searchBox = new Microsoft.Maps.Search.SearchBox(document.getElementById('inpPesquisa'), {
          searchManager: searchManager,
          autoCompleteDelay: 0,
          showSuggestions: true,
          suggestionPoiTypes: [Microsoft.Maps.Search.PoiCategory.landmark],
          suggestionNearby: true,
          suggestionDistance: 20000,
          suggestionIcon: 'pin-magenta',
          suggestionListHeader: '<div style="background-color: #f2f2f2; padding: 5px;">Sugestões</div>'
        });
      });
}

/*adiciona o evento de resize para a janela, assim o tamanho do mapa sera recalculado toda vez*/
window.addEventListener("resize", (e) =>{
    calculaTamanhoMapa(document.getElementById("mapa"))
} )