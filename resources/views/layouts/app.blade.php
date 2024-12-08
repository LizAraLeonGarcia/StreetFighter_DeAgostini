<!DOCTYPE html>
<html lang="es">
<!-- --------------------------------------------------------------- HEADER --------------------------------------------------------------- -->
<head> 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Videojuego clásico de lucha: Street Fighter. Descubre personajes del mejor juego de lucha de la historia.">
  <meta name="keywords" content="Street Fighter, juego, lucha, personajes, videojuego, clásico">
  <meta name="author" content="Lizbeth Araceli León García">
  <title>Street Fighter</title>
  <!-- ----------------------------------------------------------------------------------------------------------------- cargar archivos CSS -->
  <link href="{{ asset('css/main.css') }}" rel="stylesheet">
  <link href="{{ asset('css/navbar.css') }}" rel="stylesheet">
  <link href="{{ asset('css/footer.css') }}" rel="stylesheet">
  <link href="{{ asset('css/inicio.css') }}" rel="stylesheet">
  <link href="{{ asset('css/personajes.css') }}" rel="stylesheet">
  <link href="{{ asset('css/figuras-revistas.css') }}" rel="stylesheet">
  <link href="{{ asset('css/galeria.css') }}" rel="stylesheet">

  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Link a Font Awesome desde CDN -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>
<!-- ---------------------------------------------------------------- BODY ---------------------------------------------------------------- -->
<body>
  <!-- -------------------------------------------------------- header de la pagina -------------------------------------------------------- -->
  <header id="header" class="header">
    <div>
      @include('partials.navbar')
    </div>
  </header>
  <!-- Este es el lugar donde se inserta el contenido de las vistas específicas -->
  @yield('content')

  @include('partials.footer')
  <!-- cargar scripts -->
   <!-- Bootstrap JS (para la funcionalidad de carrusel) -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="{{ asset('js/navbar.js') }}"></script>
  <script src="{{ asset('js/galeria.js') }}"></script>

</body>
</html>