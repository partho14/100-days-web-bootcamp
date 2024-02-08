/*=============== SWIPER CATEGORIES ===============*/
var swiperCategories = new Swiper(".testimonials__container", {
    spaceBetween: 24,
    loop: true,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },

    breakpoints: {
        640: {
          slidesPerView: 2,
          spaceBetween: 20,
        },
        768: {
          slidesPerView: 2,
          spaceBetween: 40,
        },
        1400: {
          slidesPerView: 3,
          spaceBetween: 24,
        },
      },

  });