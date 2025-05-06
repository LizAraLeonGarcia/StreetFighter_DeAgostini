<nav id="navmenu" class="navmenu">
    <div class="navbarIMGizquierda">
        <img src="{{ asset('assets/img/navbar/1.jpg') }}" alt="Chun Li Alpha" class="img-fluid">
    </div>
    <ul class="nav-list">
        <li class="nav-item"><a href="{{ url('/') }}" class="nav-link {{ Request::is('/') ? 'active' : '' }}">Inicio</a></li>
        <li class="nav-item"><a href="{{ url('/listado-de-entregas') }}" class="nav-link {{ Request::is('listado-de-entregas') ? 'active' : '' }}">Listado de entregas</a></li>
        <li class="nav-item"><a href="{{ url('/personajes') }}" class="nav-link {{ Request::is('personajes') ? 'active' : '' }}">Personajes</a></li>
        <li class="nav-item"><a href="{{ url('/figuras') }}" class="nav-link {{ Request::is('figuras') ? 'active' : '' }}">Figuras</a></li>
        <li class="nav-item"><a href="{{ url('/revistas') }}" class="nav-link {{ Request::is('revistas') ? 'active' : '' }}">Revistas</a></li>
        <li class="nav-item"><a href="{{ url('/galeria') }}" class="nav-link {{ Request::is('galeria') ? 'active' : '' }}">Galería</a></li>
    </ul>
    <div class="navbarIMGderecha">
        <img src="{{ asset('assets/img/navbar/2.png') }}" alt="Chun Li Clásico" class="img-fluid">
    </div>
</nav>
