const navLinks = document.querySelectorAll('.nav-link');

navLinks.forEach(link => {
  link.addEventListener('click', function() {
    // Eliminar la clase 'active' de todos los enlaces
    navLinks.forEach(link => link.classList.remove('active'));

    // Añadir la clase 'active' al enlace clickeado
    this.classList.add('active');
  });
});
