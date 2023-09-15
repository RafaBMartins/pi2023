/*Função para mudar de aba*/
function mudarTab(colocar, tirar) {

    /*Pega as divs das páginas (atividades e visitas) de acordo com o parâmetro passado*/
    let div_tirado = document.getElementById(tirar);
    let div_colocado = document.getElementById(colocar);

    /*Pega a borda das abas (onde clica)*/
    let borda_tirado = document.getElementById("t" + tirar);
    let borda_colocado = document.getElementById("t" + colocar)

    /*Esconde e mostra a div das páginas*/
    div_tirado.style.display = "none";
    div_colocado.style.display = "block";

    /*Tira e coloca borda*/
    borda_tirado.style.borderBottom = "none";
    borda_colocado.style.borderBottom = "3px solid #397FBF";
}

function texto() {
    let coment = document.getElementsByClassName("comentario");
    
}