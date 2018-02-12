@extends('layout/layout')

@section('title')
  YouTourism-Accueil
@endsection

  <link rel="stylesheet" href="css/flexslider.css" />
  <link rel="stylesheet" href="css/style.css" />


@section('content')


<div id="wrapper">
  <h1>Accueil</h1>

    <div id="bienvenu">

      <h2>Bienvenue sur YouTourism</h2>

        <h3>Les trésors Normands souvent oublié se dévoile a vous !</h3>

          <p>Trés souvent la Normandie est associé aux grand lieux touristique, tel que le Mont Saint-Michel ou c'est grande ville comme Le Havre, a tel point que nous en oublions c'est merveilleux endroit bien caché qui donne a la normandie grâce et beauté.</p>

          <p>Divers sont les paysages et nombreuses sont les nouvelles découverte.</p>

          <p>Aventurier, grand voyageur ou simplement de passage, Voici la Normandie tel que personne ne la jamais vu (sauf les normands bien sur !).</p>
    </div>


<div class="flexslider flexslider_1">
  <ul class="slides">
    <li>
      <a href="{{ route('home') }}"><img src="images/lapointedurozel.jpg" /></a>
    </li>
    <li>
      <a href="{{ route('home') }}"><img src="images/lapointe.jpg" /></a>
    </li>
    <li>
      <a href="{{ route('home') }}"><img src="images/lerozel.jpg" /></a>
    </li>
    <li>
<<<<<<< HEAD
      <a href="{{ route('home') }}"><img src="images/rozel.jpg" /></a>
    </li>
    <li>
      <a href="{{ route('home') }}"><img src="images/ciel.jpg" /></a>
    </li>
  </ul>
</div>


  <div>
      <p>
      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vitae rutrum orci, et aliquet quam. Suspendisse tincidunt posuere dui eget ultrices. Vestibulum eu libero at orci maximus ullamcorper. Quisque convallis dictum sollicitudin. Aenean in odio quis orci suscipit pharetra. Nulla cursus mi mi, bibendum porttitor nisi faucibus nec. Nullam porta elementum enim, nec tempus sapien aliquet id. Curabitur ultrices magna id libero cursus, vel volutpat elit consectetur. Vestibulum dapibus euismod lorem, posuere imperdiet felis posuere sit amet. Nunc nec lobortis orci. Sed aliquet nibh et ornare accumsan. Morbi eu leo et lacus finibus luctus vel id odio. Vivamus dapibus dui in eros suscipit, a facilisis est lacinia. Donec iaculis ipsum metus, ut varius sem consequat non. Phasellus ac nunc nec sem pellentesque euismod id at purus. Fusce elementum quam in fermentum varius.
      </p>
  </div>

=======
      <img src="images/rozel.jpg" />
    </li>
  </ul>

<div id="degrade">
    <p>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vitae rutrum orci, et aliquet quam. Suspendisse tincidunt posuere dui eget ultrices. Vestibulum eu libero at orci maximus ullamcorper. Quisque convallis dictum sollicitudin. Aenean in odio quis orci suscipit pharetra. Nulla cursus mi mi, bibendum porttitor nisi faucibus nec. Nullam porta elementum enim, nec tempus sapien aliquet id. Curabitur ultrices magna id libero cursus, vel volutpat elit consectetur. Vestibulum dapibus euismod lorem, posuere imperdiet felis posuere sit amet. Nunc nec lobortis orci. Sed aliquet nibh et ornare accumsan. Morbi eu leo et lacus finibus luctus vel id odio. Vivamus dapibus dui in eros suscipit, a facilisis est lacinia. Donec iaculis ipsum metus, ut varius sem consequat non. Phasellus ac nunc nec sem pellentesque euismod id at purus. Fusce elementum quam in fermentum varius.
    </p>
>>>>>>> 6d16b7acfd0297bada4ace8990bd5960f1bc6f41
</div>


<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="js/jquery.flexslider.js"></script>
<script src="{{ asset('js/slider.js') }}"></script>
<script type="text/javascript">
<<<<<<< HEAD
=======


   $(".flexslider_1").ready(function() {
     $('.flexslider_1').flexslider({
       animation: "slide",
       controlNav: "thumbnails",
       animationSpeed: 5000,
       slideshowSpeed: 3000,
       easing: "linear",
       //direction: "vertical",
     });
   });
</script>

</div>


>>>>>>> 6d16b7acfd0297bada4ace8990bd5960f1bc6f41
@endsection
