const swiper = new Swiper('.swiper-container', {
    // Optional parameters
    autoplay: true,
    delay: 400,
    direction: 'horizontal',
    loop: true,
    effect: "fade",
    // If we need pagination
    pagination: {
        el: '.swiper-pagination',
    },

    // And if we need scrollbar
    scrollbar: {
        el: '.swiper-scrollbar',
    },
});
let x;
if (window.innerWidth < 500) {
    x = 4;
} else if (window.innerWidth > 500 && window.innerWidth < 1024) {
    x = 7;
} else {
    x = 8;
}
var swiper2 = new Swiper(".swiper2", {
    autoplay: true,
    slidesPerView: x,
    grid: {
        rows: 1
    },
    direction: "horizontal",
    loop: true,
    autoplay: {
        delay: 0.0006,
        disableOnInteraction: false
    },
    speed: 4000,

    spaceBetween: 0
});