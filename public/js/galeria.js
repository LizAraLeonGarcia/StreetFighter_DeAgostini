document.addEventListener('DOMContentLoaded', function () {
  const swiper = new Swiper('.swiper-container', {
    loop: true,                // Para que el carrusel sea continuo
    centeredSlides: false,      // Asegura que la primera imagen no está centrada
    initialSlide: 0,           // Empieza desde la primera imagen
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    pagination: {
      el: '.swiper-pagination',
      clickable: true,         // Habilita la paginación clickable
    },

    loop: true, // Hacer que el carrusel sea cíclico
    breakpoints: {
      1200: {
        slidesPerView: 3, // En pantallas grandes, mostrar tres imagenes
        spaceBetween: 30
      },
      768: {
        slidesPerView: 2, // En pantallas medianas, mostrar dos imágenes
        spaceBetween: 20
      },
      0: {
        slidesPerView: 1, // En pantallas pequeñas, mostrar una imagen
        spaceBetween: 10
      },
    },
  });  
});
