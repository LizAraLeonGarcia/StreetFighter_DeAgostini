<ol id="customPagination">

@foreach($personajes as $i => $personaje)

<li
class="{{ $i==0 ? 'active' : '' }}"
data-bs-target="#characterCarousel"
data-bs-slide-to="{{ $i }}">

{{ $personaje['nombre'] }} (#{{ $personaje['numero'] }})

</li>

@endforeach

</ol>