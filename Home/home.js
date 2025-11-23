/* ================== SLIDER ================== */
var swiper = new Swiper(".mySwiper", {
    effect: 'fade',
    loop: true,
    autoplay: {
        delay: 4000,
        disableOnInteraction: false,
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },

    on: {
        slideChangeTransitionStart: function () {
            document.querySelectorAll('.slide-content *').forEach(el => {
                el.style.opacity = 0;
                el.style.transform = 'translateY(20px)';
                el.style.animation = 'none';
            });
        },

        slideChangeTransitionEnd: function () {
            let active = this.slides[this.activeIndex];
            if (!active) return;

            active.querySelectorAll('.slide-content *').forEach((el) => {
                el.style.animation = 'fadeInUp 0.8s forwards';
            });
        },

        init: function() {
            let active = this.slides[this.activeIndex];
            if (!active) return;
            active.querySelectorAll('.slide-content *').forEach((el) => {
                el.style.animation = 'fadeInUp 0.8s forwards';
            });
        }
    }
});
swiper.init();
/* ================== SLIDER ================== */


/* ================== OUR VALUED CLIENTS ================== */
document.addEventListener('DOMContentLoaded', function() {
    if (document.querySelector('.clientLogosSwiper')) {
        var swiperLogos = new Swiper(".clientLogosSwiper", {
            loop: true,
            autoplay: {
                delay: 0,
                disableOnInteraction: false,
            },
            speed: 5000,
            spaceBetween: 30,
            slidesPerView: 2,
            breakpoints: {
                576: {
                    slidesPerView: 3,
                    spaceBetween: 30,
                },
                768: {
                    slidesPerView: 4,
                    spaceBetween: 30,
                },
                1024: {
                    slidesPerView: 6,
                    spaceBetween: 30,
                },
                1400: {
                    slidesPerView: 8,
                    spaceBetween: 30,
                }
            },
            loopedSlides: 13, 
        });
    }
});

/* ================== OUR VALUED CLIENTS ================== */
