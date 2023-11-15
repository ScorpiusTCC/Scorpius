const swiper = new Swiper('.swiper', {
  // Optional parameters
  direction: 'horizontal',

  // Navigation arrows
  navigation: {
    nextEl: '.next-button',
    prevEl: '.prev-button',
  },

});

// MASCARA PARA CEP

function cepMascara(cep) {
  if (cep.value.length == 5) {
      cep.value = cep.value + '-' 
  }
}