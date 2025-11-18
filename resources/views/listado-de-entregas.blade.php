@extends('layouts.app')

@section('content')
  <div class="container-fluid">
    <!-- ------------------------------------------------------ contendor para título ------------------------------------------------------ -->
    <div class="section-title">
      <h3>Descubre a los personajes de la colección</h3>
    </div>
    <!-- ----------------------------------------------- contenedor para listado de entregas ----------------------------------------------- -->
    <div class="row listado-de-entregas">
      <!-- ------------------------------------------------------- Columna izquierda ------------------------------------------------------- -->
      <div class="col-md-3 d-none d-md-block">
        <img src="{{ asset('assets/img/listado-de-entregas/ryu.png') }}" alt="Ryu" class="img-lateral">
        <img src="{{ asset('assets/img/listado-de-entregas/vega.png') }}" alt="Vega" class="img-lateral">
        <img src="{{ asset('assets/img/listado-de-entregas/abigail.png') }}" alt="Abigail" class="img-lateral">
        <img src="{{ asset('assets/img/listado-de-entregas/guile.png') }}" alt="Guile" class="img-lateral">
        <img src="{{ asset('assets/img/listado-de-entregas/cammy.png') }}" alt="Cammy" class="img-lateral">
        <img src="{{ asset('assets/img/listado-de-entregas/juri.png') }}" alt="Juri" class="img-lateral">
        <img src="{{ asset('assets/img/listado-de-entregas/dhalsim.png') }}" alt="Dhalsim" class="img-lateral">
        <img src="{{ asset('assets/img/listado-de-entregas/ehonda.png') }}" alt="E. Honda" class="img-lateral">
      </div>
      <!-- ---------------------------------------------------- Columna central (tabla) ---------------------------------------------------- -->
      <div class="col-md-6">
        <div class="table-responsive">
          <table class="table table-bordered table-striped table-sm">
            <thead class="thead-dark">
              <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>Fecha de lanzamiento</th>
                <th>Precio de venta al público</th>
              </tr>
            </thead>
            <tbody>
              <tr class="fila1">
                <td>1</td> <td>Ryu</td> <td>27 septiembre 2022</td> <td>$50</td>
              </tr>
              <tr class="fila1">
                <td>2</td> <td>Ken</td> <td>11 octubre 2022</td> <td>$180</td>
              </tr>
              <tr class="fila2">
                <td style="color: white;">3</td> <td style="color: white;">M. Bison</td> <td style="color: white;">25 octubre 2022</td> <td style="color: white;">$300</td>
              </tr>
              <tr class="fila2">
                <td>4</td> <td>Sagat</td> <td>8 noviembre 2022</td> <td>$300</td>
              </tr>
              <tr class="fila2">
                <td style="color: white;">5</td> <td style="color: white;">Blanka</td> <td style="color: white;">22 noviembre 2022</td> <td style="color: white;">$300</td>
              </tr>
              <tr class="fila2">
                <td>6</td> <td>Vega</td> <td>6 diciembre 2022</td> <td>$300</td>
              </tr>
              <tr class="fila2">
                <td style="color: white;">7</td> <td style="color: white;">Chun Li</td> <td style="color: white;">20 diciembre 2022</td> <td style="color: white;">$300</td>
              </tr>
              <tr class="fila2">
                <td>8</td> <td>Guile</td> <td>10 enero 2023</td> <td>$300</td>
              </tr>
              <tr class="fila2">
                <td style="color: white;">9</td> <td style="color: white;">Dhalsim</td> <td style="color: white;">7 febrero 2023</td> <td style="color: white;">$330</td>
              </tr>
              <tr class="fila2">
                <td style="color: white;">10</td> <td>Zangief</td> <td>21 febrero 2023</td> <td>$330</td>
              </tr>
              <tr class="fila2">
                <td style="color: white;">11</td> <td style="color: white;">Balrog</td> <td style="color: white;">7 marzo 2023</td> <td style="color: white;">$330</td>
              </tr>
              <tr class="fila2">
                <td>12</td> <td>E. Honda</td> <td>21 marzo 2023</td> <td>$330</td>
              </tr>
              <tr class="fila2-1">
                <td style="color: white;">13</td> <td style="color: white;">T. Hawk</td> <td style="color: white;">18 abril 2023</td> <td style="color: white;">$330</td>
              </tr>
              <tr class="fila2-1">
                <td>14</td> <td>Cammy</td> <td>2 mayo 2023</td> <td>$330</td>
              </tr>
              <tr class="fila2-1">
                <td style="color: white;">15</td> <td style="color: white;">Fei Long</td> <td style="color: white;">16 mayo 2023</td> <td style="color: white;">$330</td>
              </tr>
              <tr class="fila2-2">
                <td>16</td> <td>Akuma</td> <td>30 mayo 2023</td> <td>$330</td>
              </tr>
              <tr class="fila3">
                <td style="color: white;">17</td> <td style="color: white;">Sakura</td> <td style="color: white;">27 junio 2023</td> <td style="color: white;">$330</td>
              </tr>
              <tr class="fila2-1">
                <td>18</td> <td>Dee Jay</td> <td>25 julio 2023</td> <td>$360</td>
              </tr>
              <tr class="fila3-1">
                <td style="color: white;">19</td> <td style="color: white;">Adon</td> <td style="color: white;">11 julio 2023</td> <td style="color: white;">$360</td>
              </tr>
              <tr class="fila3-1">
                <td>20</td> <td>Rose</td> <td>13 junio 2023</td> <td>$330</td>
              </tr>
              <tr class="fila3-1">
                <td style="color: white;">21</td> <td style="color: white;">Dan</td> <td style="color: white;">12 diciembre 2023</td> <td style="color: white;">$360</td>
              </tr>
              <tr class="fila3-2">
                <td>22</td> <td>R. Mika</td> <td>22 agosto 2023</td> <td>$360</td>
              </tr>
              <tr class="fila4">
                <td style="color: white;">23</td> <td style="color: white;">Makoto</td> <td style="color: white;">31 octubre 2023</td> <td style="color: white;">$360</td>
              </tr>
              <tr class="fila3-2">
                <td>24</td> <td>Cody</td> <td>3 octubre 2023</td> <td>$360</td>
              </tr>
              <tr class="fila4-1">
                <td>25</td> <td>Ibuki</td> <td>5 septiembre 2023</td> <td>$360</td>
              </tr>
              <tr class="fila3">
                <td>26</td> <td>Gen</td> <td>8 agosto 2023</td> <td>$360</td>
              </tr>
              <tr class="filaIV">
                <td style="color: white;">27</td> <td style="color: white;">C. Viper</td> <td style="color: white;">19 septiembre 2023</td> <td style="color: white;">$360</td>
              </tr>
              <tr class="filaIV">
                <td>28</td> <td>Gouken</td> <td>23 enero 2024</td> <td>$360</td>
              </tr>
              <tr class="filaIV">
                <td style="color: white;">29</td> <td style="color: white;">Poison</td> <td style="color: white;">2 enero 2024</td> <td style="color: white;">$360</td>
              </tr>
              <tr class="fila4-1">
                <td>30</td> <td>Dudley</td> <td>6 febrero 2024</td> <td>$360</td>
              </tr>
              <tr class="filaIV">
                <td style="color: white;">31</td> <td style="color: white;">Evil Ryu</td> <td style="color: white;">20 febrero 2024</td> <td style="color: white;">$360</td>
              </tr>
              <tr class="filaIV">
                <td>32</td> <td>Oni</td> <td>5 marzo 2024</td> <td>$360</td>
              </tr>
              <tr class="fila3-2">
                <td>33</td> <td>Karin</td> <td>19 marzo 2024</td> <td>$360</td>
              </tr>
              <tr class="fila4-1">
                <td>34</td> <td>Yun</td> <td>2 abril 2024</td> <td>$360</td>
              </tr>
              <tr class="fila4-1">
                <td>35</td> <td>Yang</td> <td>16 abril 2024</td> <td>$390</td>
              </tr>
              <tr class="fila4-1">
                <td>36</td> <td>Elena</td> <td>7 mayo 2024</td> <td>$390</td>
              </tr>
              <tr class="fila3-1">
                <td style="color: white;">37</td> <td style="color: white;">Charlie Nash</td> <td style="color: white;">21 mayo 2024</td> <td style="color: white;">$390</td>
              </tr>
              <tr class="filaIV">
                <td>38</td> <td>Abel</td> <td>23 julio 2024</td> <td>$390</td>
              </tr>
              <tr class="filaIV">
                <td style="color: white;">39</td> <td style="color: white;">Juri</td> <td style="color: white;">4 junio 2024</td> <td style="color: white;">$390</td>
              </tr>
              <tr class="fila3">
                <td>40</td> <td>Rolento</td> <td>6 agosto 2024</td> <td>$390</td>
              </tr>
              <tr class="filaIV">
                <td style="color: white;">41</td> <td style="color: white;">Hakan</td> <td style="color: white;">20 agosto 2024</td> <td style="color: white;">$390</td> 
              </tr>
              <tr class="filaIV">
                <td>42</td> <td>El Fuerte</td> <td>3 septiembre 2024</td> <td>$390</td>
              </tr>
              <tr class="filaIV">
                <td style="color: white;">43</td> <td style="color: white;">Decapre</td> <td style="color: white;">17 septiembre 2024</td> <td style="color: white;">$390</td>
              </tr>
              <tr class="filaT">
                <td>44</td> <td>Hugo</td> <td>1 octubre 2024</td> <td>$390</td>
              </tr>
              <tr class="fila3-1">
                <td style="color: white;">45</td> <td style="color: white;">Guy</td> <td style="color: white;">15 octubre 2024</td> <td style="color: white;">$390</td>
              </tr>
              <tr class="filaIV">
                <td>46</td> <td>Seth</td> <td>29 octubre 2024</td> <td>$420</td>
              </tr>
              <tr class="filaIV">
                <td style="color: white;">47</td> <td style="color: white;">Rufus</td> <td style="color: white;">12 noviembre 2024</td> <td style="color: white;">$420</td>
              </tr>
              <tr class="fila4-2">
                <td>48</td> <td>Urien</td> <td>26 noviembre 2024</td> <td>$420</td>
              </tr>
              <tr class="fila4-1">
                <td>49</td> <td>Sean</td> <td>10 diciembre 2024</td> <td>$420</td>
              </tr>
              <tr class="filaV">
                <td>50</td> <td>Laura</td> <td>24 diciembre 2024</td> <td>$420</td>
              </tr>
              <tr class="fila4-1">
                <td>51</td> <td>Oro</td> <td>7 enero 2025</td> <td>$420</td>
              </tr>
              <tr class="fila4-1">
                <td>52</td> <td>Alex</td> <td>21 enero 2025</td> <td>$420</td>
              </tr>
              <tr class="fila4-1">
                <td>53</td> <td>Necro</td> <td>4 febrero 2025</td> <td>$420</td>
              </tr>
              <tr class="fila4">
                <td>54</td> <td>Q</td> <td>18 febrero 2025</td> <td>$420</td>
              </tr>
              <tr class="filaV">
                <td>55</td> <td>Kolin</td> <td>4 marzo 2025</td> <td>$420</td>
              </tr>
              <tr class="filaV"> 
                <td>56</td> <td>Rashid</td> <td>18 marzo 2025</td> <td>$420</td>
              </tr>
              <tr class="fila4-1">
                <td>57</td> <td>Gill</td> <td>1 abril 2025</td> <td>$420</td>
              </tr>
              <tr class="fila3-1">
                <td>58</td> <td>Birdie</td> <td>15 abril 2025</td> <td>$420</td>
              </tr>
              <tr class="filaV">
                <td>59</td> <td>Necalli</td> <td>5 agosto 2025</td> <td>$420</td>
              </tr>
              <tr class="filaV">
                <td>60</td> <td>F.A.N.G</td> <td>29 abril 2025</td> <td>$480</td>
              </tr>
              <tr class="filaExpansion">
                <th align="center" colspan="4" style="background-color: #333; color: white;">	EXPANSIÓN </th>
              </tr>
              <tr class="filaV">
                <td>61</td> <td>Menat</td> <td>13 mayo 2025</td> <td>$480</td>
              </tr>
              <tr class="filaV">
                <td>62</td> <td>Falke</td> <td>27 mayo 2025</td> <td>$480</td>
              </tr>
              <tr class="filaV">
                <td>63</td> <td>G</td> <td>10 junio 2025</td> <td>$480</td>
              </tr>
              <tr class="fila4">
                <td style="color: white;">64</td> <td style="color: white;">Remy</td> <td style="color: white;">24 junio 2025</td> <td style="color: white;">$480</td>
              </tr>
              <tr class="fila4">
                <td>65</td> <td>Twelve</td> <td>8 julio 2025</td> <td>$480</td>
              </tr>
              <tr class="filaV">
                <td>66</td> <td>Ed</td> <td>22 julio 2025</td> <td>$480</td>
              </tr>
              <tr class="filaV">
                <td>67</td> <td>Zeku</td>
                <td>25 noviembre 2025</td>
                <td>$</td>
              </tr>
              <tr class="filaV">
                <td>68</td> <td>Lucia</td> <td>19 agosto 2025</td> <td>$480</td>
              </tr>
              <tr class="filaV">
                <td>69</td> <td>Kage</td> <td>2 septiembre 2025</td> <td>$480</td>
              </tr>
              <tr class="filaV">
                <td>70</td> <td>Abigail</td><td>16 septiembre 2025</td> <td>$480</td>
              </tr>
              <tr class="fila3-1">
                <td>71</td> <td>Sodom</td>
                <td>30 septiembre 2025</td> <td>$480</td>
              </tr>
              <tr class="filaV">
                <td>72</td> <td>Akira</td>
                <td>14 octubre 2025</td>
                <td>$480</td>
              </tr>
              <tr class="fila3-2">
                <td>73</td> <td>Juni</td>
                <td>28 octubre 2025</td>
                <td>$480</td>
              </tr>
              <tr class="fila3-2">
                <td>74</td> <td>Juli</td>
                <td>11 noviembre 2025</td>
                <td>$480</td>
              </tr>
              <tr class="filaV">
                <td>75</td> <td>Luke</td>
                <td>9 diciembre 2025</td>
                <td>$</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div>
          <div class="table-responsive">
            <table class="table-videojuegos">
              <thead>
                <tr>
                  <th> Nota </th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td> Para cada personaje tomé de referencia el primer videojuego en donde cuenta como personaje jugable, por ejemplo: Adon y
                    Birdie, aunque salieron por primera vez en el Street Fighter, ninguno de ellos dos era personaje jugable, hasta el Street
                    Fighter Alpha: Warrior's Dream. Por lo tanto, cada uno de los colores utilizados en la tabla representa a un videojuego en 
                    específico siendo aclarado cada uno de éstos debajo de este párrafo y ordenados conforme a su fecha de lanzamiento.
                  </td>
                </tr>
                <tr>
                  <td>
                    <div style="background-color: white; padding: 5px;">Street Fighter (1987)</div>
                    <div style="background-color: blue; color: white; padding: 5px;">Street Fighter II (1991)</div>
                    <div style="background-color: midnightblue; color: white; padding: 5px;">Super Street Fighter II (1993)</div>
                    <div style="background-color: navy; color: white; padding: 5px;">Super Street Fighter II Turbo (1994)</div>
                    <div style="background-color: darkgreen; color: white; padding: 5px;">Street Fighter Alpha 2 (1996)</div>
                    <div style="background-color: green; color: white; padding: 5px;">Street Fighter Alpha: Warrior's Dream</div>
                    <div style="background-color: lime; padding: 5px;">Street Fighter Alpha 3 (1998)</div>
                    <div style="background-color: deeppink; color: white; padding: 5px;">Street Fighter III: 3RD Strike (1999)</div>
                    <div style="background-color: magenta; color: black; padding: 5px;">Street Fighter III: New Generation</div>
                    <div style="background-color: hotpink; color: black; padding: 5px;">Street Fighter III: 2ND Impact (1997)</div>
                    <div style="background-color: crimson; color: white; padding: 5px;">Street Fighter X Tekken (2012)</div>
                    <div style="background-color: purple; color: white; padding: 5px;">Street Fighter IV (2008)</div>
                    <div style="background-color: goldenrod; color: black; padding: 5px;">Street Fighter V (2016)</div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <!-- -------------------------------------------------------- Columna derecha -------------------------------------------------------- -->
      <div class="col-md-3 d-none d-md-block">
        <img src="{{ asset('assets/img/listado-de-entregas/ken.png') }}" alt="Ken" class="img-lateral">
        <img src="{{ asset('assets/img/listado-de-entregas/zeku.png') }}" alt="Zeku" class="img-lateral">
        <img src="{{ asset('assets/img/listado-de-entregas/gill.png') }}" alt="Gill" class="img-lateral">
        <img src="{{ asset('assets/img/listado-de-entregas/charlienash.png') }}" alt="Charlie Nash" class="img-lateral">
        <img src="{{ asset('assets/img/listado-de-entregas/falke.png') }}" alt="Falke" class="img-lateral">
        <img src="{{ asset('assets/img/listado-de-entregas/poison.png') }}" alt="Poison" class="img-lateral">
        <img src="{{ asset('assets/img/listado-de-entregas/kage.png') }}" alt="Kage" class="img-lateral">
        <img src="{{ asset('assets/img/listado-de-entregas/rashid.png') }}" alt="Rashid" class="img-lateral">
      </div>
    </div>
  </div>
@endsection
