@extends('layouts.app')

@section('content')
  <div class="container-fluid">
    <div class="section-title-INICIO">
      <h1>Street Fighter<h1>
      <h2>En esta página te muestro mi colección de Street Fighter: Planeta DeAgostini & Altaya</h2>
      <h4>La saga que marcó el mundo gamer ahora también ha sacado la colección más amplia en cuanto al número de personajes...</h4>
    </div>
    <div class="inicio">
      <!-- Primera fila -->
      <div class="row mb-4">
        <div class="col-md-5">
          <p>Con un total inicial de 60 entregas, más una posible expansión a 15 figuras extras como se hizo en España y Brasil, esta nueva colección oficial de Capcom vió la luz a finales de septiembre de 2022 en mi país México, empezando su lanzamiento con el protagonista de casi todos los videojuegos de la saga: Ryu, seguido de su inolvidable mejor amigo Ken.</p>
          <p>Cabe recalcar que las entregas varían un poco entre países, pues, aunque en mí país Ken fue la entrega 2, en España en realidad fue Chun Li, a la inversa, Chun Li en mí país fue la número 7 en llegar, por lo que, en España Ken fue el número tres.</p>
          <p>Debido a lo explicado en el parráfo anterior, y a que en sí, todas las páginas que hay sobre esta colección acomodan a los personajes según el orden en que salieron en su país de destino, yo te quiero aclarar que para hacer algo diferente he acomodado a los personajes cómo a mí me gustan, los cuales verás organizados en casi todas las secciones de la página, exceptuando la de <strong>Listado de entregas</strong>; pues ahí te ordeno las entregas en el orden que salen en mi país.</p>
        </div>
        <div class="col-md-7">
          <img src="assets/img/inicio/personajesPoster.png" class="img-fluid" alt="Poster de los personajes">
        </div>
      </div>
      <!-- Segunda fila -->
      <div class="row mb-4">
        <div class="col-md-6">
          <p>Si tienes curiosidad, puedes checar el vídeo de la colección en el canal oficial de Planeta DeAgostini, sólo debes dar clic en la imágen que está debajo de este parráfo.</p>
          <a href="https://www.youtube.com/watch?v=eL9vshOQm0Y" class="play-button-container">
            <img src="assets/img/inicio/planetadeagostini.jpg" class="img-fluid" alt="Planeta DeAgostini">
            <i class="fas fa-play"></i>
          </a>
        </div>
        <div class="col-md-6">
          <p>Aunque si tu curiosidad no se sació con el vídeo oficial, te dejo otro vídeo de la colección, pero de un YouTuber español pues, en España la colección ya terminó y, además de ser los 75 personajes, también dieron extras que puedes mirar, como 4 figuras de ciertos personajes, una playera, una gorra, una taza, pósters; sólo debes dar clic en la imágen que está debajo de este parráfo.</p>
          <a href="https://www.youtube.com/watch?v=XvIxc1hWeRw" class="play-button-container"> 
            <img src="assets/img/inicio/youtuber.jpg" class="img-fluid" alt="Colección completa youtuber">
            <i class="fas fa-play"></i>
          </a>
        </div>
      </div>
      <!-- Tercera fila -->
      <div class="row mb-4">
        <div class="col-md-7">
          <img src="assets/img/inicio/inicioRyu.jpg" class="img-fluid" alt="Ryu entrega 1">
        </div>
        <div class="col-md-5">
          <p>No obstante, antes de mostrarte dichas tablas, te explico qué podrás encontrar en mi página según la sección que escojas:</p>
          <ul>
            <li>Inicio</li>
              <p>Sección en la que te encuentras actualmente y en donde doy una breve descripción de esta coleción así como tablas con los personajes donde, lo más relevante son: su nombre, el número de entrega que fueron, la fecha en que salieron, su precio de venta al público</p>
            <li>Listado de entregas</li>
              <p>Sección donde te ordeno las entregas según cómo salieron en México, junto a algunos datos relevantes.</p>
            <li>Personajes</li>
              <p>Sección donde te muestro fotos que yo tomé de las estatuillas con su revista correspondiente, con un poco de detalles sobre cada personaje.</p>
            <li>Figuras</li>
              <p>Sección donde tomé la imágen de cada estatuilla en la página oficial de la colección.</p>
            <li>Revistas</li>
              <p>Sección donde tomé la imágen de cada revista en la página oficial de la colección.</p>
            <li>Galería</li>
              <p>Sección donde te muestro fotos que yo tomé de los pósters de cada personaje, pósters que vienen en la revista correspondiente al personaje. </p>
          </ul>
        </div>
      </div>
    </div>
  </div>
@endsection