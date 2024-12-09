// Selecciona todos los enlaces de la barra de navegación
const navLinks = document.querySelectorAll('.nav-link');

// Recorre todos los enlaces y agrega un evento de clic
navLinks.forEach(link => {
  link.addEventListener('click', function(event) {
    // Elimina la clase 'active' de todos los enlaces
    navLinks.forEach(link => link.classList.remove('active'));

    // Añade la clase 'active' al enlace que fue clickeado
    this.classList.add('active');
  });
});
