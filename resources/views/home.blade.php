@extends('layout/layout')

@section('title')
  YouTourism-Accueil
@endsection
<<<<<<< HEAD
  <link rel="stylesheet" href="css/flexslider.css" />
  <link rel="stylesheet" href="css/style.css" />
=======
>>>>>>> 8b3fca65f374fc4631a55d4765fb300fdbd014d5
@section('content')

<div id="wrapper">
  <h1>Accueil</h1>

    <div id="bienvenu">

      <h2>Bienvenue sur YouTourism</h2>

          <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vitae rutrum orci, et aliquet quam. Suspendisse tincidunt posuere dui eget ultrices. Vestibulum eu libero at orci maximus ullamcorper. Quisque convallis dictum sollicitudin. Aenean in odio quis orci suscipit pharetra. Nulla cursus mi mi, bibendum porttitor nisi faucibus nec. Nullam porta elementum enim, nec tempus sapien aliquet id. Curabitur ultrices magna id libero cursus, vel volutpat elit consectetur. Vestibulum dapibus euismod lorem, posuere imperdiet felis posuere sit amet. Nunc nec lobortis orci. Sed aliquet nibh et ornare accumsan. Morbi eu leo et lacus finibus luctus vel id odio. Vivamus dapibus dui in eros suscipit, a facilisis est lacinia. Donec iaculis ipsum metus, ut varius sem consequat non. Phasellus ac nunc nec sem pellentesque euismod id at purus. Fusce elementum quam in fermentum varius.
          </p>
    </div>

<<<<<<< HEAD
=======
{{-- <div><div class="slideshow slideshow_1">
	<ul>
		<li><img src="images/lapointedurozel.jpg"/></li>
		<li><img src="images/lapointe.jpg"/></li>
		<li><img src="images/lerozel.jpg"/></li>
		<li><img src="images/rozel.jpg"/></li>
	</ul>
</div></div> --}}
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
  </ul>
>>>>>>> 7dc3162e4c0953654cd7af242e49bbdcbbe65ed1
</div>

<div class="flexslider flexslider_1">
  <ul class="slides">

    <li data-thumb="images/lapointedurozel.jpg">
      <a href="home"><img src="images/lapointedurozel.jpg" /></a>
    </li>

    <li data-thumb="images/lapointe.jpg">
      <a href="home"><img src="images/lapointe.jpg" /></a>
    </li>

    <li data-thumb="images/lerozel.jpg">
      <a href="home"><img src="images/lerozel.jpg" /></a>
    </li>

    <li data-thumb="images/rozel.jpg">
      <a href="home"><img src="images/rozel.jpg" /></a>
    </li>

  </ul>
</div>
<<<<<<< HEAD
=======

<div>Ici un slider image des lieux (lieux recent)</div>


>>>>>>> 7dc3162e4c0953654cd7af242e49bbdcbbe65ed1

<div>
    <p>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vitae rutrum orci, et aliquet quam. Suspendisse tincidunt posuere dui eget ultrices. Vestibulum eu libero at orci maximus ullamcorper. Quisque convallis dictum sollicitudin. Aenean in odio quis orci suscipit pharetra. Nulla cursus mi mi, bibendum porttitor nisi faucibus nec. Nullam porta elementum enim, nec tempus sapien aliquet id. Curabitur ultrices magna id libero cursus, vel volutpat elit consectetur. Vestibulum dapibus euismod lorem, posuere imperdiet felis posuere sit amet. Nunc nec lobortis orci. Sed aliquet nibh et ornare accumsan. Morbi eu leo et lacus finibus luctus vel id odio. Vivamus dapibus dui in eros suscipit, a facilisis est lacinia. Donec iaculis ipsum metus, ut varius sem consequat non. Phasellus ac nunc nec sem pellentesque euismod id at purus. Fusce elementum quam in fermentum varius.
    </p>
</div>


<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="js/jquery.flexslider.js"></script>
<script type="text/javascript">


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

@endsection
