const swiper = new Swiper('.swiper-container', {
    // Optional parameters
    autoplay: true,
    delay: 400,
    direction: 'horizontal',
    loop: true,
    effect: "fade",
    // If we need pagination


    // And if we need scrollbar
    scrollbar: {
        el: '.swiper-scrollbar',
    },
});