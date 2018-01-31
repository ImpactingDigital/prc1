/*
*
* Swiper - Slider usado para a versão mobile do Site
* url - http://idangero.us/swiper/
* api - http://idangero.us/swiper/api/
* demos - http://idangero.us/swiper/demos/
*
* */


jQuery(document).ready(function($){
    var swiper = new Swiper('.swiper-container', {
        effect: 'coverflow',
        slidesPerView: 'auto',
        centeredSlides: true,
        spaceBetween: 65,
        initialSlide: 1,
        slideToClickedSlide: true,
        loop: true,
        coverflowEffect: {
            rotate: 0,
            stretch: 0,
            depth: 300,
            modifier: 1,
            slideShadows : false,
        },
    });
});
