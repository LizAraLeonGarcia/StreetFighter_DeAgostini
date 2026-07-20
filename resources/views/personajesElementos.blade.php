<div id="characterCarousel"
class="carousel slide"
data-bs-interval="false">

<div class="carousel-inner">

@foreach($personajes as $i => $personaje)

@include('personajes.card',[
'personaje'=>$personaje,
'active'=>$i==0
])

@endforeach

</div>

</div>