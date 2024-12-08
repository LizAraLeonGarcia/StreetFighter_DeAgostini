@extends('layouts.app')

@section('content')
  <div class="inicio">
    <div class="section-title-INICIO">
      <h1>Street Fighter<h1>
      <h2>En esta página te muestro mi colección de Street Fighter: Planeta DeAgostini & Altaya</h2>
    </div>
    <div class="container-fluid">
      <div class="row">
        <!-- Primera fila -->
        <div class="col-md-6">
          <h4>La saga que marcó el mundo gamer ahora también ha sacado la colección más amplia en cuanto al número de personajes...</h4>
          <p>Con un total inicial de 60 entregas, más una posible expansión a 15 figuras extras como se hizo en España y Brasil, esta nueva colección oficial de Capcom vió la luz a finales de septiembre de 2022 en mi país México, empezando su lanzamiento con el protagonista de casi todos los videojuegos de la saga: Ryu, seguido de su inolvidable mejor amigo Ken.</p>
          <p>Cabe recalcar que las entregas varían un poco entre países, pues, aunque en mí país Ken fue la entrega 2, en España en realidad fue Chun Li, a la inversa, Chun Li en mí país fue la número 7 en llegar, mientras que en España Ken fue el número tres.</p>
          <p>Debido a lo explicado en el parráfo anterior, y a que en sí, todas las páginas que hay sobre esta colección acomodan a los personajes según el orden en que salieron en su país de destino, yo te quiero aclarar que para hacer algo diferente y dejando mi huella, he acomodado a los personajes cómo a mí me gustan, los cuales verás organizados unas tablas que se encuentran casi para finalizar la sección junto con información relevante.</p>
        </div>
        <div class="col-md-6">
          <img src="assets/img/inicio/personajesPoster.png" class="img-fluid" alt="Poster de los personajes">
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <p>Si tienes curiosidad, puedes checar el vídeo de la colección en el canal oficial de Planeta DeAgostini, sólo debes dar clic en el botón que está debajo de este parráfo.</p>
          <a href="https://www.youtube.com/watch?v=eL9vshOQm0Y">
            <i></i><span>Ver vídeo</span>
          </a>
        </div>
        <div class="col-md-6">
          <p>Aunque si tu curiosidad no se sació con el vídeo oficial, te dejo otro vídeo de la colección, pero de un YouTuber español pues, en España la colección ya terminó y, además de ser los 75 personajes, también dieron extras que puedes mirar, como 4 figuras de ciertos personajes, una playera, una gorra, una taza, pósters; sólo debes dar clic en el botón que está debajo de este parráfo.</p>
          <a href="https://www.youtube.com/watch?v=XvIxc1hWeRw">
            <i></i><span>Ver vídeo</span>
          </a>
        </div>
      </div>
      <div class="row">
        <!-- Tercera fila -->
        <div class="col-md-6">
          <img src="assets/img/inicio/inicioRyu.jpg" class="img-fluid" alt="Ryu entrega 1">
        </div>
        <div class="col-md-6">
          <p>No obstante, antes de mostrarte dichas tablas, te explico qué podrás encontrar en mi página según la sección que escojas:</p>
          <ul>
            <li>Inicio</li>
              <p>Sección en la que te encuentras actualmente y en donde doy una breve descripción de esta coleción así como tablas con los personajes donde, lo más relevante son: su nombre, el número de entrega que fueron, la fecha en que salieron, su precio de venta al público</p>
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
      <!--  -->
      <div class="row">
        <div class="col-7">
          <table class="table table-striped table-bordered mt-4">
            <!-- TABLA -->
            <thead>
              <tr>
                <th></th>
                <th>Nombre del personaje</th>
                <th># de entrega</th>
                <th>Fecha de lanzamiento</th>
                <th>Precio de venta al público</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1.-</td>
                <td>Chun Li</td>
                <td>7</td>
                <td>19 diciembre 2022</td>
                <td>$300</td>
              </tr>
              <tr>
                <td>3.-</td>
                <td>Poison</td>
                <td>29</td>
                <td>2 enero 2024</td>
                <td>$360</td>
              </tr>
              <tr>
                <td>4.-</td>
                <td>Rainbow Mika</td>
                <td>22</td>
                <td>23 agosto 2023</td>
                <td>$360</td>
              </tr>
              <tr>
                <td>6.-</td>
                <td>Juri</td>
                <td>39</td>
                <td>octubre 2024</td>
                <td>$390</td>
              </tr>
              <tr>
                <td>7.-</td>
                <td>Rose</td>
                <td>20</td>
                <td>12 junio 2023</td>
                <td>$330</td>
              </tr>
              <tr>
                <td>8.-</td>
                <td>Ibuki</td>
                <td>25</td>
                <td>6 septiembre 2023</td>
                <td>$360</td>
              </tr>
              <tr>
                <td>10.-</td>
                <td>Crimson Viper</td>
                <td>27</td>
                <td>20 septiembre 2023</td>
                <td>$360</td>
              </tr>
              <tr>
                <td>11.-</td>
                <td>Karin</td>
                <td>33</td>
                <td>19 marzo 2024</td>
                <td>$360</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection