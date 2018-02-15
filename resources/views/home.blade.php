@extends('layout/layout')

@section('title')
  YouTourism-Accueil
@endsection

@section('content')

  <div class="flexslider flexslider_1">
    <ul class="slides">
      <li>
        <img src="images/la-hague.jpg" />
      </li>
      <li>
        <img src="images/bagnoles-de-l-orne.jpg" />
      </li>
      <li>
        <img src="images/la-colline-aux-oiseaux.jpg" />
      </li>
      <li>
        <img src="images/rozel.jpg" />
      </li>
      <li>
        <img src="images/Pont-Audemer.jpg" />
      </li>
      <li>
        <img src="images/theatre-romain-lillebone.jpg" />
      </li>
      <li>
        <img src="images/le-moulin-de-vernon.jpg" />
      </li>
      <li>
        <img src="images/st-germain-de-la-coudre.jpg" />
      </li>
      <li>
        <img src="images/Veules-les-roses.jpg" />
      </li>

      @foreach ($lieux as $lieu)
            <li><img src="{{ Image::url(asset($lieu['path_image'] . '/' . $lieu['new_name_image']) ,600,200)}}"/></li>
      @endforeach

    </ul>
  </div>

<div id="wrapper">
  <h1>Accueil</h1>

    <div id="bienvenu">

      <h2>Bienvenue sur YouTourism</h2>

        <h3>Les trésors normands, souvent oubliés, se dévoilent à vous !</h3>

          <p class="intro">Trés souvent la Normandie est associée aux grands lieux touristique, tels que le Mont Saint-Michel ou ces grandes villes comme Le Havre, à tel point que nous en oublions ces merveilleux lieux bien cachés qui donnent à la Normandie grâce et beauté.</p>

          <p class="intro">Divers sont les paysages et nombreuses sont les nouvelles découvertes.</p>

          <p class="intro">Aventurier, grand voyageur ou simplement de passage, voici la Normandie telle que personne ne l'a jamais vue (sauf les Normands bien sûr !).</p>
    </div>


  <div>
    <h4>Destination Normandie</h4>

      <p class="article1">Les destinations sont nombreuses mais chacune de nos regions nous offre des merveilles bien particuliere a leur environnement et leur climat.</p>
      <p class="article1">Pour ceux qui hesite encore, sachez une chose importante : Oui il pleut souvent on l'admet ! mais c'est souvent cette pluie qui créer les plus belles vue et marque l'esprit bien plus qu'avec le soleil.</p>

  </div>



    @foreach ($lieux as $lieu)
<<<<<<< HEAD


          <h1 id="h1">{{ $lieu['lieu'] }}</h1>
          <img src="{{ Image::url(asset($lieu['path_image'] . '/' . $lieu['new_name_image']) ,50,50)}}"/>

=======

>>>>>>> 26b2cd4e5fd3bc6900715017144a5f91de03c2eb
<div id="access">

          <img class="imglieu" src="{{ Image::url(asset($lieu['path_image'] . '/' . $lieu['new_name_image']) ,400,400)}}"/>
          <h1 class="h1">{{ $lieu['lieu'] }}</h1>
</div>
    @endforeach


<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="js/jquery.flexslider.js"></script>
<script src="{{ asset('js/slider.js') }}"></script>
{{-- <script type="text/javascript"> --}}

@endsection
