function abreImg(imge){
    let modal = document.getElementById("myModal");
    let modalImg = document.getElementById("img01");
    modal.style.display = "block";
    modalImg.src = imge.src;
}

function fechaImg() { 
    let modal = document.getElementById("myModal");
    let modalImg = document.getElementById("img01");
    modal.style.display = "none";
    modalImg.src = "";
    let selecionado = document.getElementsByClassName("modalSelecionado");
    selecionado[0].classList.remove("modalSelecionado");
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
    let coments = document.getElementsByClassName("comentario");
    for (let i = 0; i < coments.length; i++) {
        let galeria = coments.item(i);
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

function exibirModal(modalName) {
    let modal = document.getElementById("myModal");
    modal.style.display = "block";
    let alteraSenhaModal = document.getElementById(modalName);
    alteraSenhaModal.classList.add("modalSelecionado");
}