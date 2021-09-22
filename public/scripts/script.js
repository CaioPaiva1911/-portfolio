$('documento').ready(function (){
    $("#header").load("header.html");
    $("#footer").load("footer.html");
});

$("html").on('click','.btn-menu', function(){
    $(".menu").show();
});

$("html").on('click','.btn-close', function(){
    $(".menu").hide();
});


//SlideShow
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName('mySlides')
    var dots = document.getElementsByClassName('dot')
    for(i = 0; i < slides.length; i++){
        slides[i].style.display = "none";
    }
    slideIndex++;

    if(slideIndex > slides.length ) {slideIndex = 1}

    for(i = 0; i < dots.length; i++){
        dots[i].className = dots[i].className.replace(" active", "");
    }
    
    slides[slideIndex-1].style.display = "block";
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides,2000); //Muda a imagem a cada 2 segundos
}






