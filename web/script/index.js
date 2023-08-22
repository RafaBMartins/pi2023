initSlideShow();

function initSlideShow() {
    var slides = document.getElementsByClassName("slide");
    var index = 0;
    var time = 5000;
    slides.item(index).classList.add("active");

    setInterval( () =>{
        slides.item(index).classList.remove('active');
        index++;

        if(index == slides.length) index = 0;
        slides.item(index).classList.add('active');
    }, time);
}