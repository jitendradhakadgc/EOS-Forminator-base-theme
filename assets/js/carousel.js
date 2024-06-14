// https://www.sitepoint.com/make-a-simple-javascript-slideshow-without-jquery/

var slides = document.querySelectorAll('#homeCarousel .slide');
var currentSlide = 0;
var slideInterval = setInterval(nextSlide,5000);

function nextSlide(){
  slides[currentSlide].className = 'slide';
  currentSlide = (currentSlide+1)%slides.length;
  slides[currentSlide].className = 'slide active';
}