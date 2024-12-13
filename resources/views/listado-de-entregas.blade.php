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
                <td>3</td>
                <td>M. Bison</td>
                <td>25 octubre 2022</td>
                <td>$300</td>
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
                <td>7</td>
                <td>Chun Li</td>
                <td>20 diciembre 2022</td>
                <td>$300</td>
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
                <td>15</td>
                <td>Fei Long</td>
                <td>16 mayo 2023</td>
                <td>$330</td>
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
                <td>19</td>
                <td>Adon</td>
                <td>11 julio 2023</td>
                <td>$360</td>
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
                <td>25</td>
                <td>Ibuki</td>
                <td>5 septiembre 2023</td>
                <td>$360</td>
              </tr>
              <tr>
                <td>26</td>
                <td>Gen</td>
                <td>8 agosto 2023</td>
                <td>$360</td>
              </tr>
              <tr>
                <td>27</td>
                <td>C. Viper</td>
                <td>19 septiembre 2023</td>
                <td>$360</td>
              </tr>
              <tr>
                <td>28</td>
                <td>Gouken</td>
                <td>23 enero 2024</td>
                <td>$360</td>
              </tr>
              <tr>
                <td>29</td>
                <td>Poison</td>
                <td>2 enero 2024</td>
                <td>$360</td>
              </tr>
              <tr>
                <td>30</td>
                <td>Dudley</td>
                <td>6 febrero 2024</td>
                <td>$360</td>
              </tr>
              <tr>
                <td>31</td>
                <td>Evil Ryu</td>
                <td>20 febrero 2024</td>
                <td>$360</td>
              </tr>
              <tr>
                <td>32</td>
                <td>Oni</td>
                <td>5 marzo 2024</td>
                <td>$360</td>
              </tr>
              <tr>
                <td>33</td>
                <td>Karin</td>
                <td>19 marzo 2024</td>
                <td>$360</td>
              </tr>
              <tr>
                <td>34</td>
                <td>Yun</td>
                <td>2 abril 2024</td>
                <td>$360</td>
              </tr>
              <tr>
                <td>35</td>
                <td>Yang</td>
                <td>16 abril 2024</td>
                <td>$390</td>
              </tr>
              <tr>
                <td>36</td>
                <td>Elena</td>
                <td>7 mayo 2024</td>
                <td>$390</td>
              </tr>
              <tr>
                <td>37</td>
                <td>Charlie Nash</td>
                <td>21 mayo 2024</td>
                <td>$390</td>
              </tr>
              <tr>
                <td>38</td>
                <td>Abel</td>
                <td>23 julio 2024</td>
                <td>$390</td>
              </tr>
              <tr>
                <td>39</td>
                <td>Juri</td>
                <td>4 junio 2024</td>
                <td>$390</td>
              </tr>
              <tr>
                <td>40</td>
                <td>Rolento</td>
                <td>6 agosto 2024</td>
                <td>$390</td>
              </tr>
              <tr>
                <td>41</td>
                <td>Hakan</td>
                <td>20 agosto 2024</td>
                <td>$390</td>
              </tr>
              <tr>
                <td>42</td>
                <td>El Fuerte</td>
                <td>3 septiembre 2024</td>
                <td>$390</td>
              </tr>
              <tr>
                <td>43</td>
                <td>Decapre</td>
                <td>17 septiembre 2024</td>
                <td>$390</td>
              </tr>
              <tr>
                <td>44</td>
                <td>Hugo</td>
                <td>1 octubre 2024</td>
                <td>$390</td>
              </tr>
              <tr>
                <td>45</td>
                <td>Guy</td>
                <td>15 octubre 2024</td>
                <td>$390</td>
              </tr>
              <tr>
                <td>46</td>
                <td>Seth</td>
                <td>29 octubre 2024</td>
                <td>$420</td>
              </tr>
              <tr>
                <td>47</td>
                <td>Rufus</td>
                <td>12 noviembre 2024</td>
                <td>$420</td>
              </tr>
              <tr>
                <td>48</td>
                <td>Urien</td>
                <td>26 noviembre 2024</td>
                <td>$420</td>
              </tr>
              <tr>
                <td>49</td>
                <td>Sean</td>
                <td>10 diciembre 2024</td>
                <td>$420</td>
              </tr>
              <tr>
                <td>50</td>
                <td>Laura</td>
                <td>24 diciembre 2024</td>
                <td>$420</td>
              </tr>
              <tr>
                <td>51</td>
                <td>Oro</td>
                <td>7 enero 2025</td>
                <td>$420</td>
              </tr>
              <tr>
                <td>52</td>
                <td>Alex</td>
                <td> 2025</td>
                <td>$</td>
              </tr>
              <tr>
                <td>53</td>
                <td>Necro</td>
                <td> 2025</td>
                <td>$</td>
              </tr>
              <tr>
                <td>54</td>
                <td>Q</td>
                <td>2025</td>
                <td>$</td>
              </tr>
              <tr>
                <td>55</td>
                <td>Kolin</td>
                <td>2025</td>
                <td>$</td>
              </tr>
              <tr>
                <td>56</td>
                <td>Rashid</td>
                <td>2025</td>
                <td>$</td>
              </tr>
              <tr>
                <td>57</td>
                <td>Gill</td>
                <td>2025</td>
                <td>$</td>
              </tr>
              <tr>
                <td>58</td>
                <td>Birdie</td>
                <td>2025</td>
                <td>$</td>
              </tr>
              <tr>
                <td>59</td>
                <td>Necalli</td>
                <td>2025</td>
                <td>$</td>
              </tr>
              <tr>
                <td>60</td>
                <td>F.A.N.G</td>
                <td>2025</td>
                <td>$</td>
              </tr>

              <tr>
                <td>61</td>
                <td>Menat</td>
                <td>2025</td>
                <td>$</td>
              </tr>
              <tr>
                <td>62</td>
                <td>Falke</td>
                <td>2025</td>
                <td>$</td>
              </tr>
              <tr>
                <td>63</td>
                <td>G</td>
                <td>2025</td>
                <td>$</td>
              </tr>
              <tr>
                <td>64</td>
                <td>Remy</td>
                <td>2025</td>
                <td>$</td>
              </tr>
              <tr>
                <td>65</td>
                <td>Twelve</td>
                <td>2025</td>
                <td>$</td>
              </tr>
              <tr>
                <td>66</td>
                <td>Ed</td>
                <td>2025</td>
                <td>$</td>
              </tr>
              <tr>
                <td>67</td>
                <td>Zeku</td>
                <td>2025</td>
                <td>$</td>
              </tr>
              <tr>
                <td>68</td>
                <td>Lucia</td>
                <td>2025</td>
                <td>$</td>
              </tr>
              <tr>
                <td>69</td>
                <td>Kage</td>
                <td>2025</td>
                <td>$</td>
              </tr>
              <tr>
                <td>70</td>
                <td>Abigail</td>
                <td>2025</td>
                <td>$</td>
              </tr>
              <tr>
                <td>71</td>
                <td>Sodom</td>
                <td>2025</td>
                <td>$</td>
              </tr>
              <tr>
                <td>72</td>
                <td>Akira</td>
                <td>2025</td>
                <td>$</td>
              </tr>
              <tr>
                <td>73</td>
                <td>Juni</td>
                <td>2025</td>
                <td>$</td>
              </tr>
              <tr>
                <td>74</td>
                <td>Juli</td>
                <td>2025</td>
                <td>$</td>
              </tr>
              <tr>
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
