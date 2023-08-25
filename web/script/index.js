initSlideShow();

function initSlideShow() {
    var slides = document.getElementsByClassName("slide");
    var index = 0;
    var time = 5000;
    slides.item(index).style.display = "flex";

    setInterval( () =>{
        slides.item(index).style.display = "none";
        index++;

        if(index == slides.length) index = 0;
        slides.item(index).style.display = "flex";
    }, time);
}