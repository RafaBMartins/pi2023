function abreImg(imge){
    let modal = document.getElementById("myModal");
    let modalImg = document.getElementById("img01");
    modal.style.display = "block";
    modalImg.src = imge.src;
}

// When the user clicks on <span> (x), close the modal
function fechaImg() { 
    let modal = document.getElementById("myModal");
    modal.style.display = "none";
}

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
    let coments = document.getElementsByClassName("comentario");
    for (let i = 0; i < coments.length; i++) {
        let text = coments.item(i);
        if (text.offsetHeight > 96) {
            text.style.cssText = "overflow:hidden; max-height:96px";
            let p = document.createElement('div');
            p.innerText = "Ler mais";
            p.classList.add('escondetexto');
            p.addEventListener('click', ()=> aumentar(text, p));
            text.after(p);
        }
    } 
}

function diminuir(text, p) {
    p.remove();
    text.style.cssText = "overflow:hidden; max-height:96px";
    let x = document.createElement('div');
    x.innerText = "Ler mais";
    x.classList.add('escondetexto');
    x.addEventListener('click', ()=> aumentar(text, x));
    text.after(x);
}

function aumentar(text, p) {
    p.remove();
    text.style.cssText = "max-height:none";
    let x = document.createElement('div');
    x.innerText = "Ler menos";
    x.classList.add('escondetexto');
    x.addEventListener('click', ()=> diminuir(text, x));
    text.after(x);
}

