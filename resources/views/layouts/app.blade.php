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
  <link href="{{ asset('css/navbar.css') }}" rel="stylesheet">
  <link href="{{ asset('css/figuras.css') }}" rel="stylesheet">
  <link href="{{ asset('css/galeria.css') }}" rel="stylesheet">

  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
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
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <script src="{{ asset('js/galeria.js') }}"></script>

</body>
</html>