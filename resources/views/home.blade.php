@extends('layout/layout')

@section('title')
  YouTourism-Accueil
@endsection

  <link rel="stylesheet" href="css/flexslider.css" />
  <link rel="stylesheet" href="css/style.css" />


@section('content')

  <div class="flexslider flexslider_1">
    <ul class="slides">
      <li>
        <img src="images/lapointedurozel.jpg" />
      </li>
      <li>
        <img src="images/lapointe.jpg" />
      </li>
      <li>
        <img src="images/lerozel.jpg" />
      </li>
      <li>
        <img src="images/rozel.jpg" />
      </li>
      <li>
        <img src="images/ciel.jpg" />
      </li>
    </ul>
  </div>

<div id="wrapper">
  <h1>Accueil</h1>

    <div id="bienvenu">

      <h2>Bienvenue sur YouTourism</h2>

        <h3>Les trésors normands, souvent oubliés, se dévoilent à vous !</h3>

          <p>Trés souvent la Normandie est associée aux grands lieux touristique, tels que le Mont Saint-Michel ou ces grandes villes comme Le Havre, à tel point que nous en oublions ces merveilleux lieux bien cachés qui donnent à la Normandie grâce et beauté.</p>

          <p>Divers sont les paysages et nombreuses sont les nouvelles découvertes.</p>

          <p>Aventurier, grand voyageur ou simplement de passage, voici la Normandie telle que personne ne l'a jamais vue (sauf les Normands bien sûr !).</p>
    </div>


  <div>
      <p>
      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vitae rutrum orci, et aliquet quam. Suspendisse tincidunt posuere dui eget ultrices. Vestibulum eu libero at orci maximus ullamcorper. Quisque convallis dictum sollicitudin. Aenean in odio quis orci suscipit pharetra. Nulla cursus mi mi, bibendum porttitor nisi faucibus nec. Nullam porta elementum enim, nec tempus sapien aliquet id. Curabitur ultrices magna id libero cursus, vel volutpat elit consectetur. Vestibulum dapibus euismod lorem, posuere imperdiet felis posuere sit amet. Nunc nec lobortis orci. Sed aliquet nibh et ornare accumsan. Morbi eu leo et lacus finibus luctus vel id odio. Vivamus dapibus dui in eros suscipit, a facilisis est lacinia. Donec iaculis ipsum metus, ut varius sem consequat non. Phasellus ac nunc nec sem pellentesque euismod id at purus. Fusce elementum quam in fermentum varius.
      </p>
  </div>


<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="js/jquery.flexslider.js"></script>
<script src="{{ asset('js/slider.js') }}"></script>
{{-- <script type="text/javascript"> --}}

@endsection
