@extends('layout/layout')

@section('title')
  YouTourism-Accueil
@endsection
  <link rel="stylesheet" href="css/flexslider.css" />
  <link rel="stylesheet" href="css/style.css" />
@section('content')
  <h1>Accueil</h1>

    <div id="bienvenu">

      <h2>Bienvenue sur YouTourism</h2>

          <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vitae rutrum orci, et aliquet quam. Suspendisse tincidunt posuere dui eget ultrices. Vestibulum eu libero at orci maximus ullamcorper. Quisque convallis dictum sollicitudin. Aenean in odio quis orci suscipit pharetra. Nulla cursus mi mi, bibendum porttitor nisi faucibus nec. Nullam porta elementum enim, nec tempus sapien aliquet id. Curabitur ultrices magna id libero cursus, vel volutpat elit consectetur. Vestibulum dapibus euismod lorem, posuere imperdiet felis posuere sit amet. Nunc nec lobortis orci. Sed aliquet nibh et ornare accumsan. Morbi eu leo et lacus finibus luctus vel id odio. Vivamus dapibus dui in eros suscipit, a facilisis est lacinia. Donec iaculis ipsum metus, ut varius sem consequat non. Phasellus ac nunc nec sem pellentesque euismod id at purus. Fusce elementum quam in fermentum varius.
          </p>
    </div>

<<<<<<< HEAD
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
</div>

<div class="flexslider flexslider_2">
  <ul class="slides">
    <li data-thumb="images/lapointedurozel.jpg">
      <img src="images/lapointedurozel.jpg" />
    </li>
    <li data-thumb="images/lapointe.jpg">
      <img src="images/lapointe.jpg" />
    </li>
    <li data-thumb="images/lerozel.jpg">
      <img src="images/lerozel.jpg" />
    </li>
    <li data-thumb="images/rozel.jpg">
      <img src="images/rozel.jpg" />
    </li>
  </ul>
</div>
=======
<div>Ici un slider image des lieux (lieux recent)</div>
>>>>>>> 259f83d61ed1a136034388d8ce2c12c36dda5b47


<div>
    <p>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vitae rutrum orci, et aliquet quam. Suspendisse tincidunt posuere dui eget ultrices. Vestibulum eu libero at orci maximus ullamcorper. Quisque convallis dictum sollicitudin. Aenean in odio quis orci suscipit pharetra. Nulla cursus mi mi, bibendum porttitor nisi faucibus nec. Nullam porta elementum enim, nec tempus sapien aliquet id. Curabitur ultrices magna id libero cursus, vel volutpat elit consectetur. Vestibulum dapibus euismod lorem, posuere imperdiet felis posuere sit amet. Nunc nec lobortis orci. Sed aliquet nibh et ornare accumsan. Morbi eu leo et lacus finibus luctus vel id odio. Vivamus dapibus dui in eros suscipit, a facilisis est lacinia. Donec iaculis ipsum metus, ut varius sem consequat non. Phasellus ac nunc nec sem pellentesque euismod id at purus. Fusce elementum quam in fermentum varius.
    </p>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="js/jquery.flexslider.js"></script>
<script src="js/slider.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>

<script type="text/javascript">

   // $(function(){
   //    setInterval(function(){
   //       $(".slideshow ul").animate({marginright:-350},500,function(){
   //          $(this).css({marginright:0}).find("li:last").after($(this).find("li:first"));
   //       })
   //    }, 1500);
   // });

   $(".flexslider_1").ready(function() {
     $('.flexslider_1').flexslider({
       animation: "slide",
       animationSpeed: 1,
       slideshowSpeed: 10,
       easing: "linear",
       direction: "vertical",
       pauseOnHover: "Boolean"
     });
   });

   $(".flexslider_2").ready(function() {
     $('.flexslider_2').flexslider({
       animation: "slide",
       controlNav: "thumbnails"
     });
   });
</script>

@endsection
