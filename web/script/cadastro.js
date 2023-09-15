document.getElementById("selectImg").addEventListener('click', (e) => {
    document.getElementById("imgPerfil").click();
})
document.getElementById("selectImg").nextSibling.nextSibling.addEventListener('click', (e) => {
    document.getElementById("imgPerfil").click();
})

document.getElementById("selectImgAval").addEventListener('click', (e) => {
    document.getElementById("imgAval").click();
})

/*
var estrelas = [...document.getElementById("containerEstrelas").querySelectorAll("i")];
estrelas.forEach(estrela => {
    estrela.addEventListener('mouseenter', (e) => {
        let indice = estrelas.indexOf(e.target);
        for(let i = 0; i <= indice; i++){
            estrelas[i].classList.remove("fa-regular");
            estrelas[i].classList.add("fa-solid");
        }
    });

    estrela.addEventListener('mouseleave', (e) => {
        if(document.getElementsByClassName("escolhida")[0] != null){
            clicada = estrelas.indexOf(document.getElementsByClassName("escolhida")[0]);
            for(let i = 0; i <= clicada; i++){
                estrelas[i].classList.remove("fa-regular");
                estrelas[i].classList.add("fa-solid");
            }
            for(let i = clicada + 1; i < 5; i++){
                estrelas[i].classList.remove("fa-solid");
                estrelas[i].classList.add("fa-regular");
            }
        }
        else{
            e.target.classList.add("escolhida");
            estrelas.forEach(estrela => {
                estrela.classList.remove("fa-solid");
                estrela.classList.add("fa-regular");
            });
        }
    
    estrela.addEventListener('click', (e) => {
       if(e.target.classList.contains("escolhida")){
        e.target.classList.remove("escolhida");
       }
       else{
        e.target.classList.add("escolhida");
        estrelas.forEach(estrela => {
            if(estrela != e.target){
                estrela.classList.remove("escolhida");
            }
        })
       }
    })
    })
});
*/