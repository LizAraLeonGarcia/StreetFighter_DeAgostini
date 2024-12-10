<nav id="navmenu" class="navmenu">
    <div class="navbarIMGizquierda">
        <img src="{{ asset('assets/img/navbar/1.jpg') }}" alt="Chun Li Alpha" class="img-fluid">
    </div>
    <ul class="nav-list">
        <li class="nav-item"><a href="{{ url('/') }}" class="nav-link">Inicio</a></li>
        <li class="nav-item"><a href="{{ url('/listado-de-entregas') }}" class="nav-link">Listado de entregas</a></li>
        <li class="nav-item"><a href="{{ url('/personajes') }}" class="nav-link">Personajes</a></li>
        <li class="nav-item"><a href="{{ url('/figuras') }}" class="nav-link">Figuras</a></li>
        <li class="nav-item"><a href="{{ url('/revistas') }}" class="nav-link">Revistas</a></li>
        <li class="nav-item"><a href="{{ url('/galeria') }}" class="nav-link">Galería</a></li>
    </ul>
    <div class="navbarIMGderecha">
        <img src="{{ asset('assets/img/navbar/2.png') }}" alt="Chun Li Clásico" class="img-fluid">
    </div>
</nav>
