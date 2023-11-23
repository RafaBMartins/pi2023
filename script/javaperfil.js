let imagemDentro;

function função(){
    texto();
    imagem();
}

function abreImg(imge){
    let modal = document.getElementById("myModal");
    let modalImg = document.getElementById("img01");
    let seta1 = document.getElementById("seta1");
    let seta2 = document.getElementById("seta2");
    seta1.style.display = "block";
    seta2.style.display = "block";
    modal.style.display = "block";
    modalImg.src = imge.src;
    imagemDentro = imge;
}

function fechaImg() { 
    let modal = document.getElementById("myModal");
    let modalImg = document.getElementById("img01");
    modal.style.display = "none";
    modalImg.src = "";
    let selecionado = document.getElementsByClassName("modalSelecionado");
    selecionado[0].classList.remove("modalSelecionado");
}

function mudaImg(x){
    
    let modalImg = document.getElementById("img01");
    let listaPai = imagemDentro.parentNode;
    let pos = Array.from(listaPai.children).indexOf(imagemDentro);
    if (!(x == -1 && pos == 0) && !(x == 1 && pos == Array.from(listaPai.children).length-1)) {
        imagemDentro = listaPai.children[pos+x];
        modalImg.src = imagemDentro.src;
    }
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

function imagem() {
    let coments = document.getElementsByClassName("imagens");
    for (let i = 0; i < coments.length; i++) {
        let listaImagens = coments[i].childNodes;
        let oculto=0;
        if (listaImagens.length > 10) {
            for (let j = 13; j < listaImagens.length; j+=2){
                listaImagens[j].style.display = "none";
                oculto++;
            }
        }
        let txt = document.createElement('h1');
        txt.innerText = "+" + oculto;
        txt.style.position = "absolute";
        listaImagens[11].style.filter = "brightness(30%)";
        txt.append(coments);
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

function exibirModal(modalName) {
    let modal = document.getElementById("myModal");
    modal.style.display = "block";
    let alteraSenhaModal = document.getElementById(modalName);
    alteraSenhaModal.classList.add("modalSelecionado");
}