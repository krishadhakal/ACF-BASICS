document.addEventListener('DOMContentLoaded', () => {
    const swiper = new Swiper('.swiper', {
        loop: true,
        spaceBetween: 30,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        // navigation: {
        //     nextEl: '.swiper-button-next',
        //     prevEl: '.swiper-button-prev',
        // },
        
    });
});