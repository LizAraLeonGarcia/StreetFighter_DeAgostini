@extends('layouts.app')

@section('content')
  <div class="container-fluid">
    <div class="section-title">
      <h3>Explora a los personajes de la colección</h3>
    </div>
    <div class="personajes">
      <div class="row">
        <!-- Lista coluna izquierda -->
        <div class="col-md-6">
          <ol id="customPagination">
            <li data-bs-target="#characterCarousel" data-bs-slide-to="0">Chun Li (#7)</li>
            <li data-bs-target="#characterCarousel" data-bs-slide-to="1">Akira (#72)</li>
            <li data-bs-target="#characterCarousel" data-bs-slide-to="2">Poison (#29)</li>
            <li data-bs-target="#characterCarousel" data-bs-slide-to="3">R. Mika (#22)</li>
            <li data-bs-target="#characterCarousel" data-bs-slide-to="4">Menat (#61)</li>
            <li data-bs-target="#characterCarousel" data-bs-slide-to="5">Juri (#39)</li>
            <li data-bs-target="#characterCarousel" data-bs-slide-to="6">Rose (#20)</li>
            <li data-bs-target="#characterCarousel" data-bs-slide-to="7">Ibuki (#25)</li>
            <li data-bs-target="#characterCarousel" data-bs-slide-to="8">Falke (#62)</li>
            <li data-bs-target="#characterCarousel" data-bs-slide-to="9">C. Viper(#27)</li>
            <li data-bs-target="#characterCarousel" data-bs-slide-to="10">Karin (#33)</li>
            <li data-bs-target="#characterCarousel" data-bs-slide-to="11">Vega (#6)</li>
            <li data-bs-target="#characterCarousel" data-bs-slide-to="12">Ryu (#1)</li>
            <li data-bs-target="#characterCarousel" data-bs-slide-to="13">Charlie Nash (#37)</li>
            <li data-bs-target="#characterCarousel" data-bs-slide-to="14">Gill (#57)</li>
            <li data-bs-target="#characterCarousel" data-bs-slide-to="15">Sagat (#4)</li>
            <li data-bs-target="#characterCarousel" data-bs-slide-to="16">Rashid (#56)</li>
            <li data-bs-target="#characterCarousel" data-bs-slide-to="17">Kage (#69)</li>
            <li data-bs-target="#characterCarousel" data-bs-slide-to="18">Guy (#45)</li>
            <li data-bs-target="#characterCarousel" data-bs-slide-to="19">Ed (#66)</li>
            <li data-bs-target="#characterCarousel" data-bs-slide-to="20">G (#63)</li>
            <li data-bs-target="#characterCarousel" data-bs-slide-to="21">Necalli (#59)</li>
            <li data-bs-target="#characterCarousel" data-bs-slide-to="22">Remy (#64)</li>
            <li data-bs-target="#characterCarousel" data-bs-slide-to="23">Zeku (#67)</li>
            <li data-bs-target="#characterCarousel" data-bs-slide-to="24">Q (#54)</li>

            <li data-bs-target="#characterCarousel" data-bs-slide-to="25">Blanka (#5)</li>
            <li data-bs-target="#characterCarousel" data-bs-slide-to="26">Akuma (#16)</li>
            <li data-bs-target="#characterCarousel" data-bs-slide-to="27">M. Bison (#3)</li>
            <li data-bs-target="#characterCarousel" data-bs-slide-to="28">Cody (#24)</li>
            <li data-bs-target="#characterCarousel" data-bs-slide-to="29">Oni (#32)</li>
            <li data-bs-target="#characterCarousel" data-bs-slide-to="30">Dudley (#30)</li>
            <li data-bs-target="#characterCarousel" data-bs-slide-to="31">Adon (#19)</li>
            <li data-bs-target="#characterCarousel" data-bs-slide-to="32">Urien (#48)</li>
            <li data-bs-target="#characterCarousel" data-bs-slide-to="33">Alex (#52)</li>
            <li data-bs-target="#characterCarousel" data-bs-slide-to="34">Ken (#2)</li>
            <li data-bs-target="#characterCarousel" data-bs-slide-to="35">Evil Ryu (#31)</li>
            <li data-bs-target="#characterCarousel" data-bs-slide-to="36">E. Honda (#12)</li>
            <li data-bs-target="#characterCarousel" data-bs-slide-to="37">Dhalsim (#9)</li>
            <li data-bs-target="#characterCarousel" data-bs-slide-to="38">Dee Jay (#18)</li>
            <li data-bs-target="#characterCarousel" data-bs-slide-to="39">Guile (#8)</li>
            <li data-bs-target="#characterCarousel" data-bs-slide-to="40">Cammy (#14)</li>
            <li data-bs-target="#characterCarousel" data-bs-slide-to="41">Abigail (#70)</li>
            <li data-bs-target="#characterCarousel" data-bs-slide-to="42">El Fuerte (#42)</li>
            <li data-bs-target="#characterCarousel" data-bs-slide-to="43">T. Hawk (#13)</li>
            <li data-bs-target="#characterCarousel" data-bs-slide-to="44">Gen (#26)</li>
            <li data-bs-target="#characterCarousel" data-bs-slide-to="45">Gouken (#28)</li>
            <li data-bs-target="#characterCarousel" data-bs-slide-to="46">Hugo (#44)</li>
            <li data-bs-target="#characterCarousel" data-bs-slide-to="47">Zangief (#10)</li>
            <li data-bs-target="#characterCarousel" data-bs-slide-to="48">Hakan (#41)</li>
            <li data-bs-target="#characterCarousel" data-bs-slide-to="49">Birdie (#58)</li>

            <li data-bs-target="#characterCarousel" data-bs-slide-to="50">Sodom (#71)</li>
            <li data-bs-target="#characterCarousel" data-bs-slide-to="51">Rolento (#40)</li>
            <li data-bs-target="#characterCarousel" data-bs-slide-to="52">Elena (#36)</li>
            <li data-bs-target="#characterCarousel" data-bs-slide-to="53">Makoto (#23)</li>
            <li data-bs-target="#characterCarousel" data-bs-slide-to="54">Fei Long (#15)</li>
            <li data-bs-target="#characterCarousel" data-bs-slide-to="55">Rufus (#47)</li>
            <li data-bs-target="#characterCarousel" data-bs-slide-to="56">Balrog (#11)</li>
            <li data-bs-target="#characterCarousel" data-bs-slide-to="57">Luke (#75)</li>
            <li data-bs-target="#characterCarousel" data-bs-slide-to="58">Dan (#21)</li>
            <li data-bs-target="#characterCarousel" data-bs-slide-to="59">Sakura (#17)</li>
            <li data-bs-target="#characterCarousel" data-bs-slide-to="60">F.A.N.G (#60)</li>
            <li data-bs-target="#characterCarousel" data-bs-slide-to="61">Oro (#51)</li>
            <li data-bs-target="#characterCarousel" data-bs-slide-to="62">Sean (#49)</li>
            <li data-bs-target="#characterCarousel" data-bs-slide-to="63">Laura (#50)</li>
            <li data-bs-target="#characterCarousel" data-bs-slide-to="64">Kolin (#55)</li>
            <li data-bs-target="#characterCarousel" data-bs-slide-to="65">Lucia (#68)</li>
            <li data-bs-target="#characterCarousel" data-bs-slide-to="66">Seth (#46)</li>
            <li data-bs-target="#characterCarousel" data-bs-slide-to="67">Decapre (#43)</li>
            <li data-bs-target="#characterCarousel" data-bs-slide-to="68">Twelve (#65)</li>
            <li data-bs-target="#characterCarousel" data-bs-slide-to="69">Necro (#53)</li>
            <li data-bs-target="#characterCarousel" data-bs-slide-to="70">Juni (#73)</li>
            <li data-bs-target="#characterCarousel" data-bs-slide-to="71">Juli (#74)</li>
            <li data-bs-target="#characterCarousel" data-bs-slide-to="72">Yun (#35)</li>
            <li data-bs-target="#characterCarousel" data-bs-slide-to="73">Yang (#35)</li>
            <li data-bs-target="#characterCarousel" data-bs-slide-to="74">Abel (#39)</li>
          </ol>
        </div>
        <div class="col-md-6">
          <div id="characterCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="character-item">
                  <a href="assets/img/personajes/1.jpg" class="glightbox">
                    <img src="assets/img/personajes/1.jpg" class="character-img img-fluid" alt="Chun Li">
                  </a>
                  <h4>Chun Li</h4>
                  <p class="description">Creadora de su propio estilo de lucha, la bella y decidida Chun-Li es una pieza fundamental para acabar con la organización criminal Shadaloo. Siguiendo los pasos de su desaparecido padre, no descansará hasta acabar con M. Bison y todo lo que representa.</p>
                </div>
              </div>
              <div class="carousel-item">
                <div class="character-item">
                  <a href="assets/img/personajes/2.jpg" class="glightbox">
                    <img src="assets/img/personajes/2.jpg" class="character-img img-fluid" alt="Akira">
                  </a>
                  <h4>Akira</h4>
                  <p class="description">Akira Kazama es una joven a quien le apasionan especialmente dos cosas: las motocicletas y las artes marciales. Ambas pasiones le sirven para enfrentarse a los peligros más insospechados en su ajetreada vida de estudiante.</p>
                </div>
              </div>
              <div class="carousel-item">
                <div class="character-item">
                  <a href="assets/img/personajes/3.jpg" class="glightbox">
                    <img src="assets/img/personajes/3.jpg" class="character-img img-fluid" alt="Poison">
                  </a>
                  <h4>Poison</h4>
                  <p class="description">Tras sus desventuras como destacada miembro de la banda criminal Mad Gear, Poison decidió reconstruir su vida como mánager en el circuito de lucha libre profesional, donde cosechó un éxito indiscutible.</p>
                </div>
              </div>
              <div class="carousel-item">
                <div class="character-item">
                  <a href="assets/img/personajes/4.jpg" class="glightbox">
                    <img src="assets/img/personajes/4.jpg" class="character-img img-fluid" alt="Rainbow Mika">
                  </a>
                  <h4>Rainbow Mika</h4>
                  <p class="description">Rainbow Mika es una voluptuosa luchadora de indudable talento que busca crearse un nombre en el circuito de la lucha libre profesional. Su riguroso entrenamiento le permite medirse de igual a igual frente a auténticos colosos del wrestling.</p>
                </div>
              </div>
              <div class="carousel-item">
                <div class="character-item">
                  <a href="assets/img/personajes/5.jpg" class="glightbox">
                    <img src="assets/img/personajes/5.jpg" class="character-img img-fluid" alt="Menat">
                  </a>
                  <h4>Menat</h4>
                  <p class="description">Menat es una joven egipcia capaz de controlar y manipular la energía espiritual conocida como Soul Power, que también le brinda poderes de adivinación. Rose, la principal experta en esta clase de poder, es su maestra desde hace un tiempo.</p>
                </div>
              </div>
              <div class="carousel-item">
                <div class="character-item">
                  <a href="assets/img/personajes/6.jpg" class="glightbox">
                    <img src="assets/img/personajes/6.jpg" class="character-img img-fluid" alt="Juri">
                  </a>
                  <h4>Juri</h4>
                  <p class="description">Consumida por el odio y la venganza, Juri Han posee una personalidad tremendamente inestable, pero también una férrea determinación que la empuja a darlo todo por una única meta: la destrucción de M. Bison y todo lo que representa.</p>
                </div>
              </div>
              <div class="carousel-item">
                <div class="character-item">
                  <a href="assets/img/personajes/7.jpg" class="glightbox">
                    <img src="assets/img/personajes/7.jpg" class="character-img img-fluid" alt="Rose">
                  </a>
                  <h4>Rose</h4>
                  <p class="description">M. Bison, el cruel líder de la organización criminal internacional Shadaloo, teme solo una cosa: a Rose, una mística adivina italiana con quien mantiene un extraño vínculo, y quizá la única persona que conoce el secreto de su oscuro pasado.</p>
                </div>
              </div>
              <div class="carousel-item">
                <div class="character-item">
                  <a href="assets/img/personajes/8.jpg" class="glightbox">
                    <img src="assets/img/personajes/8.jpg" class="character-img img-fluid" alt="Ibuki">
                  </a>
                  <h4>Ibuki</h4>
                  <p class="description">Ibuki fue entrenada desde su infancia en las artes del ninjutsu, criándose en una aldea en lo más profundo de las montañas japonesas. Cansada del aislamiento, lo que más deseaba la joven era conocer el mundo que la rodeaba.</p>
                </div>
              </div>
              <div class="carousel-item">
                <div class="character-item">
                  <a href="assets/img/personajes/9.jpg" class="glightbox">
                    <img src="assets/img/personajes/9.jpg" class="character-img img-fluid" alt="Falke">
                  </a>
                  <h4>Falke</h4>
                  <p class="description">Falke estaba condenada a convertirse en uno de los cuerpos de reemplazo que M. Bison, líder de la organización criminal Shadaloo, guardaba a buen recaudo en sus laboratorios. Afortunadamente, la joven escapó a ese horrible destino.</p>
                </div>
              </div>
              <div class="carousel-item">
                <div class="character-item">
                  <a href="assets/img/personajes/10.jpg" class="glightbox">
                    <img src="assets/img/personajes/10.jpg" class="character-img img-fluid" alt="Crimson Viper">
                  </a>
                  <h4>Crimson Viper</h4>
                  <p class="description">Crimson Viper es una combatiente al servicio de la organización criminal S.I.N. cuyo principal cometido es poner a prueba avanzados prototipos armamentísticos en enfrentamientos reales. Pocos saben que también es una agente infiltrada de la CIA.</p>
                </div>
              </div>
              <div class="carousel-item">
                <div class="character-item">
                  <a href="assets/img/personajes/11.jpg" class="glightbox">
                    <img src="assets/img/personajes/11.jpg" class="character-img img-fluid" alt="Karin">
                  </a>
                  <h4>Karin</h4>
                  <p class="description">Karin Kanzuki lidera uno de los conglomerados empresariales más ricos y poderosos de todo Japón. Esta adolescente millonaria puede parecer ególatra, presuntuosa, y un tanto elitista, pero lo cierto es que, al menos en el ring, siempre acaba demostrando su superioridad.</p>
                </div>
              </div>
              <!-- ---------------------------------------------------------- favoritos ---------------------------------------------------------- -->
              <div class="carousel-item"> 
                <div class="character-item">
                  <a href="assets/img/personajes/12.jpg" class="glightbox">
                    <img src="assets/img/personajes/12.jpg" class="character-img img-fluid" alt="Vega">
                  </a>
                  <h4>Vega</h4>
                  <p class="description">A Vega no le costó ningún esfuerzo ascender en el escalafón de Shadaloo hasta convertirse en uno de los Cuatro Reyes que lideran la organización criminal. Su habilidad para el asesinato y su falta de escrúpulos le garantizaron el éxito.</p>
                </div>
              </div>
              <div class="carousel-item">
                <div class="character-item">
                  <a href="assets/img/personajes/13.jpg" class="glightbox">
                    <img src="assets/img/personajes/13.jpg" class="character-img img-fluid" alt="Ryu">
                  </a>
                  <h4>Ryu</h4>
                  <p class="description">Ryu busca su superación personal por encima de todo. Sufre la maldición de tener en su interior una poderosa energía oscura que debe contener en todo momento: el Satsui no Hado.</p>
                </div>
              </div>
              <div class="carousel-item">
                <div class="character-item">
                  <a href="assets/img/personajes/14.jpg" class="glightbox">
                    <img src="assets/img/personajes/14.jpg" class="character-img img-fluid" alt="Charlie Nash">
                  </a>
                  <h4>Charlie</h4>
                  <p class="description">Charlie Nash era un soldado destacado de las fuerzas aéreas norteamericanas con un sentido de la justicia inquebrantable. Luchó contra la corrupción en el ejército, luchó contra Shadaloo, e incluso después de muerto, regresó para luchar una vez más.</p>
                </div>
              </div>
              <div class="carousel-item">
                <div class="character-item">
                  <a href="assets/img/personajes/16.jpg" class="glightbox">
                    <img src="assets/img/personajes/16.jpg" class="character-img img-fluid" alt="Sagat">
                  </a>
                  <h4>Sagat</h4>
                  <p class="description">Considerado un héroe nacional en su país, las ansias de venganza de Sagat lo empujaron a convertirse en uno de los líderes de la organización criminal internacional Shadaloo. Solo el tiempo le hizo ser consciente del error de esta decisión.</p>
                </div>
                </div>
              <div class="carousel-item">
                <div class="character-item">
                  <a href="assets/img/personajes/17.jpg" class="glightbox">
                    <img src="assets/img/personajes/17.jpg" class="character-img img-fluid" alt="Rashid">
                  </a>
                  <h4>Rashid</h4>
                  <p class="description">Rashid proviene de una familia aristocrática de Oriente Medio, y le encanta estar al tanto de los avances tecnológicos. Es un usuario devoto de redes sociales y también un viajero dedicado que recorre el mundo junto a Azam, su sirviente fiel.</p>
                </div>
              </div>
              <div class="carousel-item">
                <div class="character-item">
                  <a href="assets/img/personajes/18.jpg" class="glightbox">
                    <img src="assets/img/personajes/18.jpg" class="character-img img-fluid" alt="Kage">
                  </a>
                  <h4>Kage</h4>
                  <p class="description">Tras muchos años luchando contra el mal que anidaba en su interior, Ryu estaba al fin listo para purgarlo de su alma. Pero ¿puede desaparecer realmente una fuerza tan misteriosa, maligna y poderosa como el Satsui no Hado? </p>
                </div>
              </div>
              <div class="carousel-item">
                <div class="character-item">
                  <a href="assets/img/personajes/19.jpg" class="glightbox">
                    <img src="assets/img/personajes/19.jpg" class="character-img img-fluid" alt="Guy">
                  </a>
                  <h4>Ed</h4>
                  <p class="description">Guy ha dedicado buena parte de su vida a perfeccionar sus técnicas ninjutsu con el objetivo de convertirse en el 39.º heredero del arte marcial Bushin?ryu. Su sentido de la justicia le lleva a combatir el mal en todas sus formas.</p>
                </div>
              </div>
              <div class="carousel-item">
                <div class="character-item">
                  <a href="assets/img/personajes/20.jpg" class="glightbox">
                    <img src="assets/img/personajes/20.jpg" class="character-img img-fluid" alt="Ed">
                  </a>
                  <h4>Ed</h4>
                  <p class="description">Ed es un luchador que ha sufrido numerosas vicisitudes en su corta vida, y todavía le atormentan pesadillas recurrentes. Sin embargo, su capacidad de enfrentarse a las adversidades le permite superar cualquier obstáculo.</p>
                </div>
              </div>
              <div class="carousel-item">
                <div class="character-item">
                  <a href="assets/img/personajes/21.jpg" class="glightbox">
                    <img src="assets/img/personajes/21.jpg" class="character-img img-fluid" alt="G">
                  </a>
                  <h4>G</h4>
                  <p class="description">Durante la época en que la organización criminal Shadaloo desencadenó la Crisis de las Lunas Negras, un extraño personaje del que nadie sabía nada apareció y se autoproclamó nada menos que presidente del mundo.</p>
                </div>
              </div>
              <div class="carousel-item">
                <div class="character-item">
                  <a href="assets/img/personajes/23.jpg" class="glightbox">
                    <img src="assets/img/personajes/23.jpg" class="character-img img-fluid" alt="Remy">
                  </a>
                  <h4>Remy</h4>
                  <p class="description">Remy es un joven luchador de gran talento que, paradójicamente, odia tanto luchar como a quienes practican cualquier clase de arte marcial. Ha perdido todo lo que tiene en la vida, y solo le queda el ansia de venganza.</p>
                </div>
              </div>
              <div class="carousel-item">
                <div class="character-item">
                  <a href="assets/img/personajes/24.jpg" class="glightbox">
                    <img src="assets/img/personajes/24.jpg" class="character-img img-fluid" alt="Zeku">
                  </a>
                  <h4>Zeku</h4>
                  <p class="description">Zeku era el líder número 38 del clan de ninjas Bushinryu, hasta que su pupilo, Guy, le sucedió en el cargo. Entonces decidió comenzar un viaje de redescubrimiento personal que le llevó a encontrar un nuevo propósito vital.</p>
                </div>
              </div>
              <div class="carousel-item">
                <div class="character-item">
                  <a href="assets/img/personajes/26.jpg" class="glightbox">
                    <img src="assets/img/personajes/26.jpg" class="character-img img-fluid" alt="Blanka">
                  </a>
                  <h4>Blanka</h4>
                  <p class="description">Aunque su aspecto animal sugiera lo contrario, el luchador conocido como Blanka nunca ha perdido su personalidad humana. Su estilo de lucha, salvaje y caótico, le convierte en uno de los más reputados street fighters de todo el mundo.</p>
                </div>
              </div>
              <div class="carousel-item">
                <div class="character-item">
                  <a href="assets/img/personajes/27.jpg" class="glightbox">
                    <img src="assets/img/personajes/27.jpg" class="character-img img-fluid" alt="Akuma">
                  </a>
                  <h4>Akuma</h4>
                  <p class="description">En su juventud, fue un luchador de enorme talento y con un más que prometedor potencial. Pero una insaciable búsqueda de conocimientos y poder le llevó a superar límites prohibidos. Ahora es más ogro que humano, más demonio que hombre.</p>
                </div>
              </div>
              <div class="carousel-item">
                <div class="character-item">
                  <a href="assets/img/personajes/28.jpg" class="glightbox">
                    <img src="assets/img/personajes/28.jpg" class="character-img img-fluid" alt="M. Bison">
                  </a>
                  <h4>M. Bison</h4>
                  <p class="description">Tras haber superado las limitaciones de su cuerpo físico, M. Bison anhela obtener el poder definitivo sobre todas las cosas, para lo que no duda en levantar un entramado criminal internacional sin precedentes: Shadaloo.</p>
                </div>
              </div>
              <div class="carousel-item">
                <div class="character-item">
                  <a href="assets/img/personajes/29.jpg" class="glightbox">
                    <img src="assets/img/personajes/29.jpg" class="character-img img-fluid" alt="Cody">
                  </a>
                  <h4>Cody</h4>
                  <p class="description">Cody Travers se curtió en las duras calles de Metro City, y con el tiempo se convirtió en un importante aliado del alcalde de la ciudad. Su vida ha sido de todo menos estable, pero nunca ha dejado de luchar contra el crimen.</p>
                </div>
              </div>
              <div class="carousel-item">
                <div class="character-item">
                  <a href="assets/img/personajes/30.jpg" class="glightbox">
                    <img src="assets/img/personajes/30.jpg" class="character-img img-fluid" alt="Oni">
                  </a>
                  <h4>Oni</h4>
                  <p class="description">Akuma llevaba décadas poseído por el Satsui no Hado, una misteriosa energía oscura que le otorgaba un enorme poder, pero también corrompía su alma y anulaba su voluntad. Un fatídico día, el hombre desapareció y ya solo quedó el demonio.</p>
                </div>
              </div>
              <div class="carousel-item">
                <div class="character-item">
                  <a href="assets/img/personajes/31.jpg" class="glightbox">
                    <img src="assets/img/personajes/31.jpg" class="character-img img-fluid" alt="Dudley">
                  </a>
                  <h4>Dudley</h4>
                  <p class="description">Dudley es un británico de los pies a la cabeza, amante de las reglas y férreo defensor del boxeo como el más noble de los deportes de contacto. Busca en todo momento el honor y devolver a su familia la gloria que un día tuvo.</p>
                </div>
              </div>
              <div class="carousel-item">
                <div class="character-item">
                  <a href="assets/img/personajes/32.jpg" class="glightbox">
                    <img src="assets/img/personajes/32.jpg" class="character-img img-fluid" alt="Adon">
                  </a>
                  <h4>Adon</h4>
                  <p class="description">Movido por la ambición de gloria y un afán de superación personal que muchos podrían tachar de obsesivo, Adon está dispuesto a todo con tal de alcanzar el estatus de leyenda nacional como el mejor luchador de muay thai de todos los tiempos.</p>
                </div>
              </div>
              <div class="carousel-item">
                <div class="character-item">
                  <a href="assets/img/personajes/33.jpg" class="glightbox">
                    <img src="assets/img/personajes/33.jpg" class="character-img img-fluid" alt="Urien">
                  </a>
                  <h4>Urien</h4>
                  <p class="description">Urien y su hermano Gill fueron elegidos como candidatos para liderar la organización más antigua del planeta, cuya influencia en el orden mundial y el devenir de la humanidad se remonta a tiempos inmemoriables.</p>
                </div>
              </div>
              <div class="carousel-item">
                <div class="character-item">
                  <a href="assets/img/personajes/34.jpg" class="glightbox">
                    <img src="assets/img/personajes/34.jpg" class="character-img img-fluid" alt="Alex">
                  </a>
                  <h4>Alex</h4>
                  <p class="description">Alex es un joven de pocas palabras y algo introvertido, de carácter brusco y en muchas ocasiones modos exagerados. Sin embargo, en realidad tiene un gran sentido de la justicia y es amable con quienes realmente lo merecen.</p>
                </div>
              </div>
              <div class="carousel-item">
                <div class="character-item">
                  <a href="assets/img/personajes/35.jpg" class="glightbox">
                    <img src="assets/img/personajes/35.jpg" class="character-img img-fluid" alt="Ken">
                  </a>
                  <h4>Ken</h4>
                  <p class="description">Afligido por haber perdido a su madre cuando aún era un niño, Ken logró superar su pena gracias a las artes marciales, convirtiéndose finalmente en un esmerado padre de familia y en el mejor luchador de todo Estados Unidos.</p>
                </div>
              </div>
              <div class="carousel-item">
                <div class="character-item">
                  <a href="assets/img/personajes/36.jpg" class="glightbox">
                    <img src="assets/img/personajes/36.jpg" class="character-img img-fluid" alt="Evil Ryu">
                  </a>
                  <h4>Evil Ryu</h4>
                  <p class="description">Son muchos los misterios que rodean al Satsui no Hado, la poderosa energía maligna capaz de convertir a un luchador en una auténtica máquina de matar. Ryu no ha dejado de combatir contra ella desde que esta comenzó a crecer en su interior.</p>
                </div>
              </div>

              <div class="carousel-item">
                <div class="character-item">
                  <a href="assets/img/personajes/37.jpg" class="glightbox">
                    <img src="assets/img/personajes/37.jpg" class="character-img img-fluid" alt="E. Honda">
                  </a>
                  <h4>E. Honda</h4>
                  <p class="description">Edmond Honda ha dedicado toda su vida al sumo, una disciplina que en Japón es, más que un deporte o un arte marcial, toda una institución nacional. Elogiado y alabado en su país, Honda busca ahora nuevos desafíos.</p>
                </div>
              </div>
              <div class="carousel-item">
                <div class="character-item">
                  <a href="assets/img/personajes/38.jpg" class="glightbox">
                    <img src="assets/img/personajes/38.jpg" class="character-img img-fluid" alt="Dhalsim">
                  </a>
                  <h4>Dhalsim</h4>
                  <p class="description">A pesar de no ser experto en artes marciales ni poseer una constitución fuerte y atlética preparada para la lucha, Dhalsim es uno de los combatientes más respetados por las increíbles habilidades de las que hace gala.</p>
                </div>
              </div>
              <div class="carousel-item">
                <div class="character-item">
                  <a href="assets/img/personajes/39.jpg" class="glightbox">
                    <img src="assets/img/personajes/39.jpg" class="character-img img-fluid" alt="Dee Jay">
                  </a>
                  <h4>Dee Jay</h4>
                  <p class="description">Dee Jay es un jamaicano experto en kickboxing, cuya vida suele girar entorno a su pasión por la música. De hecho, para él la lucha es un medio que le permite encontrar la inspiración necesaria para dar vida a sus composiciones.</p>
                </div>
              </div>
              <div class="carousel-item">
                <div class="character-item">
                  <a href="assets/img/personajes/40.jpg" class="glightbox">
                    <img src="assets/img/personajes/40.jpg" class="character-img img-fluid" alt="Guile">
                  </a>
                  <h4>Guile</h4>
                  <p class="description">Uno de los miembros más destacados de las fuerzas aéreas estadounidenses, Guile, ha seguido el rastro de la organización criminal Shadaloo durante años, y no parará hasta desmantelarla por completo y acabar con su temido líder, M. Bison.</p>
                </div>
              </div>
              <div class="carousel-item">
                <div class="character-item">
                  <a href="assets/img/personajes/41.jpg" class="glightbox">
                    <img src="assets/img/personajes/41.jpg" class="character-img img-fluid" alt="Cammy">
                  </a>
                  <h4>Cammy</h4>
                  <p class="description">Cammy sirvió a Shadaloo durante años, contra su voluntad e incluso sin ser consciente de ello. Finalmente se libró de la oscura influencia de M. Bison, y ahora está decidida a acabar con la organización criminal a cualquier precio.</p>
                </div>
              </div>
              <div class="carousel-item">
                <div class="character-item">
                  <a href="assets/img/personajes/42.jpg" class="glightbox">
                    <img src="assets/img/personajes/42.jpg" class="character-img img-fluid" alt="Abigail">
                  </a>
                  <h4>Abigail</h4>
                  <p class="description">Tras una vida delictiva, Abigail decidió establecer un negocio legal. A pesar del cambio de rumbo en su vida, su pasado criminal, un feroz temperamento y una inteligencia limitada le siguen jugando alguna que otra mala pasada.</p>
                </div>
              </div>

              <div class="carousel-item">
                <div class="character-item">
                  <a href="assets/img/personajes/43.jpg" class="glightbox">
                    <img src="assets/img/personajes/43.jpg" class="character-img img-fluid" alt="El Fuerte">
                  </a>
                  <h4>El Fuerte</h4>
                  <p class="description">El Fuerte es un mexicano especialista en lucha libre, además de un aplicado cocinero. Eso sí, aunque en el ring se ha convertido en un luchador de renombre, en la cocina no ha cosechado tanto éxito, aunque él lo ve de otra manera.</p>
                </div>
              </div>
              <div class="carousel-item">
                <div class="character-item">
                  <a href="assets/img/personajes/44.jpg" class="glightbox">
                    <img src="assets/img/personajes/44.jpg" class="character-img img-fluid" alt="T. Hawk">
                  </a>
                  <h4>T. Hawk</h4>
                  <p class="description">Thunder Hawk vivía una apacible existencia en las tierras ancestrales de su clan, hasta que Shadaloo decidió establecer allí una de sus bases principales y todo cambió tanto para él como para su pueblo. Ahora solo le queda luchar.</p>
                </div>
              </div>
              <div class="carousel-item">
                <div class="character-item">
                  <a href="assets/img/personajes/45.jpg" class="glightbox">
                    <img src="assets/img/personajes/45.jpg" class="character-img img-fluid" alt="Gen">
                  </a>
                  <h4>Gen</h4>
                  <p class="description">La avanzada edad de Gen hace que muchos rivales le tomen por una presa fácil. Pero el anciano no ha perdido ni un ápice de la velocidad ni de la mortífera eficacia de su juventud, y todavía es capaz de tumbar a cualquiera en apenas unos segundos.</p>
                </div>
              </div>
              <div class="carousel-item">
                <div class="character-item">
                  <a href="assets/img/personajes/46.jpg" class="glightbox">
                    <img src="assets/img/personajes/46.jpg" class="character-img img-fluid" alt="Gouken">
                  </a>
                  <h4>Gouken</h4>
                  <p class="description">La tragedia golpeó a Gouken de muy joven, pero una determinación inquebrantable le permitió seguir adelante. Es el custodio del Ansatsuken, un estilo de lucha cuyo origen se olvidó hace mucho, y ha vencido incluso a la misma muerte.</p>
                </div>
              </div>
              <div class="carousel-item">
                <div class="character-item">
                  <a href="assets/img/personajes/47.jpg" class="glightbox">
                    <img src="assets/img/personajes/47.jpg" class="character-img img-fluid" alt="Hugo">
                  </a>
                  <h4>Hugo</h4>
                  <p class="description">Hugo Andore es un luchador profesional de fuerza sobrenatural pero escaso intelecto. Su incapacidad para tomar decisiones le llevó a delinquir en el pasado, aunque logró reformarse y convertirse tras ello se en un wrestler de éxito.</p>
                </div>
              </div>
              <div class="carousel-item">
                <div class="character-item">
                  <a href="assets/img/personajes/48.jpg" class="glightbox">
                    <img src="assets/img/personajes/48.jpg" class="character-img img-fluid" alt="Zangief">
                  </a>
                  <h4>Zangief</h4>
                  <p class="description">Campeón indiscutible de lucha libre en su Rusia natal, Zangief es un combatiente de limitada inteligencia, pero con gran corazón y voluntad de hierro. Un auténtico veterano del wrestling que siempre busca nuevos desafíos en el ring.</p>
                </div>
              </div>
              <div class="carousel-item">
                <div class="character-item">
                    <a href="assets/img/personajes/49.jpg" class="glightbox">
                    <img src="assets/img/personajes/49.jpg" class="character-img img-fluid" alt="Hakan">
                  </a>
                  <h4>Hakan</h4>
                  <p class="description">Hakan es un devoto padre de familia, un empresario emprendedor y un acérrimo defensor de la que es su gran pasión y deporte nacional en su país: la lucha libre turca. Como campeón de dicha disciplina, quiere darla a conocer por el mundo.</p>
                </div>
              </div>
              <div class="carousel-item">
                <div class="character-item">
                  <a href="assets/img/personajes/50.jpg" class="glightbox">
                    <img src="assets/img/personajes/50.jpg" class="character-img img-fluid" alt="Birdie">
                  </a>
                  <h4>Birdie</h4>
                  <p class="description">La escasa inteligencia y la naturaleza conflictiva de Birdie han jugado en su contra en el pasado, haciendo de la precariedad laboral su principal modo de vida. Todo cambió tras su participación en el torneo  World Warrior.</p>
                </div>
              </div>
              <div class="carousel-item">
                <div class="character-item">
                  <a href="assets/img/personajes/51.jpg" class="glightbox">
                    <img src="assets/img/personajes/51.jpg" class="character-img img-fluid" alt="Sodom">
                  </a>
                  <h4>Sodom</h4>
                  <p class="description">A pesar de haber nacido en los Estados Unidos y ser más norteamericano que las hamburguesas, Sodom se considera un nativo japonés de los pies a la cabeza. Su gran objetivo es restablecer la gloria de la antigua banda Mad Gear.</p>
                </div>
              </div>
              <div class="carousel-item">
                <div class="character-item">
                  <a href="assets/img/personajes/52.jpg" class="glightbox">
                    <img src="assets/img/personajes/52.jpg" class="character-img img-fluid" alt="Rolento">
                  </a>
                  <h4>Rolento</h4>
                  <p class="description">Rolento se curtió en los campos de batalla más duros. Ahora, con una determinación que no conoce límites, busca crear su propia nación militar utópica. A la hora de luchar en peleas callejeras, no duda en echar mano de su arsenal.</p>
                </div>
              </div>
              <div class="carousel-item">
                <div class="character-item">
                  <a href="assets/img/personajes/53.jpg" class="glightbox">
                    <img src="assets/img/personajes/53.jpg" class="character-img img-fluid" alt="Elena">
                  </a>
                  <h4>Elena</h4>
                  <p class="description">Elena vivía una apacible existencia en Kenia. Como hija del líder de la región tenía un gran sentido de la responsabilidad, era aplicada en sus estudios y una practicante de capoeira muy hábil.</p>
                </div>
              </div>
              <div class="carousel-item">
                <div class="character-item">
                  <a href="assets/img/personajes/54.jpg" class="glightbox">
                    <img src="assets/img/personajes/54.jpg" class="character-img img-fluid" alt="Makoto">
                  </a>
                  <h4>Makoto</h4>
                  <p class="description">Makoto es una adolescente de espíritu fuerte y competitivo, que ha entrenado en el dojo de su padre desde muy pequeña. Su interés por las artes marciales no la convirtió en una chica muy popular entre las de su entorno, pero eso no le hizo cuestionar su pasión.</p>
                </div>
              </div>
              <div class="carousel-item">
                <div class="character-item">
                  <a href="assets/img/personajes/55.jpg" class="glightbox">
                    <img src="assets/img/personajes/55.jpg" class="character-img img-fluid" alt="Fei Long">
                  </a>
                  <h4>Fei Long</h4>
                  <p class="description">Fei Long es el actor de películas de artes marciales más conocido del mundo. Sin embargo, para él no todo son efectos especiales, ya que además es experto en kung?fu e incluso creador de su propio estilo de lucha.</p>
                </div>
              </div>
              <div class="carousel-item">
                <div class="character-item">
                  <a href="assets/img/personajes/56.jpg" class="glightbox">
                    <img src="assets/img/personajes/56.jpg" class="character-img img-fluid" alt="Rufus">
                  </a>
                  <h4>Rufus</h4>
                  <p class="description">Rufus tiene una única meta en la vida: obtener el título de campeón de artes marciales de Estados Unidos, que en la actualidad posee Ken Masters. Y aunque su sobrepeso pueda sugerir lo contrario, cuenta con las habilidades para conseguirlo.</p>
                </div>
              </div>
              <div class="carousel-item">
                <div class="character-item">
                  <a href="assets/img/personajes/57.jpg" class="glightbox">
                    <img src="assets/img/personajes/57.jpg" class="character-img img-fluid" alt="Balrog">
                  </a>
                  <h4>Balrog</h4>
                  <p class="description">Caído en desgracia cuando acariciaba el título de campeón de los pesos pesados, Balrog acabó convirtiéndose en uno de los Cuatro Reyes de la organización criminal Shadaloo. Aunque a él, más que liderar, lo que le gusta es aplastar.</p>
                </div>
              </div>
              <div class="carousel-item">
                <div class="character-item">
                  <a href="assets/img/personajes/58.jpg" class="glightbox">
                    <img src="assets/img/personajes/58.jpg" class="character-img img-fluid" alt="Luke">
                  </a>
                  <h4>Luke</h4>
                  <p class="description">Experto en artes marciales mixtas y con un gran sentido de la justicia, Luke aún no tiene claro qué camino quiere tomar en su vida, y espera encontrar la respuesta mientras desafía a los mejores luchadores del mundo.</p>
                </div>
              </div>
              <div class="carousel-item">
                <div class="character-item">
                  <a href="assets/img/personajes/59.jpg" class="glightbox">
                    <img src="assets/img/personajes/59.jpg" class="character-img img-fluid" alt="Dan">
                  </a>
                  <h4>Dan</h4>
                  <p class="description">Dan «The Man» Hibiki es un luchador particularmente estrafalario, cuya concepción de sí mismo no encaja demasiado bien con la realidad. Sus combates se cuentan por derrotas, y suele meterse en problemas que le quedan demasiado grandes.</p>
                </div>
              </div>
              <div class="carousel-item">
                <div class="character-item">
                  <a href="assets/img/personajes/60.jpg" class="glightbox">
                    <img src="assets/img/personajes/60.jpg" class="character-img img-fluid" alt="Sakura">
                  </a>
                  <h4>Sakura</h4>
                  <p class="description">Sakura es una estudiante alegre y vivaz que muestra una gran pasión por todo lo que tiene que ver con las artes marciales, hasta el punto de haberse convertido en una experta luchadora de manera completamente autodidacta.</p>
                </div>
              </div>
              <div class="carousel-item">
                <div class="character-item">
                  <a href="assets/img/personajes/62.jpg" class="glightbox">
                    <img src="assets/img/personajes/62.jpg" class="character-img img-fluid" alt="Oro">
                  </a>
                  <h4>Oro</h4>
                  <p class="description">Con nada más y nada menos que 140 años a sus espaldas, Oro es un viejo maestro legendario. Retirado a una cueva de la selva amazónica durante años, decide salir de ella para buscar un discípulo a quien traspasar su legado.</p>
                </div>
              </div>
              <div class="carousel-item">
                <div class="character-item">
                  <a href="assets/img/personajes/63.jpg" class="glightbox">
                    <img src="assets/img/personajes/63.jpg" class="character-img img-fluid" alt="Sean">
                  </a>
                  <h4>Sean</h4>
                  <p class="description">Sean Matsuda es miembro de una familia con grandes expertos en artes marciales. A él, no obstante, le interesaba más practicar deportes como el baloncesto, pero tras ver en acción a Ken Masters, decidió seguir sus pasos.</p>
                </div>
              </div>
              <div class="carousel-item">
                <div class="character-item">
                  <a href="assets/img/personajes/64.jpg" class="glightbox">
                    <img src="assets/img/personajes/64.jpg" class="character-img img-fluid" alt="Laura">
                  </a>
                  <h4>Laura</h4>
                  <p class="description">Como heredera del estilo Matsuda Jiu-Jitsu, Laura acostumbraba a ponerse a prueba midiéndose contra los mejores luchadores a su alcance. Eso le llevó a forjar grandes amistades, pero también a ser objetivo de adversarios muy peligrosos.</p>
                </div> 
              </div>
              <div class="carousel-item">     
                <div class="character-item">
                  <a href="assets/img/personajes/66.jpg" class="glightbox">
                    <img src="assets/img/personajes/66.jpg" class="character-img img-fluid" alt="Lucia">
                  </a>
                  <h4>Lucia</h4>
                  <p class="description">No es fácil ser policía en Metro City, donde las bandas callejeras y el crimen organizado insisten en echar raíces y continuamente tratan de prosperar y hacerse con el control de la ciudad. Por eso, para la joven Lucia Morgan combatir el crimen es más que un deber.</p>
                </div>
              </div>
              <div class="carousel-item">
                <div class="character-item">
                  <a href="assets/img/personajes/67.jpg" class="glightbox">
                    <img src="assets/img/personajes/67.jpg" class="character-img img-fluid" alt="Seth">
                  </a>
                  <h4>Seth</h4>
                  <p class="description">A Seth se le conocía originalmente como Número 15, ya que se trataba de un cuerpo mejorado cuyo propósito era llegar a servir de reemplazo para el de M. Bison. Sin embargo, acabó adquiriendo consciencia propia, y se convirtió en un enemigo muy poderoso.</p>
                </div>
              </div>
              <div class="carousel-item">
                <div class="character-item">
                  <a href="assets/img/personajes/68.jpg" class="glightbox">
                    <img src="assets/img/personajes/68.jpg" class="character-img img-fluid" alt="Decapre">
                  </a>
                  <h4>Decapre</h4>
                  <p class="description">Decapre forma parte de uno de los cuerpos de élite de Shadaloo más temidos, conocido como las Dolls («Las muñecas»). De las doce jóvenes que conforman este grupo, Decapre es con diferencia la más inestable, peligrosa e impredecible.</p>
                </div>
              </div>
              <div class="carousel-item">
                <div class="character-item">
                  <a href="assets/img/personajes/70.jpg" class="glightbox">
                    <img src="assets/img/personajes/70.jpg" class="character-img img-fluid" alt="Necro">
                  </a>
                  <h4>Necro</h4>
                  <p class="description">Una intrigante sociedad secreta lleva miles de años gobernando el mundo desde las sombras. Sus líderes actuales usan la ingeniería genética para crear eficientes y obedientes soldados que sirvan a sus planes.</p>
                </div>
              </div>
              <div class="carousel-item">
                <div class="character-item">
                  <a href="assets/img/personajes/71.jpg" class="glightbox">
                    <img src="assets/img/personajes/71.jpg" class="character-img img-fluid" alt="Juni">
                  </a>
                  <h4>Juni</h4>
                  <p class="description">Juni ejercía de asesina y guardaespaldas para M. Bison, el líder de la organización criminal Shadaloo. La devoción y entrega de la joven a los designios de su líder era incondicional, aunque no siempre había sido así.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection