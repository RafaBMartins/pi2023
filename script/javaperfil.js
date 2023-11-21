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

function altNomeUser(){
    document.getElementById("altNomeUser").style.display = "block";
    document.getElementById("nomeUser").style.display = "none";
    document.getElementById("editIcon").style.display = "none";
    document.getElementById("cancelIcon").style.display = "block";
    document.getElementById("checkIcon").style.display = "block";
    document.getElementById("altNomeUser").focus();
}

function cancelAltNome(){
    document.getElementById("altNomeUser").style.display = "none";
    document.getElementById("nomeUser").style.display = "block";
    document.getElementById("editIcon").style.display = "block";
    document.getElementById("cancelIcon").style.display = "none";
    document.getElementById("checkIcon").style.display = "none";
}

function commitAltNome(){
    document.getElementById("altNomeUser").style.display = "none";
    document.getElementById("nomeUser").style.display = "block";
    document.getElementById("editIcon").style.display = "block";
    document.getElementById("cancelIcon").style.display = "none";
    document.getElementById("checkIcon").style.display = "none";
    document.getElementById("saveAlt").style.display = "block";
}

function selectNovaFoto(){
    document.getElementById("novaFoto").click();
}



