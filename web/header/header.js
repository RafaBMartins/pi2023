/*adiciona um evento de clique ao botao de configuracoes, faz com que o menu de configuracoes abra ao ser cliacado, e feche caso seja clicado novamente ou o clique aconteca fora dele*/
document.querySelector("body").addEventListener('click', (e) => {
   if (document.getElementsByClassName("fa-gear")[0].contains(e.target)) {
      document.querySelector(".containerOpcoes").style.display = document.querySelector(".containerOpcoes").style.display === "flex" ? "none" : "flex";
      document.getElementsByClassName("fa-gear")[0].style.display = "none";
   }
   else if (document.getElementById("closeConfig").contains(e.target) || (!document.querySelector(".containerOpcoes").contains(e.target) && document.querySelector(".containerOpcoes").style.display != "none")) {
      document.querySelector(".containerOpcoes").style.display = "none";
      document.getElementsByClassName("fa-gear")[0].style.display = "block";
   }
})
