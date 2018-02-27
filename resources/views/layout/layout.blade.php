<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <link href="https://fonts.googleapis.com/css?family=Eagle+Lake" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Krona+One|Merriweather" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Mukta+Malar" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/flexslider.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/stylefooter.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}"/>
    <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">

  </head>


  <body>


    <header id="menu" class="large">
      <div class="logo">
        <a href="{{ route('home') }}">YouTourism</a>
      </div>

        <div class="wrap">

          <nav>
            <input type="checkbox" id="css-toggle-menu" name="css-toggle-menu">
            <ul id="liens">
              <li><a  class="liliens" href="{{ route('home') }}">Accueil</a></li>
              <li><a  class="liliens" href="{{ route('lieux') }}">Lieux Touristiques</a></li>

              @yield('liste')

              <li><a  class="liliens" href="{{ route('contact-view') }}">Contact</a></li>

              <!-- Authentication Links -->
              @if (Auth::guest())

                <div id=connect>
                  <li><a id="liensco" href="{{ route('login') }}">Se Connecter</a></li>
                  <li><a id="liensco2" href="{{ route('register') }}">S'enregistrer</a></li>
                </div>

                @else
                  @if ( Auth::user()->role == 'admin')
                    <li><a class="liliens" href="{{ route('dashboard') }}">Dashboard</a></li>
                  @endif
                  <li class="dropdown">
                      <a href="{{ route('userpage', Auth::user()->id) }}" id="nameco" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                          {{ Auth::user()->name }} <span class="caret"></span>
                      </a>
                  <li><a class="liliens" href="{{ route('userpage', Auth::user()->id) }}">Profil</a></li>
                  </li>
                      <br />
                  <li>
                    <a href="{{ route('logout') }}" id="deco"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            Se déconnecter
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                    </form>
                  </li>
                @endif
              </ul>
              <label for="css-toggle-menu" id="css-toggle-menu"></label>
        </nav>
    </div>

  <div class="line_height"></div>
</header>


<div class="content wrapp">
    @yield('content')

    <div class="connexion">
        @yield('connexion')
    </div>

    <div class="clear"></div>
</div>

    <!-- boutons réseaux sociaux footer -->
 <footer id="footer">
   {{-- <div class="container"> --}}
     <div class="row-fluid">

       <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12 column-footer">
          <i class="fa fa-angle-down fa-icon-acordeon" aria-hidden="true"></i>
          <h3 class="titrefooter">Menu</h3>
          <div class="contentfooter">
            <p><a href='{{ route('lieux') }}'>Lieux touristiques</a></p>
            <p><a href='{{ route('contact-view') }}'>Contact</a></p>
          </div>
       </div>

       <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12 column-footer">
         <i class="fa fa-angle-down fa-icon-acordeon" aria-hidden="true"></i>
         <h3 class="titrefooter">Informations</h3>
          <div class="contentfooter">
            <p><a href='fail/404'>Politique de confidentialité</a></p>
            <p><a href='fail/404'>Mentions légales</a></p>
            <p><a href='fail/404'>Conditions Generales</a></p>
            <p><i class="far fa-copyright" aria-hidden="true"></i> YouTourism, 2018</p>
          </div>
       </div>

       <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12 column-footer">
         <i class="fa fa-angle-down fa-icon-acordeon" aria-hidden="true"></i>
         <h3 class="titrefooter">Suivez-nous</h3>

          <div class="contentfooter">
           <div class="col-xs-3 col-md-6 col-sm-3">
           <p>Sur facebook</p>
           <img src="{{ asset('icones/facebook.png') }}" alt="facebook" class="icon">
           <p>Sur twitter</p>
           <img src="{{ asset('icones/twitter.png') }}" alt="twitter" class="icon">
           </div>
           <div class="col-xs-3 col-md-6 col-sm-3">
           <p>Sur instagram</p>
           <img src="{{ asset('icones/instagram.png') }}" alt="instagram" class="icon">
           <div class="logo_footer">
             <a class="logo_footer" href="{{ route('home') }}">YouTourism</a>
           </div>
          </div>
         </div>

       </div>

       <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12 column-footer-right">
         <i class="fa fa-angle-down fa-icon-acordeon" aria-hidden="true"></i>
         <h3 class="titrefooter">Contact</h3>
          <div class="contentfooter">

            <div class="contact1">
            <p>YouTourism<br>
            Route de Pont-Audemer<br>
            27260 Epaignes</p>
            </div>

           <div class="contact2">
           <p>Espace de coworking d'Epaignes</p>
          </div>
        </div>
       </div>

       </div>
     {{-- </div> --}}
   </footer>
    {{-- ancien footer --}}
    {{-- <div id="foot_place">
      <div class="logo_footer">
        <a href="{{ route('home') }}">YouTourism</a>
      </div>
      <div id="foot">

    </div>

    <div class="footer_content">
      <p>© YouTourism, 2018</p>
    </div>

    </div> --}}
  </footer>

    @yield('scripts')


  </body>
</html>
