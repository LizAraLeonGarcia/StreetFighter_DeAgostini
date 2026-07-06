@extends('layouts.app')

@section('content')
  <div class="container-fluid">
    <!-- ------------------------------------------------------- Sección para título ------------------------------------------------------- -->
    <div class="section-title">
      <h3>Explora a los personajes de la colección</h3>
    </div>
    <!-- ------------------------------------------------------ Sección del contenido ------------------------------------------------------ -->
    <div class="personajes">
      <div class="row">
          <button class="hamburger" id="hamburgerBtn">☰</button>
        <!-- ------------------------------------------------------------------------------------------------------- Lista columna izquierda -->
        <div class="col-md-6">
          <!-- contendor para paginación --------------------------------------------------------------------------------------------------- -->
          <ol id="customPagination">
            <li class="active" aria-current="true" data-bs-target="#characterCarousel" data-bs-slide-to="0">Chun Li (#7)</li>
            <li data-bs-target="#characterCarousel" data-bs-slide-to="1">Akira (#72)</li>
            <li data-bs-target="#characterCarousel" data-bs-slide-to="2">Poison (#29)</li>
            <li data-bs-target="#characterCarousel" data-bs-slide-to="3">R. Mika (#22)</li>
            <li data-bs-target="#characterCarousel" data-bs-slide-to="4">Menat (#61)</li>
            <li data-bs-target="#characterCarousel" data-bs-slide-to="5">Rose (#20)</li>
            <li data-bs-target="#characterCarousel" data-bs-slide-to="6">Ibuki (#25)</li>
            <li data-bs-target="#characterCarousel" data-bs-slide-to="7">Falke (#62)</li>
            <li data-bs-target="#characterCarousel" data-bs-slide-to="8">C. Viper(#27)</li>
            <li data-bs-target="#characterCarousel" data-bs-slide-to="9">Juri (#39)</li>

            <li data-bs-target="#characterCarousel" data-bs-slide-to="10">Vega (#6)</li>
            <li data-bs-target="#characterCarousel" data-bs-slide-to="11">Ryu (#1)</li>
            <li data-bs-target="#characterCarousel" data-bs-slide-to="12">Charlie Nash (#37)</li>
            <li data-bs-target="#characterCarousel" data-bs-slide-to="13">Rashid (#56)</li>
            <li data-bs-target="#characterCarousel" data-bs-slide-to="14">Cody (#24)</li>
            <li data-bs-target="#characterCarousel" data-bs-slide-to="15">Kage (#69)</li>
            <li data-bs-target="#characterCarousel" data-bs-slide-to="16">Sagat (#4)</li>
            <li data-bs-target="#characterCarousel" data-bs-slide-to="17">Oni (#32)</li>
            <li data-bs-target="#characterCarousel" data-bs-slide-to="18">Guy (#45)</li>
            <li data-bs-target="#characterCarousel" data-bs-slide-to="19">Dudley (#30)</li>
            <li data-bs-target="#characterCarousel" data-bs-slide-to="20">Luke (#75)</li>
            <li data-bs-target="#characterCarousel" data-bs-slide-to="21">Ken (#2)</li>
            <li data-bs-target="#characterCarousel" data-bs-slide-to="22">Zeku (#67)</li>
            <li data-bs-target="#characterCarousel" data-bs-slide-to="23">Remy (#64)</li>
            <li data-bs-target="#characterCarousel" data-bs-slide-to="24">Blanka (#5)</li>
            <li data-bs-target="#characterCarousel" data-bs-slide-to="25">Gill (#57)</li>
            <li data-bs-target="#characterCarousel" data-bs-slide-to="26">M. Bison (#3)</li>
            <li data-bs-target="#characterCarousel" data-bs-slide-to="27">Ed (#66)</li>
            <li data-bs-target="#characterCarousel" data-bs-slide-to="28">Adon (#19)</li>
            <li data-bs-target="#characterCarousel" data-bs-slide-to="29">Alex (#52)</li>
            <li data-bs-target="#characterCarousel" data-bs-slide-to="30">Akuma (#16)</li>
            <li data-bs-target="#characterCarousel" data-bs-slide-to="31">Urien (#48)</li>
            <li data-bs-target="#characterCarousel" data-bs-slide-to="32">Necalli (#59)</li>
            <li data-bs-target="#characterCarousel" data-bs-slide-to="33">G (#63)</li>

            <li data-bs-target="#characterCarousel" data-bs-slide-to="34">E. Honda (#12)</li>
            <li data-bs-target="#characterCarousel" data-bs-slide-to="35">Dhalsim (#9)</li>
            <li data-bs-target="#characterCarousel" data-bs-slide-to="36">Dee Jay (#18)</li>
            <li data-bs-target="#characterCarousel" data-bs-slide-to="37">Guile (#8)</li>
            <li data-bs-target="#characterCarousel" data-bs-slide-to="38">Cammy (#14)</li>
            <li data-bs-target="#characterCarousel" data-bs-slide-to="39">Elena (#36)</li>
            <li data-bs-target="#characterCarousel" data-bs-slide-to="40">Abigail (#70)</li>
            <li data-bs-target="#characterCarousel" data-bs-slide-to="41">Hugo (#44)</li>

            <li data-bs-target="#characterCarousel" data-bs-slide-to="42">El Fuerte (#42)</li>
            <li data-bs-target="#characterCarousel" data-bs-slide-to="43">T. Hawk (#13)</li>
            <li data-bs-target="#characterCarousel" data-bs-slide-to="44">Gen (#26)</li>
            <li data-bs-target="#characterCarousel" data-bs-slide-to="45">Gouken (#28)</li>
            <li data-bs-target="#characterCarousel" data-bs-slide-to="46">Karin (#33)</li>
            <li data-bs-target="#characterCarousel" data-bs-slide-to="47">Makoto (#23)</li>
            <li data-bs-target="#characterCarousel" data-bs-slide-to="48">Zangief (#10)</li>
            <li data-bs-target="#characterCarousel" data-bs-slide-to="49">Hakan (#41)</li>
            <li data-bs-target="#characterCarousel" data-bs-slide-to="50">Rolento (#40)</li>
            <li data-bs-target="#characterCarousel" data-bs-slide-to="51">Sodom (#71)</li>
            <li data-bs-target="#characterCarousel" data-bs-slide-to="52">Fei Long (#15)</li>
            <li data-bs-target="#characterCarousel" data-bs-slide-to="53">Rufus (#47)</li>
            <li data-bs-target="#characterCarousel" data-bs-slide-to="54">Balrog (#11)</li>
            <li data-bs-target="#characterCarousel" data-bs-slide-to="55">Birdie (#58)</li>
            <li data-bs-target="#characterCarousel" data-bs-slide-to="56">Dan (#21)</li>
            <li data-bs-target="#characterCarousel" data-bs-slide-to="57">Sakura (#17)</li>
            <li data-bs-target="#characterCarousel" data-bs-slide-to="58">Yang (#35)</li>
            <li data-bs-target="#characterCarousel" data-bs-slide-to="59">Yun (#35)</li>
            <li data-bs-target="#characterCarousel" data-bs-slide-to="60">Sean (#49)</li>
            <li data-bs-target="#characterCarousel" data-bs-slide-to="61">Laura (#50)</li>
            <li data-bs-target="#characterCarousel" data-bs-slide-to="62">Kolin (#55)</li>
            <li data-bs-target="#characterCarousel" data-bs-slide-to="63">Lucia (#68)</li>
            <li data-bs-target="#characterCarousel" data-bs-slide-to="64">Decapre (#43)</li>
            <li data-bs-target="#characterCarousel" data-bs-slide-to="65">Q (#54)</li>
            <li data-bs-target="#characterCarousel" data-bs-slide-to="66">F.A.N.G (#60)</li>
            <li data-bs-target="#characterCarousel" data-bs-slide-to="67">Oro (#51)</li>
            <li data-bs-target="#characterCarousel" data-bs-slide-to="68">Abel (#39)</li>
            <li data-bs-target="#characterCarousel" data-bs-slide-to="69">Seth (#46)</li>
            <li data-bs-target="#characterCarousel" data-bs-slide-to="70">Twelve (#65)</li>
            <li data-bs-target="#characterCarousel" data-bs-slide-to="71">Necro (#53)</li>
            <li data-bs-target="#characterCarousel" data-bs-slide-to="72">Juni (#73)</li>
            <li data-bs-target="#characterCarousel" data-bs-slide-to="73">Juli (#74)</li>
            <li data-bs-target="#characterCarousel" data-bs-slide-to="74">Evil Ryu (#31)</li>
          </ol>
        </div> <!-- contenedor de la lista / paginación -->
        <!-- ----------------------------------------------------------------------------------------------------------- Columna de carrusel -->        
        <div class="col-md-6">
          <div id="characterCarousel" class="carousel slide" data-bs-interval="false">
            <div class="carousel-inner">
              <!-- favoritas --------------------------------------------------------------------------------------------------------------- -->
              <div class="carousel-item active"> <!-- ------------------------------------------------------------------------------ CHUN LI -->
                <div class="character-item">
                  <h4>Chun Li</h4>
                  <a href="assets/img/personajes/1.jpg"> <img src="assets/img/personajes/1.jpg" alt="Chun Li"> </a>
                  <p class="description">Creadora de su propio estilo de lucha, la bella y decidida Chun-Li es una pieza fundamental para acabar con la organización criminal Shadaloo. Siguiendo los pasos de su desaparecido padre, no descansará hasta acabar con M. Bison y todo lo que representa.</p>
                </div>
              </div>
              <div class="carousel-item"> <!-- --------------------------------------------------------------------------------------- AKIRA -->
                <div class="character-item">
                  <h4>Akira</h4>
                  <a href="assets/img/personajes/2.jpg"> <img src="assets/img/personajes/2.jpg" alt="Akira"> </a>
                  <p class="description">Akira Kazama es una joven a quien le apasionan especialmente dos cosas: las motocicletas y las artes marciales. Ambas pasiones le sirven para enfrentarse a los peligros más insospechados en su ajetreada vida de estudiante.</p>
                </div>
              </div>
              <div class="carousel-item"> <!-- -------------------------------------------------------------------------------------- POISON -->
                <div class="character-item">
                  <h4>Poison</h4>
                  <a href="assets/img/personajes/3.jpg"> <img src="assets/img/personajes/3.jpg" alt="Poison"> </a>
                  <p class="description">Tras sus desventuras como destacada miembro de la banda criminal Mad Gear, Poison decidió reconstruir su vida como mánager en el circuito de lucha libre profesional, donde cosechó un éxito indiscutible.</p>
                </div>
              </div>
              <div class="carousel-item"> <!-- -------------------------------------------------------------------------------- RAINBOW MIKA -->
                <div class="character-item">
                  <h4>Rainbow Mika</h4>
                  <a href="assets/img/personajes/4.jpg"> <img src="assets/img/personajes/4.jpg" alt="Rainbow Mika"> </a>
                  <p class="description">Rainbow Mika es una voluptuosa luchadora de indudable talento que busca crearse un nombre en el circuito de la lucha libre profesional. Su riguroso entrenamiento le permite medirse de igual a igual frente a auténticos colosos del wrestling.</p>
                </div>
              </div>
              <div class="carousel-item"> <!-- --------------------------------------------------------------------------------------- MENAT -->
                <div class="character-item">
                  <h4>Menat</h4>
                  <a href="assets/img/personajes/5.jpg"> <img src="assets/img/personajes/5.jpg" alt="Menat"> </a>
                  <p class="description">Menat es una joven egipcia capaz de controlar y manipular la energía espiritual conocida como Soul Power, que también le brinda poderes de adivinación. Rose, la principal experta en esta clase de poder, es su maestra desde hace un tiempo.</p>
                </div>
              </div>
              <div class="carousel-item"> <!-- ---------------------------------------------------------------------------------------- ROSE -->
                <div class="character-item">
                  <h4>Rose</h4>
                  <a href="assets/img/personajes/6.jpg"> <img src="assets/img/personajes/6.jpg" alt="Rose"> </a>
                  <p class="description">M. Bison, el cruel líder de la organización criminal internacional Shadaloo, teme solo una cosa: a Rose, una mística adivina italiana con quien mantiene un extraño vínculo, y quizá la única persona que conoce el secreto de su oscuro pasado.</p>
                </div>
              </div>
              <div class="carousel-item"> <!-- --------------------------------------------------------------------------------------- IBUKI -->
                <div class="character-item">
                  <h4>Ibuki</h4>
                  <a href="assets/img/personajes/7.jpg"> <img src="assets/img/personajes/7.jpg" alt="Ibuki"> </a>
                  <p class="description">Ibuki fue entrenada desde su infancia en las artes del ninjutsu, criándose en una aldea en lo más profundo de las montañas japonesas. Cansada del aislamiento, lo que más deseaba la joven era conocer el mundo que la rodeaba.</p>
                </div>
              </div>
              <div class="carousel-item"> <!-- --------------------------------------------------------------------------------------- FALKE -->
                <div class="character-item">
                  <h4>Falke</h4>
                  <a href="assets/img/personajes/8.jpg"> <img src="assets/img/personajes/8.jpg" alt="Falke"> </a>
                  <p class="description">Falke estaba condenada a convertirse en uno de los cuerpos de reemplazo que M. Bison, líder de la organización criminal Shadaloo, guardaba a buen recaudo en sus laboratorios. Afortunadamente, la joven escapó a ese horrible destino.</p>
                </div>
              </div>
              <div class="carousel-item"> <!-- ------------------------------------------------------------------------------- CRIMSON VIPER -->
                <div class="character-item">
                  <h4>Crimson Viper</h4>
                  <a href="assets/img/personajes/9.jpg"> <img src="assets/img/personajes/9.jpg" alt="Crimson Viper"> </a>
                  <p class="description">Crimson Viper es una combatiente al servicio de la organización criminal S.I.N. cuyo principal cometido es poner a prueba avanzados prototipos armamentísticos en enfrentamientos reales. Pocos saben que también es una agente infiltrada de la CIA.</p>
                </div>
              </div>
              <div class="carousel-item"> <!-- ---------------------------------------------------------------------------------------- JURI -->
                <div class="character-item">
                  <h4>Juri</h4>
                  <a href="assets/img/personajes/10.jpg"> <img src="assets/img/personajes/10.jpg" alt="Juri"> </a>
                  <p class="description">Consumida por el odio y la venganza, Juri Han posee una personalidad tremendamente inestable, pero también una férrea determinación que la empuja a darlo todo por una única meta: la destrucción de M. Bison y todo lo que representa.</p>
                </div>
              </div>
              <!-- favoritos --------------------------------------------------------------------------------------------------------------- -->
              <div class="carousel-item"> <!-- ---------------------------------------------------------------------------------------- VEGA -->
                <div class="character-item">
                  <h4>Vega</h4>
                  <a href="assets/img/personajes/11.jpg"> <img src="assets/img/personajes/11.jpg" alt="Vega"> </a>
                  <p class="description">A Vega no le costó ningún esfuerzo ascender en el escalafón de Shadaloo hasta convertirse en uno de los Cuatro Reyes que lideran la organización criminal. Su habilidad para el asesinato y su falta de escrúpulos le garantizaron el éxito.</p>
                </div>
              </div>
              <div class="carousel-item"> <!-- ----------------------------------------------------------------------------------------- RYU -->
                <div class="character-item">
                  <h4>Ryu</h4>
                  <a href="assets/img/personajes/12.jpg"> <img src="assets/img/personajes/12.jpg" alt="Ryu"> </a>
                  <p class="description">Ryu busca su superación personal por encima de todo. Sufre la maldición de tener en su interior una poderosa energía oscura que debe contener en todo momento: el Satsui no Hado.</p>
                </div>
              </div>
              <div class="carousel-item"> <!-- -------------------------------------------------------------------------------- CHARLIE NASH -->
                <div class="character-item">
                  <h4>Charlie</h4>
                  <a href="assets/img/personajes/13.jpg"> <img src="assets/img/personajes/13.jpg" alt="Charlie Nash"> </a>
                  <p class="description">Charlie Nash era un soldado destacado de las fuerzas aéreas norteamericanas con un sentido de la justicia inquebrantable. Luchó contra la corrupción en el ejército, luchó contra Shadaloo, e incluso después de muerto, regresó para luchar una vez más.</p>
                </div>
              </div>
              <div class="carousel-item"> <!-- -------------------------------------------------------------------------------------- RASHID -->
                <div class="character-item">
                  <h4>Rashid</h4>
                  <a href="assets/img/personajes/14.jpg"> <img src="assets/img/personajes/14.jpg" alt="Rashid"> </a>
                  <p class="description">Rashid proviene de una familia aristocrática de Oriente Medio, y le encanta estar al tanto de los avances tecnológicos. Es un usuario devoto de redes sociales y también un viajero dedicado que recorre el mundo junto a Azam, su sirviente fiel.</p>
                </div>
              </div>
              <div class="carousel-item"> <!-- ---------------------------------------------------------------------------------------- CODY -->
                <div class="character-item">
                  <h4>Cody</h4>
                  <a href="assets/img/personajes/15.jpg"> <img src="assets/img/personajes/15.jpg" alt="Cody"> </a>
                  <p class="description">Cody Travers se curtió en las duras calles de Metro City, y con el tiempo se convirtió en un importante aliado del alcalde de la ciudad. Su vida ha sido de todo menos estable, pero nunca ha dejado de luchar contra el crimen.</p>
                </div>
              </div>
              <div class="carousel-item"> <!-- ---------------------------------------------------------------------------------------- KAGE -->
                <div class="character-item">
                  <h4>Kage</h4>
                  <a href="assets/img/personajes/16.jpg"> <img src="assets/img/personajes/16.jpg" alt="Kage"> </a>
                  <p class="description">Tras muchos años luchando contra el mal que anidaba en su interior, Ryu estaba al fin listo para purgarlo de su alma. Pero ¿puede desaparecer realmente una fuerza tan misteriosa, maligna y poderosa como el Satsui no Hado? </p>
                </div>
              </div>
              <div class="carousel-item"> <!-- --------------------------------------------------------------------------------------- SAGAT -->
                <div class="character-item">
                  <h4>Sagat</h4>
                  <a href="assets/img/personajes/17.jpg"> <img src="assets/img/personajes/17.jpg" alt="Sagat"> </a>
                  <p class="description">Considerado un héroe nacional en su país, las ansias de venganza de Sagat lo empujaron a convertirse en uno de los líderes de la organización criminal internacional Shadaloo. Solo el tiempo le hizo ser consciente del error de esta decisión.</p>
                </div>
              </div>
              <div class="carousel-item"> <!-- ----------------------------------------------------------------------------------------- ONI -->
                <div class="character-item">
                  <h4>Oni</h4>
                  <a href="assets/img/personajes/18.jpg"> <img src="assets/img/personajes/18.jpg" alt="Oni"> </a>
                  <p class="description">Akuma llevaba décadas poseído por el Satsui no Hado, una misteriosa energía oscura que le otorgaba un enorme poder, pero también corrompía su alma y anulaba su voluntad. Un fatídico día, el hombre desapareció y ya solo quedó el demonio.</p>
                </div>
              </div>
              <div class="carousel-item"> <!-- ----------------------------------------------------------------------------------------- GUY -->
                <div class="character-item">
                  <h4>Guy</h4>
                  <a href="assets/img/personajes/19.jpg"> <img src="assets/img/personajes/19.jpg" alt="Guy"> </a>
                  <p class="description">Guy ha dedicado buena parte de su vida a perfeccionar sus técnicas ninjutsu con el objetivo de convertirse en el 39.º heredero del arte marcial Bushin?ryu. Su sentido de la justicia le lleva a combatir el mal en todas sus formas.</p>
                </div>
              </div>
              <div class="carousel-item"> <!-- -------------------------------------------------------------------------------------- DUDLEY -->
                <div class="character-item">
                  <h4>Dudley</h4>
                  <a href="assets/img/personajes/20.jpg"> <img src="assets/img/personajes/20.jpg" alt="Dudley"> </a>
                  <p class="description">Dudley es un británico de los pies a la cabeza, amante de las reglas y férreo defensor del boxeo como el más noble de los deportes de contacto. Busca en todo momento el honor y devolver a su familia la gloria que un día tuvo.</p>
                </div>
              </div>
              <div class="carousel-item"> <!-- ---------------------------------------------------------------------------------------- LUKE -->
                <div class="character-item">
                  <h4>Luke</h4>
                  <a href="assets/img/personajes/21.jpg"> <img src="assets/img/personajes/21.jpg" alt="Luke"> </a>
                  <p class="description">Experto en artes marciales mixtas y con un gran sentido de la justicia, Luke aún no tiene claro qué camino quiere tomar en su vida, y espera encontrar la respuesta mientras desafía a los mejores luchadores del mundo.</p>
                </div>
              </div>
              <div class="carousel-item"> <!-- ----------------------------------------------------------------------------------------- KEN -->
                <div class="character-item">
                  <h4>Ken</h4>
                  <a href="assets/img/personajes/22.jpg"> <img src="assets/img/personajes/22.jpg" alt="Ken"> </a>
                  <p class="description">Afligido por haber perdido a su madre cuando aún era un niño, Ken logró superar su pena gracias a las artes marciales, convirtiéndose finalmente en un esmerado padre de familia y en el mejor luchador de todo Estados Unidos.</p>
                </div>
              </div>
              <div class="carousel-item"> <!-- ---------------------------------------------------------------------------------------- ZEKU -->
                <div class="character-item">
                  <h4>Zeku</h4>
                  <a href="assets/img/personajes/23.jpg"> <img src="assets/img/personajes/23.jpg" alt="Zeku"> </a>
                  <p class="description">Zeku era el líder número 38 del clan de ninjas Bushinryu, hasta que su pupilo, Guy, le sucedió en el cargo. Entonces decidió comenzar un viaje de redescubrimiento personal que le llevó a encontrar un nuevo propósito vital.</p>
                </div>
              </div>
              <div class="carousel-item"> <!-- ---------------------------------------------------------------------------------------- REMY -->
                <div class="character-item">
                  <h4>Remy</h4>
                  <a href="assets/img/personajes/24.jpg"> <img src="assets/img/personajes/24.jpg" alt="Remy"> </a>
                  <p class="description">Remy es un joven luchador de gran talento que, paradójicamente, odia tanto luchar como a quienes practican cualquier clase de arte marcial. Ha perdido todo lo que tiene en la vida, y solo le queda el ansia de venganza.</p>
                </div>
              </div>
              <div class="carousel-item"> <!-- -------------------------------------------------------------------------------------- BLANKA -->
                <div class="character-item">
                  <h4>Blanka</h4>
                  <a href="assets/img/personajes/25.jpg"> <img src="assets/img/personajes/25.jpg" alt="Blanka"> </a>
                  <p class="description">Aunque su aspecto animal sugiera lo contrario, el luchador conocido como Blanka nunca ha perdido su personalidad humana. Su estilo de lucha, salvaje y caótico, le convierte en uno de los más reputados street fighters de todo el mundo.</p>
                </div>
              </div> 
              <div class="carousel-item"> <!-- ---------------------------------------------------------------------------------------- GILL -->
                <div class="character-item">
                  <h4>Gill</h4>
                  <a href="assets/img/personajes/26.jpg"> <img src="assets/img/personajes/26.jpg" alt="Gill"> </a>
                  <p class="description">Gill es posiblemente el ser más poderoso de todo el planeta. Se considera a sí mismo un mesías destinado a guiar a la humanidad hacia una nueva era, y usa los recursos inextinguibles de la Sociedad Secreta que lidera para conseguirlo.</p>
                </div>
              </div>
              <div class="carousel-item"> <!-- ------------------------------------------------------------------------------------- M BISON -->
                <div class="character-item">
                  <h4>M. Bison</h4>
                  <a href="assets/img/personajes/27.jpg"> <img src="assets/img/personajes/27.jpg" alt="M. Bison"> </a>
                  <p class="description">Tras haber superado las limitaciones de su cuerpo físico, M. Bison anhela obtener el poder definitivo sobre todas las cosas, para lo que no duda en levantar un entramado criminal internacional sin precedentes: Shadaloo.</p>
                </div>
              </div>
              <div class="carousel-item"> <!-- ------------------------------------------------------------------------------------------ ED -->
                <div class="character-item">
                  <h4>Ed</h4>
                  <a href="assets/img/personajes/28.jpg"> <img src="assets/img/personajes/28.jpg" alt="Ed"> </a>
                  <p class="description">Ed es un luchador que ha sufrido numerosas vicisitudes en su corta vida, y todavía le atormentan pesadillas recurrentes. Sin embargo, su capacidad de enfrentarse a las adversidades le permite superar cualquier obstáculo.</p>
                </div>
              </div>
              <div class="carousel-item"> <!-- ---------------------------------------------------------------------------------------- ADON -->
                <div class="character-item">
                  <h4>Adon</h4>
                  <a href="assets/img/personajes/29.jpg"> <img src="assets/img/personajes/29.jpg" alt="Adon"> </a>
                  <p class="description">Movido por la ambición de gloria y un afán de superación personal que muchos podrían tachar de obsesivo, Adon está dispuesto a todo con tal de alcanzar el estatus de leyenda nacional como el mejor luchador de muay thai de todos los tiempos.</p>
                </div>
              </div>
              <div class="carousel-item"> <!-- ---------------------------------------------------------------------------------------- ALEX -->
                <div class="character-item">
                  <h4>Alex</h4>
                  <a href="assets/img/personajes/30.jpg"> <img src="assets/img/personajes/30.jpg" alt="Alex"> </a>
                  <p class="description">Alex es un joven de pocas palabras y algo introvertido, de carácter brusco y en muchas ocasiones modos exagerados. Sin embargo, en realidad tiene un gran sentido de la justicia y es amable con quienes realmente lo merecen.</p>
                </div>
              </div>
              <div class="carousel-item"> <!-- --------------------------------------------------------------------------------------- AKUMA -->
                <div class="character-item">
                  <h4>Akuma</h4>
                  <a href="assets/img/personajes/31.jpg"> <img src="assets/img/personajes/31.jpg" alt="Akuma"> </a>
                  <p class="description">En su juventud, fue un luchador de enorme talento y con un más que prometedor potencial. Pero una insaciable búsqueda de conocimientos y poder le llevó a superar límites prohibidos. Ahora es más ogro que humano, más demonio que hombre.</p>
                </div>
              </div>
              <div class="carousel-item"> <!-- --------------------------------------------------------------------------------------- URIEN -->
                <div class="character-item">
                  <h4>Urien</h4>
                  <a href="assets/img/personajes/32.jpg"> <img src="assets/img/personajes/32.jpg" alt="Urien"> </a>
                  <p class="description">Urien y su hermano Gill fueron elegidos como candidatos para liderar la organización más antigua del planeta, cuya influencia en el orden mundial y el devenir de la humanidad se remonta a tiempos inmemoriables.</p>
                </div>
              </div>
              <div class="carousel-item"> <!-- ------------------------------------------------------------------------------------- NECALLI -->
                <div class="character-item">
                  <h4>Necalli</h4>
                  <a href="assets/img/personajes/33.jpg"> <img src="assets/img/personajes/33.jpg" alt="Necalli"> </a>
                  <p class="description">Este poderoso ser, constantemente rodeado de una sustancia tóxica, se manifiesta para devorar las almas de los guerreros más poderosos en tiempos de crisis.</p>
                </div>
              </div>
              <div class="carousel-item"> <!-- ------------------------------------------------------------------------------------------- G -->
                <div class="character-item">
                  <h4>G</h4>
                  <a href="assets/img/personajes/34.jpg"> <img src="assets/img/personajes/34.jpg" alt="G"> </a>
                  <p class="description">Durante la época en que la organización criminal Shadaloo desencadenó la Crisis de las Lunas Negras, un extraño personaje del que nadie sabía nada apareció y se autoproclamó nada menos que presidente del mundo.</p>
                </div>
              </div>
              <!-- familia XD -------------------------------------------------------------------------------------------------------------- -->
              <div class="carousel-item"> <!-- ------------------------------------------------------------------------------------- E HONDA -->
                <div class="character-item">
                  <h4>E. Honda</h4>
                  <a href="assets/img/personajes/35.jpg"> <img src="assets/img/personajes/35.jpg" alt="E. Honda"> </a>
                  <p class="description">Edmond Honda ha dedicado toda su vida al sumo, una disciplina que en Japón es, más que un deporte o un arte marcial, toda una institución nacional. Elogiado y alabado en su país, Honda busca ahora nuevos desafíos.</p>
                </div>
              </div>
              <div class="carousel-item"> <!-- ------------------------------------------------------------------------------------- DHALSIM -->
                <div class="character-item">
                  <h4>Dhalsim</h4>
                  <a href="assets/img/personajes/36.jpg"> <img src="assets/img/personajes/36.jpg" alt="Dhalsim"> </a>
                  <p class="description">A pesar de no ser experto en artes marciales ni poseer una constitución fuerte y atlética preparada para la lucha, Dhalsim es uno de los combatientes más respetados por las increíbles habilidades de las que hace gala.</p>
                </div>
              </div>
              <div class="carousel-item"> <!-- ------------------------------------------------------------------------------------- DEE JAY -->
                <div class="character-item">
                  <h4>Dee Jay</h4>
                  <a href="assets/img/personajes/37.jpg"> <img src="assets/img/personajes/37.jpg" alt="Dee Jay"> </a>
                  <p class="description">Dee Jay es un jamaicano experto en kickboxing, cuya vida suele girar entorno a su pasión por la música. De hecho, para él la lucha es un medio que le permite encontrar la inspiración necesaria para dar vida a sus composiciones.</p>
                </div>
              </div>
              <div class="carousel-item"> <!-- --------------------------------------------------------------------------------------- GUILE -->
                <div class="character-item">
                  <h4>Guile</h4>
                  <a href="assets/img/personajes/38.jpg"> <img src="assets/img/personajes/38.jpg" alt="Guile"> </a>
                  <p class="description">Uno de los miembros más destacados de las fuerzas aéreas estadounidenses, Guile, ha seguido el rastro de la organización criminal Shadaloo durante años, y no parará hasta desmantelarla por completo y acabar con su temido líder, M. Bison.</p>
                </div>
              </div>
              <div class="carousel-item"> <!-- --------------------------------------------------------------------------------------- CAMMY -->
                <div class="character-item">
                  <h4>Cammy</h4>
                  <a href="assets/img/personajes/39.jpg"> <img src="assets/img/personajes/39.jpg" alt="Cammy"> </a>
                  <p class="description">Cammy sirvió a Shadaloo durante años, contra su voluntad e incluso sin ser consciente de ello. Finalmente se libró de la oscura influencia de M. Bison, y ahora está decidida a acabar con la organización criminal a cualquier precio.</p>
                </div>
              </div>
              <div class="carousel-item"> <!-- --------------------------------------------------------------------------------------- ELENA -->
                <div class="character-item">
                  <h4>Elena</h4>
                  <a href="assets/img/personajes/40.jpg"> <img src="assets/img/personajes/40.jpg" alt="Elena"> </a>
                  <p class="description">Elena vivía una apacible existencia en Kenia. Como hija del líder de la región tenía un gran sentido de la responsabilidad, era aplicada en sus estudios y una practicante de capoeira muy hábil.</p>
                </div>
              </div>
              <div class="carousel-item"> <!-- ------------------------------------------------------------------------------------- ABIGAIL -->
                <div class="character-item">
                  <h4>Abigail</h4>
                  <a href="assets/img/personajes/41.jpg"> <img src="assets/img/personajes/41.jpg" alt="Abigail"> </a>
                  <p class="description">Tras una vida delictiva, Abigail decidió establecer un negocio legal. A pesar del cambio de rumbo en su vida, su pasado criminal, un feroz temperamento y una inteligencia limitada le siguen jugando alguna que otra mala pasada.</p>
                </div>
              </div>
              <div class="carousel-item"> <!-- ---------------------------------------------------------------------------------------- HUGO -->
                <div class="character-item">
                  <h4>Hugo</h4>
                  <a href="assets/img/personajes/42.jpg"> <img src="assets/img/personajes/42.jpg" alt="Hugo"> </a>
                  <p class="description">Hugo Andore es un luchador profesional de fuerza sobrenatural pero escaso intelecto. Su incapacidad para tomar decisiones le llevó a delinquir en el pasado, aunque logró reformarse y convertirse tras ello se en un wrestler de éxito.</p>
                </div>
              </div>
              <!-- ------------------------------------------------------ los demás XD ------------------------------------------------------ -->
              <div class="carousel-item"> <!-- ----------------------------------------------------------------------------------- EL FUERTE -->
                <div class="character-item">
                  <h4>El Fuerte</h4>
                  <a href="assets/img/personajes/43.jpg"> <img src="assets/img/personajes/43.jpg" alt="El Fuerte"> </a>
                  <p class="description">El Fuerte es un mexicano especialista en lucha libre, además de un aplicado cocinero. Eso sí, aunque en el ring se ha convertido en un luchador de renombre, en la cocina no ha cosechado tanto éxito, aunque él lo ve de otra manera.</p>
                </div>
              </div>
              <div class="carousel-item"> <!-- -------------------------------------------------------------------------------- THUNDER HAWK -->
                <div class="character-item">
                  <h4>T. Hawk</h4>
                  <a href="assets/img/personajes/44.jpg"> <img src="assets/img/personajes/44.jpg" alt="T. Hawk"> </a>
                  <p class="description">Thunder Hawk vivía una apacible existencia en las tierras ancestrales de su clan, hasta que Shadaloo decidió establecer allí una de sus bases principales y todo cambió tanto para él como para su pueblo. Ahora solo le queda luchar.</p>
                </div>
              </div>
              <div class="carousel-item"> <!-- ----------------------------------------------------------------------------------------- GEN -->
                <div class="character-item">
                  <h4>Gen</h4>
                  <a href="assets/img/personajes/45.jpg"> <img src="assets/img/personajes/45.jpg" alt="Gen"> </a>
                  <p class="description">La avanzada edad de Gen hace que muchos rivales le tomen por una presa fácil. Pero el anciano no ha perdido ni un ápice de la velocidad ni de la mortífera eficacia de su juventud, y todavía es capaz de tumbar a cualquiera en apenas unos segundos.</p>
                </div>
              </div>
              <div class="carousel-item"> <!-- -------------------------------------------------------------------------------------- GOUKEN -->
                <div class="character-item">
                  <h4>Gouken</h4>
                  <a href="assets/img/personajes/46.jpg"> <img src="assets/img/personajes/46.jpg" alt="Gouken"> </a>
                  <p class="description">La tragedia golpeó a Gouken de muy joven, pero una determinación inquebrantable le permitió seguir adelante. Es el custodio del Ansatsuken, un estilo de lucha cuyo origen se olvidó hace mucho, y ha vencido incluso a la misma muerte.</p>
                </div>
              </div>
              <div class="carousel-item"> <!-- --------------------------------------------------------------------------------------- KARIN -->
                <div class="character-item">
                  <h4>Karin</h4>
                  <a href="assets/img/personajes/47.jpg"> <img src="assets/img/personajes/47.jpg" alt="Karin"> </a>
                  <p class="description">Karin Kanzuki lidera uno de los conglomerados empresariales más ricos y poderosos de todo Japón. Esta adolescente millonaria puede parecer ególatra, presuntuosa, y un tanto elitista, pero lo cierto es que, al menos en el ring, siempre acaba demostrando su superioridad.</p>
                </div>
              </div>
              <div class="carousel-item"> <!-- -------------------------------------------------------------------------------------- MAKOTO -->
                <div class="character-item">
                  <h4>Makoto</h4>
                  <a href="assets/img/personajes/48.jpg"> <img src="assets/img/personajes/48.jpg" alt="Makoto"> </a>
                  <p class="description">Makoto es una adolescente de espíritu fuerte y competitivo, que ha entrenado en el dojo de su padre desde muy pequeña. Su interés por las artes marciales no la convirtió en una chica muy popular entre las de su entorno, pero eso no le hizo cuestionar su pasión.</p>
                </div>
              </div>
              <div class="carousel-item"> <!-- ------------------------------------------------------------------------------------- ZANGIEF -->
                <div class="character-item">
                  <h4>Zangief</h4>
                  <a href="assets/img/personajes/49.jpg"> <img src="assets/img/personajes/49.jpg" alt="Zangief"> </a>
                  <p class="description">Campeón indiscutible de lucha libre en su Rusia natal, Zangief es un combatiente de limitada inteligencia, pero con gran corazón y voluntad de hierro. Un auténtico veterano del wrestling que siempre busca nuevos desafíos en el ring.</p>
                </div>
              </div>
              <div class="carousel-item"> <!-- --------------------------------------------------------------------------------------- HAKAN -->
                <div class="character-item">
                  <h4>Hakan</h4>
                  <a href="assets/img/personajes/50.jpg"> <img src="assets/img/personajes/50.jpg" alt="Hakan"> </a>
                  <p class="description">Hakan es un devoto padre de familia, un empresario emprendedor y un acérrimo defensor de la que es su gran pasión y deporte nacional en su país: la lucha libre turca. Como campeón de dicha disciplina, quiere darla a conocer por el mundo.</p>
                </div>
              </div>
              <div class="carousel-item"> <!-- ------------------------------------------------------------------------------------- ROLENTO -->
                <div class="character-item">
                  <h4>Rolento</h4>
                  <a href="assets/img/personajes/51.jpg"> <img src="assets/img/personajes/51.jpg" alt="Rolento"> </a>
                  <p class="description">Rolento se curtió en los campos de batalla más duros. Ahora, con una determinación que no conoce límites, busca crear su propia nación militar utópica. A la hora de luchar en peleas callejeras, no duda en echar mano de su arsenal.</p>
                </div>
              </div>
              <div class="carousel-item"> <!-- --------------------------------------------------------------------------------------- SODOM -->
                <div class="character-item">
                  <h4>Sodom</h4>
                  <a href="assets/img/personajes/52.jpg"> <img src="assets/img/personajes/52.jpg" alt="Sodom"> </a>
                  <p class="description">A pesar de haber nacido en los Estados Unidos y ser más norteamericano que las hamburguesas, Sodom se considera un nativo japonés de los pies a la cabeza. Su gran objetivo es restablecer la gloria de la antigua banda Mad Gear.</p>
                </div>
              </div>
              <div class="carousel-item"> <!-- ------------------------------------------------------------------------------------ FEI LONG -->
                <div class="character-item">
                  <h4>Fei Long</h4>
                  <a href="assets/img/personajes/53.jpg"> <img src="assets/img/personajes/53.jpg" alt="Fei Long"> </a>
                  <p class="description">Fei Long es el actor de películas de artes marciales más conocido del mundo. Sin embargo, para él no todo son efectos especiales, ya que además es experto en kung?fu e incluso creador de su propio estilo de lucha.</p>
                </div>
              </div>
              <div class="carousel-item"> <!-- --------------------------------------------------------------------------------------- RUFUS -->
                <div class="character-item">
                  <h4>Rufus</h4>
                  <a href="assets/img/personajes/54.jpg"> <img src="assets/img/personajes/54.jpg" alt="Rufus"> </a>
                  <p class="description">Rufus tiene una única meta en la vida: obtener el título de campeón de artes marciales de Estados Unidos, que en la actualidad posee Ken Masters. Y aunque su sobrepeso pueda sugerir lo contrario, cuenta con las habilidades para conseguirlo.</p>
                </div>
              </div>
              <div class="carousel-item"> <!-- -------------------------------------------------------------------------------------- BALROG -->
                <div class="character-item">
                  <h4>Balrog</h4>
                  <a href="assets/img/personajes/55.jpg"> <img src="assets/img/personajes/55.jpg" alt="Balrog">  </a>
                  <p class="description">Caído en desgracia cuando acariciaba el título de campeón de los pesos pesados, Balrog acabó convirtiéndose en uno de los Cuatro Reyes de la organización criminal Shadaloo. Aunque a él, más que liderar, lo que le gusta es aplastar.</p>
                </div>
              </div>
              <div class="carousel-item"> <!-- -------------------------------------------------------------------------------------- BIRDIE -->
                <div class="character-item">
                  <h4>Birdie</h4>
                  <a href="assets/img/personajes/56.jpg"> <img src="assets/img/personajes/56.jpg" alt="Birdie"> </a>
                  <p class="description">La escasa inteligencia y la naturaleza conflictiva de Birdie han jugado en su contra en el pasado, haciendo de la precariedad laboral su principal modo de vida. Todo cambió tras su participación en el torneo  World Warrior.</p>
                </div>
              </div>
              <div class="carousel-item"> <!-- ----------------------------------------------------------------------------------------- DAN -->
                <div class="character-item">
                  <h4>Dan</h4>
                  <a href="assets/img/personajes/57.jpg"> <img src="assets/img/personajes/57.jpg" alt="Dan"> </a>
                  <p class="description">Dan «The Man» Hibiki es un luchador particularmente estrafalario, cuya concepción de sí mismo no encaja demasiado bien con la realidad. Sus combates se cuentan por derrotas, y suele meterse en problemas que le quedan demasiado grandes.</p>
                </div>
              </div>
              <div class="carousel-item"> <!-- -------------------------------------------------------------------------------------- SAKURA -->
                <div class="character-item">
                  <h4>Sakura</h4>
                  <a href="assets/img/personajes/58.jpg"> <img src="assets/img/personajes/58.jpg" alt="Sakura"> </a>
                  <p class="description">Sakura es una estudiante alegre y vivaz que muestra una gran pasión por todo lo que tiene que ver con las artes marciales, hasta el punto de haberse convertido en una experta luchadora de manera completamente autodidacta.</p>
                </div>
              </div>
              <div class="carousel-item"> <!-- ---------------------------------------------------------------------------------------- YANG -->
                <div class="character-item">
                  <h4>Yang</h4>
                  <a href="assets/img/personajes/59.jpg"> <img src="assets/img/personajes/59.jpg" alt="Yang"> </a>
                  <p class="description">Yang es el menor de los dos hermanos Lee. Ambos no solo residen en Hong Kong, sino que son miembros respetados de su comunidad. Tiene un fuerte sentido del honor que le lleva a lidiar en disputas locales y combatir injusticias allá donde se presenten.</p>
                </div>
              </div>
              <div class="carousel-item"> <!-- ----------------------------------------------------------------------------------------- YUN -->
                <div class="character-item">
                  <h4>Yun</h4>
                  <a href="assets/img/personajes/60.jpg"> <img src="assets/img/personajes/60.jpg" alt="Yun"> </a>
                  <p class="description">Yun es el mayor de los dos gemelos Lee. Tiene un carácter enérgico y extrovertido, y suele ser impulsivo a la hora de tomar decisiones, pero siempre lo hace motivado por lo que cree que es el bien para su comunidad y con la intención de ayudar al prójimo.</p>
                </div>
              </div>
              <div class="carousel-item"> <!-- ---------------------------------------------------------------------------------------- SEAN -->
                <div class="character-item">
                  <h4>Sean</h4>
                  <a href="assets/img/personajes/61.jpg"> <img src="assets/img/personajes/61.jpg" alt="Sean"> </a>
                  <p class="description">Sean Matsuda es miembro de una familia con grandes expertos en artes marciales. A él, no obstante, le interesaba más practicar deportes como el baloncesto, pero tras ver en acción a Ken Masters, decidió seguir sus pasos.</p>
                </div>
              </div>
              <div class="carousel-item"> <!-- --------------------------------------------------------------------------------------- LAURA -->
                <div class="character-item">
                  <h4>Laura</h4>
                  <a href="assets/img/personajes/62.jpg"> <img src="assets/img/personajes/62.jpg" alt="Laura"> </a>
                  <p class="description">Como heredera del estilo Matsuda Jiu-Jitsu, Laura acostumbraba a ponerse a prueba midiéndose contra los mejores luchadores a su alcance. Eso le llevó a forjar grandes amistades, pero también a ser objetivo de adversarios muy peligrosos.</p>
                </div> 
              </div>
              <div class="carousel-item"> <!-- --------------------------------------------------------------------------------------- KOLIN -->
                <div class="character-item">
                  <h4>Kolin</h4>
                  <a href="assets/img/personajes/63.jpg"> <img src="assets/img/personajes/63.jpg" alt="Kolin"> </a>
                  <p class="description">Cuando la misteriosa Sociedad Secreta decreta la destrucción de Shadaloo, Kolin se convierte en el brazo ejecutor de la sentencia, y no se detendrá hasta que la organización criminal acabe reducida a cenizas.</p>
                </div>
              </div>
              <div class="carousel-item"> <!-- --------------------------------------------------------------------------------------- LUCIA -->
                <div class="character-item">
                  <h4>Lucia</h4>
                  <a href="assets/img/personajes/64.jpg"> <img src="assets/img/personajes/64.jpg" alt="Lucia"> </a>
                  <p class="description">No es fácil ser policía en Metro City, donde las bandas callejeras y el crimen organizado insisten en echar raíces y continuamente tratan de prosperar y hacerse con el control de la ciudad. Por eso, para la joven Lucia Morgan combatir el crimen es más que un deber.</p>
                </div>
              </div>
              <div class="carousel-item"> <!-- ------------------------------------------------------------------------------------- DECAPRE -->
                <div class="character-item">
                  <h4>Decapre</h4>
                  <a href="assets/img/personajes/65.jpg"> <img src="assets/img/personajes/65.jpg" alt="Decapre"> </a>
                  <p class="description">Decapre forma parte de uno de los cuerpos de élite de Shadaloo más temidos, conocido como las Dolls («Las muñecas»). De las doce jóvenes que conforman este grupo, Decapre es con diferencia la más inestable, peligrosa e impredecible.</p>
                </div>
              </div>
              <div class="carousel-item"> <!-- ------------------------------------------------------------------------------------------- Q -->
                <div class="character-item">
                  <h4>Q</h4>
                  <a href="assets/img/personajes/66.jpg"> <img src="assets/img/personajes/66.jpg" alt="Q"> </a>
                  <p class="description">Nadie sabe quién se esconde tras la máscara del individuo conocido únicamente como Q, ni cuáles son sus intenciones. El misterioso sujeto aparece y desaparece a placer en los momenos y lugares más inverosímiles, y su estilo de lucha es completamente heterodoxo.</p>
                </div>
              </div>
              <div class="carousel-item"> <!-- ---------------------------------------------------------------------------------------- FANG -->
                <div class="character-item">
                  <h4>F.A.N.G</h4>
                  <a href="assets/img/personajes/67.jpg"> <img src="assets/img/personajes/67.jpg" alt="F.A.N.G"> </a>
                  <p class="description">Entrenado desde la infancia como un asesino experto en todo tipo de venenos, F.A.N.G ascendió rápidamente en el escalafón de Shadaloo hasta entrar en la cúpula de los Cuatro Reyes de la organización criminal.</p>
                </div>
              </div>
              <div class="carousel-item"> <!-- ----------------------------------------------------------------------------------------- ORO -->
                <div class="character-item">
                  <h4>Oro</h4>
                  <a href="assets/img/personajes/68.jpg"> <img src="assets/img/personajes/68.jpg" alt="Oro"> </a>
                  <p class="description">Con nada más y nada menos que 140 años a sus espaldas, Oro es un viejo maestro legendario. Retirado a una cueva de la selva amazónica durante años, decide salir de ella para buscar un discípulo a quien traspasar su legado.</p>
                </div>
              </div>
              <div class="carousel-item"> <!-- ---------------------------------------------------------------------------------------- ABEL -->
                <div class="character-item">
                  <h4>Abel</h4>
                  <a href="assets/img/personajes/69.jpg"> <img src="assets/img/personajes/69.jpg" alt="Abel"> </a>
                  <p class="description">Abel era un luchador experto en judo, pero su pasado era un misterio incluso para sí mismo. Sufría alguna clase de amnesia que le impedía recordar detalle alguno de su niñez o juventud. Decidido a buscar respuestas, acabó emprendiendo un viaje revelador.</p>
                </div>
              </div>
              <div class="carousel-item">  <!-- --------------------------------------------------------------------------------------- SETH -->
                <div class="character-item">
                  <h4>Seth</h4>
                  <a href="assets/img/personajes/70.jpg"> <img src="assets/img/personajes/70.jpg" alt="Seth"> </a>
                  <p class="description">A Seth se le conocía originalmente como Número 15, ya que se trataba de un cuerpo mejorado cuyo propósito era llegar a servir de reemplazo para el de M. Bison. Sin embargo, acabó adquiriendo consciencia propia, y se convirtió en un enemigo muy poderoso.</p>
                </div>
              </div>
              <div class="carousel-item"> <!-- -------------------------------------------------------------------------------------- TWELVE -->
                <div class="character-item">
                  <h4>Twelve</h4>
                  <a href="assets/img/personajes/71.jpg"> <img src="assets/img/personajes/71.jpg" alt="Twelve"> </a>
                  <p class="description">La Sociedad Secreta ha aprovechado los avances de la humanidad en su propio beneficio. En la era moderna, la ingeniería genética es uno de sus principales campos de investigación.</p>
                </div>
              </div>
              <div class="carousel-item"> <!-- --------------------------------------------------------------------------------------- NECRO -->
                <div class="character-item">
                  <h4>Necro</h4>
                  <a href="assets/img/personajes/72.jpg"> <img src="assets/img/personajes/72.jpg" alt="Necro"> </a>
                  <p class="description">Una intrigante sociedad secreta lleva miles de años gobernando el mundo desde las sombras. Sus líderes actuales usan la ingeniería genética para crear eficientes y obedientes soldados que sirvan a sus planes.</p>
                </div>
              </div>
              <div class="carousel-item"> <!-- ---------------------------------------------------------------------------------------- JUNI -->
                <div class="character-item">
                  <h4>Juni</h4>
                  <a href="assets/img/personajes/73.jpg"> <img src="assets/img/personajes/73.jpg" alt="Juni"> </a>
                  <p class="description">Juni ejercía de asesina y guardaespaldas para M. Bison, el líder de la organización criminal Shadaloo. La devoción y entrega de la joven a los designios de su líder era incondicional, aunque no siempre había sido así.</p>
                </div>
              </div>
              <div class="carousel-item"> <!-- ---------------------------------------------------------------------------------------- JULI -->
                <div class="character-item">
                  <h4>Juli</h4>
                  <a href="assets/img/personajes/74.jpg"> <img src="assets/img/personajes/74.jpg" alt="Juli"> </a>
                  <p class="description">Juli era una integrante destacada de la unidad Doll. Como el resto de sus compañeras, había sido secuestrada y adoctrinada por Shadaloo para servir bajo las órdenes directas de M. Bison, líder de la organización criminal.</p>
                </div>
              </div>
              <div class="carousel-item"> <!-- ------------------------------------------------------------------------------------ EVIL RYU -->
                <div class="character-item">
                  <h4>Evil Ryu</h4>
                  <a href="assets/img/personajes/75.jpg"> <img src="assets/img/personajes/75.jpg" alt="Evil Ryu"> </a>
                  <p class="description">Son muchos los misterios que rodean al Satsui no Hado, la poderosa energía maligna capaz de convertir a un luchador en una auténtica máquina de matar. Ryu no ha dejado de combatir contra ella desde que esta comenzó a crecer en su interior.</p>
                </div>
              </div>
            </div>
          </div> <!-- carrusel -->
        </div> <!-- contenedor de todo el carrusel -->
      </div> <!-- row -->
    </div> <!-- contenido -->
  </div> <!-- contenedor general -->
@endsection