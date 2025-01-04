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
      <div class="col-md-3">
        <img src="{{ asset('assets/img/listado-de-entregas/ryu.png') }}" alt="Ryu" class="img-fluid">
        <img src="{{ asset('assets/img/listado-de-entregas/vega.png') }}" alt="Vega" class="img-fluid">
        <img src="{{ asset('assets/img/listado-de-entregas/abigail.png') }}" alt="Abigail" class="img-fluid">
        <img src="{{ asset('assets/img/listado-de-entregas/guile.png') }}" alt="Guile" class="img-fluid">
        <img src="{{ asset('assets/img/listado-de-entregas/cammy.png') }}" alt="Cammy" class="img-fluid">
        <img src="{{ asset('assets/img/listado-de-entregas/juri.png') }}" alt="Juri" class="img-fluid">
        <img src="{{ asset('assets/img/listado-de-entregas/dhalsim.png') }}" alt="Dhalsim" class="img-fluid">
        <img src="{{ asset('assets/img/listado-de-entregas/ehonda.png') }}" alt="E. Honda" class="img-fluid">
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
                <td>1</td>
                <td>Ryu</td>
                <td>27 septiembre 2022</td>
                <td>$50</td>
              </tr>
              <tr class="fila2">
                <td>2</td>
                <td>Ken</td>
                <td>11 octubre 2022</td>
                <td>$180</td>
              </tr>
              <tr class="fila3">
                <td style="color: white;">3</td>
                <td style="color: white;">M. Bison</td>
                <td style="color: white;">25 octubre 2022</td>
                <td style="color: white;">$300</td>
              </tr>
              <tr class="fila4">
                <td>4</td>
                <td>Sagat</td>
                <td>8 noviembre 2022</td>
                <td>$300</td>
              </tr>
              <tr class="fila5">
                <td>5</td>
                <td>Blanka</td>
                <td>22 noviembre 2022</td>
                <td>$300</td>
              </tr>
              <tr class="fila6">
                <td>6</td>
                <td>Vega</td>
                <td>6 diciembre 2022</td>
                <td>$300</td>
              </tr>
              <tr class="fila7">
                <td style="color: white;">7</td>
                <td style="color: white;">Chun Li</td>
                <td style="color: white;">20 diciembre 2022</td>
                <td style="color: white;">$300</td>
              </tr>
              <tr class="fila8">
                <td>8</td>
                <td>Guile</td>
                <td>10 enero 2023</td>
                <td>$300</td>
              </tr>
              <tr class="fila9">
                <td>9</td>
                <td>Dhalsim</td>
                <td>7 febrero 2023</td>
                <td>$330</td>
              </tr>
              <tr class="fila10">
                <td>10</td>
                <td>Zangief</td>
                <td>21 febrero 2023</td>
                <td>$330</td>
              </tr>
              <tr class="fila11">
                <td>11</td>
                <td>Balrog</td>
                <td>7 marzo 2023</td>
                <td>$330</td>
              </tr>
              <tr class="fila12">
                <td>12</td>
                <td>E. Honda</td>
                <td>21 marzo 2023</td>
                <td>$330</td>
              </tr>
              <tr class="fila13">
                <td>13</td>
                <td>T. Hawk</td>
                <td>18 abril 2023</td>
                <td>$330</td>
              </tr>
              <tr class="fila14">
                <td>14</td>
                <td>Cammy</td>
                <td>2 mayo 2023</td>
                <td>$330</td>
              </tr>
              <tr class="fila15">
                <td style="color: white;">15</td>
                <td style="color: white;">Fei Long</td>
                <td style="color: white;">16 mayo 2023</td>
                <td style="color: white;">$330</td>
              </tr>
              <tr class="fila16">
                <td>16</td>
                <td>Akuma</td>
                <td>30 mayo 2023</td>
                <td>$330</td>
              </tr>
              <tr class="fila17">
                <td>17</td>
                <td>Sakura</td>
                <td>27 junio 2023</td>
                <td>$330</td>
              </tr>
              <tr class="fila18">
                <td>18</td>
                <td>Dee Jay</td>
                <td>25 julio 2023</td>
                <td>$360</td>
              </tr>
              <tr class="fila19">
                <td style="color: white;">19</td>
                <td style="color: white;">Adon</td>
                <td style="color: white;">11 julio 2023</td>
                <td style="color: white;">$360</td>
              </tr>
              <tr class="fila20">
                <td>20</td>
                <td>Rose</td>
                <td>13 junio 2023</td>
                <td>$330</td>
              </tr>
              <tr class="fila21">
                <td>21</td>
                <td>Dan</td>
                <td>12 diciembre 2023</td>
                <td>$360</td>
              </tr>
              <tr class="fila22">
                <td>22</td>
                <td>R. Mika</td>
                <td>22 agosto 2023</td>
                <td>$360</td>
              </tr>
              <tr class="fila23">
                <td>23</td>
                <td>Makoto</td>
                <td>31 octubre 2023</td>
                <td>$360</td>
              </tr>
              <tr class="fila24">
                <td>24</td>
                <td>Cody</td>
                <td>3 octubre 2023</td>
                <td>$360</td>
              </tr>
              <tr class="fila25">
                <td style="color: white;">25</td>
                <td style="color: white;">Ibuki</td>
                <td style="color: white;">5 septiembre 2023</td>
                <td style="color: white;">$360</td>
              </tr>
              <tr class="fila26">
                <td>26</td>
                <td>Gen</td>
                <td>8 agosto 2023</td>
                <td>$360</td>
              </tr>
              <tr class="fila27">
                <td style="color: white;">27</td>
                <td style="color: white;">C. Viper</td>
                <td style="color: white;">19 septiembre 2023</td>
                <td style="color: white;">$360</td>
              </tr>
              <tr class="fila28">
                <td>28</td>
                <td>Gouken</td>
                <td>23 enero 2024</td>
                <td>$360</td>
              </tr>
              <tr class="fila29">
                <td style="color: white;">29</td>
                <td style="color: white;">Poison</td>
                <td style="color: white;">2 enero 2024</td>
                <td style="color: white;">$360</td>
              </tr>
              <tr class="fila30">
                <td>30</td>
                <td>Dudley</td>
                <td>6 febrero 2024</td>
                <td>$360</td>
              </tr>
              <tr class="fila31">
                <td style="color: white;">31</td>
                <td style="color: white;">Evil Ryu</td>
                <td style="color: white;">20 febrero 2024</td>
                <td style="color: white;">$360</td>
              </tr>
              <tr class="fila32">
                <td>32</td>
                <td>Oni</td>
                <td>5 marzo 2024</td>
                <td>$360</td>
              </tr>
              <tr class="fila33">
                <td style="color: white;">33</td>
                <td style="color: white;">Karin</td>
                <td style="color: white;">19 marzo 2024</td>
                <td style="color: white;">$360</td>
              </tr>
              <tr class="fila34">
                <td>34</td>
                <td>Yun</td>
                <td>2 abril 2024</td>
                <td>$360</td>
              </tr>
              <tr class="fila35">
                <td style="color: white;">35</td>
                <td style="color: white;">Yang</td>
                <td style="color: white;">16 abril 2024</td>
                <td style="color: white;">$390</td>
              </tr>
              <tr class="fila36">
                <td>36</td>
                <td>Elena</td>
                <td>7 mayo 2024</td>
                <td>$390</td>
              </tr>
              <tr class="fila37">
                <td>37</td>
                <td>Charlie Nash</td>
                <td>21 mayo 2024</td>
                <td>$390</td>
              </tr>
              <tr class="fila38">
                <td>38</td>
                <td>Abel</td>
                <td>23 julio 2024</td>
                <td>$390</td>
              </tr>
              <tr class="fila39">
                <td style="color: white;">39</td>
                <td style="color: white;">Juri</td>
                <td style="color: white;">4 junio 2024</td>
                <td style="color: white;">$390</td>
              </tr>
              <tr class="fila40">
                <td>40</td>
                <td>Rolento</td>
                <td>6 agosto 2024</td>
                <td>$390</td>
              </tr>
              <tr class="fila41">
                <td style="color: white;">41</td>
                <td style="color: white;">Hakan</td>
                <td style="color: white;">20 agosto 2024</td>
                <td style="color: white;">$390</td>
              </tr>
              <tr class="fila42">
                <td>42</td>
                <td>El Fuerte</td>
                <td>3 septiembre 2024</td>
                <td>$390</td>
              </tr>
              <tr class="fila43">
                <td>43</td>
                <td>Decapre</td>
                <td>17 septiembre 2024</td>
                <td>$390</td>
              </tr>
              <tr class="fila44">
                <td>44</td>
                <td>Hugo</td>
                <td>1 octubre 2024</td>
                <td>$390</td>
              </tr>
              <tr class="fila45">
                <td style="color: white;">45</td>
                <td style="color: white;">Guy</td>
                <td style="color: white;">15 octubre 2024</td>
                <td style="color: white;">$390</td>
              </tr>
              <tr class="fila46">
                <td>46</td>
                <td>Seth</td>
                <td>29 octubre 2024</td>
                <td>$420</td>
              </tr>
              <tr class="fila47">
                <td>47</td>
                <td>Rufus</td>
                <td>12 noviembre 2024</td>
                <td>$420</td>
              </tr>
              <tr class="fila48">
                <td>48</td>
                <td>Urien</td>
                <td>26 noviembre 2024</td>
                <td>$420</td>
              </tr>
              <tr class="fila49">
                <td>49</td>
                <td>Sean</td>
                <td>10 diciembre 2024</td>
                <td>$420</td>
              </tr>
              <tr class="fila50">
                <td>50</td>
                <td>Laura</td>
                <td>24 diciembre 2024</td>
                <td>$420</td>
              </tr>
              <tr class="fila51">
                <td style="color: white;">51</td>
                <td style="color: white;">Oro</td>
                <td style="color: white;">7 enero 2025</td>
                <td style="color: white;">$</td>
              </tr>
              <tr class="fila52">
                <td>52</td>
                <td>Alex</td>
                <td>21 enero 2025</td>
                <td>$</td>
              </tr>
              <tr class="fila53">
                <td style="color: white;">53</td>
                <td style="color: white;">Necro</td>
                <td style="color: white;">4 febrero 2025</td>
                <td style="color: white;">$</td>
              </tr>
              <tr class="fila54">
                <td>54</td>
                <td>Q</td>
                <td>18 febrero 2025</td>
                <td>$</td>
              </tr>
              <tr class="fila55">
                <td style="color: white;">55</td>
                <td style="color: white;">Kolin</td>
                <td style="color: white;">4 marzo 2025</td>
                <td style="color: white;">$</td>
              </tr>
              <tr class="fila56">
                <td>56</td>
                <td>Rashid</td>
                <td>18 marzo 2025</td>
                <td>$</td>
              </tr>
              <tr class="fila57">
                <td>57</td>
                <td>Gill</td>
                <td>1 abril 2025</td>
                <td>$</td>
              </tr>
              <tr class="fila58">
                <td>58</td>
                <td>Birdie</td>
                <td>15 abril 2025</td>
                <td>$</td>
              </tr>
              <tr class="fila59">
                <td style="color: white;">59</td>
                <td style="color: white;">Necalli</td>
                <td style="color: white;">29 abril 2025</td>
                <td style="color: white;">$</td>
              </tr>
              <tr class="fila60">
                <td>60</td>
                <td>F.A.N.G</td>
                <td>18 mayo 2025</td>
                <td>$</td>
              </tr>
              <tr class="fila61">
                <td style="color: white;">61</td>
                <td style="color: white;">Menat</td>
                <td style="color: white;">2025</td>
                <td style="color: white;">$</td>
              </tr>
              <tr class="fila62">
                <td>62</td>
                <td>Falke</td>
                <td>2025</td>
                <td>$</td>
              </tr>
              <tr class="fila63">
                <td style="color: white;">63</td>
                <td style="color: white;">G</td>
                <td style="color: white;">2025</td>
                <td style="color: white;">$</td>
              </tr>
              <tr class="fila64">
                <td>64</td>
                <td>Remy</td>
                <td>2025</td>
                <td>$</td>
              </tr>
              <tr class="fila65">
                <td>65</td>
                <td>Twelve</td>
                <td>2025</td>
                <td>$</td>
              </tr>
              <tr class="fila66">
                <td>66</td>
                <td>Ed</td>
                <td>2025</td>
                <td>$</td>
              </tr>
              <tr class="fila67">
                <td style="color: white;">67</td>
                <td style="color: white;">Zeku</td>
                <td style="color: white;">2025</td>
                <td style="color: white;">$</td>
              </tr>
              <tr class="fila68">
                <td>68</td>
                <td>Lucia</td>
                <td>2025</td>
                <td>$</td>
              </tr>
              <tr class="fila69">
                <td>69</td>
                <td>Kage</td>
                <td>2025</td>
                <td>$</td>
              </tr>
              <tr class="fila70">
                <td>70</td>
                <td>Abigail</td>
                <td>2025</td>
                <td>$</td>
              </tr>
              <tr class="fila71">
                <td>71</td>
                <td>Sodom</td>
                <td>2025</td>
                <td>$</td>
              </tr>
              <tr class="fila72">
                <td>72</td>
                <td>Akira</td>
                <td>2025</td>
                <td>$</td>
              </tr>
              <tr class="fila73">
                <td>73</td>
                <td>Juni</td>
                <td>2025</td>
                <td>$</td>
              </tr>
              <tr class="fila74">
                <td style="color: white;">74</td>
                <td style="color: white;">Juli</td>
                <td style="color: white;">2025</td>
                <td style="color: white;">$</td>
              </tr>
              <tr class="fila75">
                <td>75</td>
                <td>Luke</td>
                <td>2025</td>
                <td>$</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <!-- -------------------------------------------------------- Columna derecha -------------------------------------------------------- -->
      <div class="col-md-3">
        <img src="{{ asset('assets/img/listado-de-entregas/ken.png') }}" alt="Ken" class="img-fluid">
        <img src="{{ asset('assets/img/listado-de-entregas/zeku.png') }}" alt="Zeku" class="img-fluid">
        <img src="{{ asset('assets/img/listado-de-entregas/gill.png') }}" alt="Gill" class="img-fluid">
        <img src="{{ asset('assets/img/listado-de-entregas/charlienash.png') }}" alt="Charlie Nash" class="img-fluid">
        <img src="{{ asset('assets/img/listado-de-entregas/falke.png') }}" alt="Falke" class="img-fluid">
        <img src="{{ asset('assets/img/listado-de-entregas/poison.png') }}" alt="Poison" class="img-fluid">
        <img src="{{ asset('assets/img/listado-de-entregas/kage.png') }}" alt="Kage" class="img-fluid">
        <img src="{{ asset('assets/img/listado-de-entregas/rashid.png') }}" alt="Rashid" class="img-fluid">
      </div>
    </div>
  </div>
@endsection
