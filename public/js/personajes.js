// Sincronizar la lista personalizada con el carrusel
document.querySelectorAll('#customPagination li').forEach(function(item) {
  item.addEventListener('click', function(e) {
    e.preventDefault(); // Prevenir el comportamiento predeterminado
    // Obtener el índice de la diapositiva
    var slideTo = this.getAttribute('data-bs-slide-to');
    // Seleccionar el carrusel
    var carousel = new bootstrap.Carousel('#characterCarousel');
    // Mover el carrusel a la diapositiva correspondiente
    carousel.to(slideTo);
    // Resaltar el ítem seleccionado (opcional)
    document.querySelectorAll('#customPagination li').forEach(function(li) {
      li.classList.remove('active'); // Eliminar la clase 'active' de todos
    });
    this.classList.add('active'); // Añadir la clase 'active' al ítem seleccionado
  });
})