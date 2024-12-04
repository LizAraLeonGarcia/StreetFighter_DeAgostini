@extends('layouts.app')

@section('content')
  <div id="inicio" class="inicio">
    <div class="container">
      <div class="row gy-4 justify-content-center justify-content-lg-between">
        <div class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h1 data-aos="fade-up">La colección de personajes más grande de un videojuego</h1>
          <p data-aos="fade-up" data-aos-delay="100">La saga que marcó el mundo gamer no deja de ser novedad gracias a la colección de fascículos que ha sacado a la luz...</p>
          <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
            <a href="https://www.youtube.com/watch?v=eL9vshOQm0Y" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Ver video</span></a>
          </div>
        </div>
        <div class="col-lg-5 order-1 order-lg-2 hero-img" data-aos="zoom-out">
          <img src="assets/img/hero-img.png" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>
  </div>
@endsection