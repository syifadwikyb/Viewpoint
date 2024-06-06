var swiper = new Swiper(".slide-content", {
    slidesPerView: 0,
    spaceBetween: 25,
    loop: true,
    centerSlide: 'true',
    fade: 'true',
    grabCursor: 'true',
    
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },

    breakpoints:{
        0: {    
            slidesPerView: 1,
        },
        520: {
            slidesPerView: 2,
        },
    },
  });
