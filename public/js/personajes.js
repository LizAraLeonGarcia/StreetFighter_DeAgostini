const carouselElement = document.getElementById("characterCarousel");
const carousel = new bootstrap.Carousel(carouselElement);
// Click sobre la lista
document.querySelectorAll("#customPagination li").forEach(li => {
    li.addEventListener("click", function () {
      carousel.to(this.dataset.bsSlideTo);
    });
});
// Cuando el carrusel termina de cambiar
carouselElement.addEventListener("slid.bs.carousel", function (event) {
    document.querySelectorAll("#customPagination li").forEach(li => {
        li.classList.remove("active");
        li.removeAttribute("aria-current");
    });

    const actual = document.querySelector(
        `#customPagination li[data-bs-slide-to="${event.to}"]`
    );

    actual.classList.add("active");
    actual.setAttribute("aria-current", "true");

});