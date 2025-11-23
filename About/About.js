
/* ================== Start SLIDER ================== */

document.addEventListener('DOMContentLoaded', function() {
    if (document.querySelector('.clientLogosSwiper')) {
        
        var swiperLogos = new Swiper(".clientLogosSwiper", {
            autoplay: {
                delay: 0, 
                disableOnInteraction: false,
            },
            
            loop: true, 
            speed: 5000, 
            spaceBetween: 30, 
            slidesPerView: 2, 
            
            breakpoints: {
                768: {
                    slidesPerView: 4, 
                    spaceBetween: 30,
                },
                1024: {
                    slidesPerView: 6, 
                    spaceBetween: 30,
                },
            },
            
            navigation: {
                nextEl: '.swiper-button-next-logo',
                prevEl: '.swiper-button-prev-logo',
            },
        });
    }
});
/* ================== END SLIDER ================== */



/* ================== Start TRUSTED VOICES ================== */

document.addEventListener('DOMContentLoaded', function() {
    if (document.querySelector('.testimonialSwiper')) {
        var swiper = new Swiper(".testimonialSwiper", {

            autoplay: {
                delay: 5000, 
                disableOnInteraction: false, 
            },
            
            loop: true, 
            spaceBetween: 30, 
            
            slidesPerView: 1, 
            
            breakpoints: {
                768: {
                    slidesPerView: 2, 
                    spaceBetween: 30,
                },
                1024: {
                    slidesPerView: 3, 
                    spaceBetween: 30,
                },
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });
    }
});

/* ================== END TRUSTED VOICES ================== */
