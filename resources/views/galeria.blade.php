@extends('layouts.app')

@section
<section id="galeria" class="galeria section light-background">
      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Pósters</h2>
        <p><span>Checa los pósters que</span> <span class="description-title"> incluye la colección</span></p>
      </div><!-- End Section Title -->
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "centeredSlides": true,
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 1,
                  "spaceBetween": 0
                },
                "768": {
                  "slidesPerView": 3,
                  "spaceBetween": 20
                },
                "1200": {
                  "slidesPerView": 5,
                  "spaceBetween": 20
                }
              }
            }
          </script>
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><a class="glightbox" data-galeria="images-galeria" href="assets/img/galeria/gallery-1.jpg"><img src="assets/img/galeria/gallery-1.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-galeria="images-galeria" href="assets/img/galeria/gallery-2.jpg"><img src="assets/img/galeria/gallery-2.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-galeria="images-galeria" href="assets/img/galeria/gallery-3.jpg"><img src="assets/img/galeria/gallery-3.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-galeria="images-galeria" href="assets/img/galeria/gallery-4.jpg"><img src="assets/img/galeria/gallery-4.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-galeria="images-galeria" href="assets/img/galeria/gallery-5.jpg"><img src="assets/img/galeria/gallery-5.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-galeria="images-galeria" href="assets/img/galeria/gallery-6.jpg"><img src="assets/img/galeria/gallery-6.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-galeria="images-galeria" href="assets/img/galeria/gallery-7.jpg"><img src="assets/img/galeria/gallery-7.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-galeria="images-galeria" href="assets/img/galeria/gallery-8.jpg"><img src="assets/img/galeria/gallery-8.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-galeria="images-galeria" href="assets/img/galeria/gallery-9.jpg"><img src="assets/img/galeria/gallery-9.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-galeria="images-galeria" href="assets/img/galeria/gallery-10.jpg"><img src="assets/img/galeria/gallery-10.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-galeria="images-galeria" href="assets/img/galeria/gallery-11.jpg"><img src="assets/img/galeria/gallery-11.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-galeria="images-galeria" href="assets/img/galeria/gallery-12.jpg"><img src="assets/img/galeria/gallery-12.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-galeria="images-galeria" href="assets/img/galeria/gallery-13.jpg"><img src="assets/img/galeria/gallery-13.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-galeria="images-galeria" href="assets/img/galeria/gallery-14.jpg"><img src="assets/img/galeria/gallery-14.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-galeria="images-galeria" href="assets/img/galeria/gallery-15.jpg"><img src="assets/img/galeria/gallery-15.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-galeria="images-galeria" href="assets/img/galeria/gallery-16.jpg"><img src="assets/img/galeria/gallery-16.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-galeria="images-galeria" href="assets/img/galeria/gallery-17.jpg"><img src="assets/img/galeria/gallery-17.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-galeria="images-galeria" href="assets/img/galeria/gallery-18.jpg"><img src="assets/img/galeria/gallery-18.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-galeria="images-galeria" href="assets/img/galeria/gallery-19.jpg"><img src="assets/img/galeria/gallery-19.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-galeria="images-galeria" href="assets/img/galeria/gallery-20.jpg"><img src="assets/img/galeria/gallery-20.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-galeria="images-galeria" href="assets/img/galeria/gallery-21.jpg"><img src="assets/img/galeria/gallery-21.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-galeria="images-galeria" href="assets/img/galeria/gallery-22.jpg"><img src="assets/img/galeria/gallery-22.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-galeria="images-galeria" href="assets/img/galeria/gallery-23.jpg"><img src="assets/img/galeria/gallery-23.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-galeria="images-galeria" href="assets/img/galeria/gallery-24.jpg"><img src="assets/img/galeria/gallery-24.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-galeria="images-galeria" href="assets/img/galeria/gallery-25.jpg"><img src="assets/img/galeria/gallery-25.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-galeria="images-galeria" href="assets/img/galeria/gallery-26.jpg"><img src="assets/img/galeria/gallery-26.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-galeria="images-galeria" href="assets/img/galeria/gallery-27.jpg"><img src="assets/img/galeria/gallery-27.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-galeria="images-galeria" href="assets/img/galeria/gallery-28.jpg"><img src="assets/img/galeria/gallery-28.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-galeria="images-galeria" href="assets/img/galeria/gallery-29.jpg"><img src="assets/img/galeria/gallery-29.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-galeria="images-galeria" href="assets/img/galeria/gallery-30.jpg"><img src="assets/img/galeria/gallery-30.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-galeria="images-galeria" href="assets/img/galeria/gallery-31.jpg"><img src="assets/img/galeria/gallery-31.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-galeria="images-galeria" href="assets/img/galeria/gallery-32.jpg"><img src="assets/img/galeria/gallery-32.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-galeria="images-galeria" href="assets/img/galeria/gallery-33.jpg"><img src="assets/img/galeria/gallery-33.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-galeria="images-galeria" href="assets/img/galeria/gallery-34.jpg"><img src="assets/img/galeria/gallery-34.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-galeria="images-galeria" href="assets/img/galeria/gallery-35.jpg"><img src="assets/img/galeria/gallery-35.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-galeria="images-galeria" href="assets/img/galeria/gallery-36.jpg"><img src="assets/img/galeria/gallery-36.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-galeria="images-galeria" href="assets/img/galeria/gallery-37.jpg"><img src="assets/img/galeria/gallery-37.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-galeria="images-galeria" href="assets/img/galeria/gallery-38.jpg"><img src="assets/img/galeria/gallery-38.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-galeria="images-galeria" href="assets/img/galeria/gallery-39.jpg"><img src="assets/img/galeria/gallery-39.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-galeria="images-galeria" href="assets/img/galeria/gallery-40.jpg"><img src="assets/img/galeria/gallery-40.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-galeria="images-galeria" href="assets/img/galeria/gallery-41.jpg"><img src="assets/img/galeria/gallery-41.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-galeria="images-galeria" href="assets/img/galeria/gallery-42.jpg"><img src="assets/img/galeria/gallery-42.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-galeria="images-galeria" href="assets/img/galeria/gallery-43.jpg"><img src="assets/img/galeria/gallery-43.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-galeria="images-galeria" href="assets/img/galeria/gallery-44.jpg"><img src="assets/img/galeria/gallery-44.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-galeria="images-galeria" href="assets/img/galeria/gallery-45.jpg"><img src="assets/img/galeria/gallery-45.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-galeria="images-galeria" href="assets/img/galeria/gallery-46.jpg"><img src="assets/img/galeria/gallery-46.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-galeria="images-galeria" href="assets/img/galeria/gallery-47.jpg"><img src="assets/img/galeria/gallery-47.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-galeria="images-galeria" href="assets/img/galeria/gallery-48.jpg"><img src="assets/img/galeria/gallery-48.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-galeria="images-galeria" href="assets/img/galeria/gallery-49.jpg"><img src="assets/img/galeria/gallery-49.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-galeria="images-galeria" href="assets/img/galeria/gallery-50.jpg"><img src="assets/img/galeria/gallery-50.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-galeria="images-galeria" href="assets/img/galeria/gallery-51.jpg"><img src="assets/img/galeria/gallery-51.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-galeria="images-galeria" href="assets/img/galeria/gallery-52.jpg"><img src="assets/img/galeria/gallery-52.jpg" class="img-fluid" alt=""></a></div>
          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>
    </section><!-- /Gallery Section -->
@endsection