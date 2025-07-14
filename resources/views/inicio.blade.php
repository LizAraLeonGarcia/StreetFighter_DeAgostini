@extends('layouts.app')

@section('content')
  <div class="container-fluid">
    <!-- ------------------------------------------------------- Sección para título ------------------------------------------------------- -->
    <div class="section-title-INICIO">
      <h1>Street Fighter<h1>
      <h2>En esta página te muestro mi colección de Street Fighter: Planeta DeAgostini & Altaya</h2>
      <h4>La saga que marcó el mundo gamer ahora también ha sacado la colección más amplia en cuanto al número de personajes...</h4>
    </div>
    <!-- ------------------------------------------------------ Sección del contenido ------------------------------------------------------ -->
    <div class="inicio" id="inicio">
      <!-- -------------------------------------------------------------------------------------------------------------------- Primera fila -->
      <div class="row mb-4">
        <div class="col-md-4">
          <p>Con un total inicial de 75 entregas esta colección oficial de Capcom vió la luz a finales de septiembre de 2022 en México, empezando su lanzamiento con el protagonista de casi todos los videojuegos de la saga: Ryu, seguido de su inolvidable mejor amigo Ken, para después contar con M. Bison el villano de, también, casi todos los videjuegos de la saga.</p>
          <p>Cabe recalcar que las entregas varían un poco entre países, pues, aunque Ryu siempre ha sido la entrega número 1, en mí país Ken fue la entrega 2 mientras en España fue Chun Li, por lo que, Chun Li en mí país fue la número 7 en llegar, pero en España Ken fue el número tres.</p>
          <p>Debido a lo anterior, y a que las páginas que hay sobre esta colección acomodan a los personajes según el orden en que salieron, yo te aclaro que he acomodado a los personajes cómo a mí me gustan en casi todas las secciones de la página, exceptuando la de <strong>Listado de entregas</strong>; pues ahí te ordeno las entregas en el orden que salen en mi país, además de algunos datos necesarios acompañando a cada personaje.</p>
        </div>
        <div class="col-md-8">
          <img src="assets/img/inicio/personajesPoster.png" class="img-fluid" alt="Poster de los personajes">
        </div>
      </div>
      <!-- -------------------------------------------------------------------------------------------------------------------- Segunda fila -->
      <div class="row mb-4">
        <div class="col-md-6">
          <p>Si tienes curiosidad, puedes checar el vídeo de la colección en el canal oficial de Planeta DeAgostini, es algo breve para mi gusto, pero lo suficientemente llamativo para al menos despertar una espinita de intriga en los amantes y fanáticos de ésta grandiosa saga; asi que, si quieres darle un vistazo, sólo debes dar clic en la imágen que está debajo de este parráfo.</p>
          <a href="https://www.youtube.com/watch?v=eL9vshOQm0Y" class="play-button-container">
            <img src="assets/img/inicio/planetadeagostini.jpg" class="img-fluid" alt="Planeta DeAgostini">
            <i class="fas fa-play"></i>
          </a>
        </div>
        <div class="col-md-6">
          <p>Y si tu curiosidad no se sació con el vídeo oficial, te dejo un vídeo de un YouTuber español pues, en España la colección salió mucho antes, por lo que finalizó en marzo de 2023, además de ser los 75 personajes, también dieron algunas cosas extras que puedes mirar, sólo debes dar clic en la imágen que está debajo de este parráfo.</p>
          <a href="https://www.youtube.com/watch?v=XvIxc1hWeRw" class="play-button-container"> 
            <img src="assets/img/inicio/youtuber.jpg" class="img-fluid" alt="Colección completa youtuber">
            <i class="fas fa-play"></i>
          </a>
        </div>
      </div>
      <!-- -------------------------------------------------------------------------------------------------------------------- Tercera fila -->
      <div class="row mb-4">
        <div class="col-md-7">
          <img src="assets/img/inicio/inicioRyu.jpg" class="img-fluid" alt="Ryu entrega 1">
          <img src="assets/img/inicio/figuras.jpeg" class="img-fluid" alt="Algunas de las figuras">
        </div>
        <div class="col-md-5">
          <p>Ahora te explico qué podrás encontrar en mi página según la sección:</p>
          <ul>
            <li>Inicio</li>
              <p>En donde te encuentras actualmente y donde te doy una breve descripción de esta coleción.</p>
            <li>Listado de entregas</li>
              <p>En donde ordeno las entregas según cómo salieron en México, junto al nombre del personaje, la fecha y su precio de venta al público.</p>
            <li>Personajes</li>
              <p>En donde te muestro fotos que yo tomé de las estatuillas con su revista correspondiente, con un poco de detalles sobre cada personaje.</p>
            <li>Figuras</li>
              <p>En donde tomé la imágen de cada estatuilla en la página oficial de la colección del país España.</p>
            <li>Revistas</li>
              <p>En donde tomé la imágen de cada revista en la página oficial de la colección del país España.</p>
            <li>Galería</li>
              <p>En donde te muestro fotos que yo tomé de los pósters de cada personaje, pósters que vienen en la revista correspondiente al personaje. </p>
          </ul>
          <p>Y, como no esta de más el ser muy especifíca, quiero hacer énfasis en que lo tomado de la página de España obviamente no siempre va a concordar con lo de mi país, por ejemplo; en los números de entrega, pero es la página que ya está completa, pues la de mi país aún sigue en proceso a la fecha en que hago esto (diciembre 2024).</p>
        </div>
      </div>
    </div>
  </div>
@endsection