document.getElementById("selectImg").addEventListener('click', (e) => {
    document.getElementById("imgPerfil").click();
})
document.getElementById("selectImg").nextSibling.nextSibling.addEventListener('click', (e) => {
    document.getElementById("imgPerfil").click();
})

document.getElementById("selectImgAval").addEventListener('click', (e) => {
    document.getElementById("imgAval").click();
})

document.getElementById("botCad").addEventListener('click', (e) => {
    document.getElementById("form_estab").submit();
})

// const imgFundo = document.getElementById("imgFundo");
// imgFundo.style.width = `${window.innerWidth}px`;
// imgFundo.style.height = `${window.innerHeight}px`;

// document.addEventListener('resize', (e) => {

//     document.getElementsByClassName("fundo")[0].style.width = 
// })