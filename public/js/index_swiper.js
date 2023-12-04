const swiper = new Swiper('.swiper', {
    // Optional parameters
    direction: 'horizontal',
    spaceBetween: 30,

    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },

    // Configurações de breakpoints
    breakpoints: {

    // Quando a largura da tela for 576 pixels ou menos

    576: {
      slidesPerView: 1,
      spaceBetween: 10
    },

    768: {
      slidesPerView: 2,
      spaceBetween: 20
    },

    992: {
      slidesPerView: 3,
      spaceBetween: 30
    }

  },
  
});