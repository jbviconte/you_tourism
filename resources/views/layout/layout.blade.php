<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/flexslider.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}"/>

  </head>


  <body>


    <header id="menu" class="large">
      <div class="wrap">


      <nav>
        <ul id="liens">
        <li><a  class="liliens" href="{{ route('home') }}">Accueil</a></li>
        <li><a  class="liliens" href="{{ route('lieux') }}">Lieux Touristiques</a></li>

        @yield('liste')

        <li><a  class="liliens" href="{{ route('contact-view') }}">Contact</a></li>

              <!-- Authentication Links -->
              @if (Auth::guest())
                <div id=connect>
                  <li><a class="liensco" href="{{ route('login') }}">Se connecter</a></li>
                  <li><a class="liensco" href="{{ route('register') }}">S'enregistrer</a></li>
                </div>
                @else
                  @if ( Auth::user()->role == 'admin')
                    <li><a class="liliens" href="{{ route('dashboard') }}">Dashboard</a></li>
                  @endif
                  <li class="dropdown">
                      <a href="#" id="nameco" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
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
        </nav>
    </div>

</header>


    <div class="content wrap">

      @if (session('success'))
        <div class="alert alert-success">
          {{ session('success') }}
        </div>
      @endif
      @yield('content')
      <div class="connexion">
          @yield('connexion')
      </div>

      <div class="clear"></div>
    </div>

    <!-- boutons réseaux sociaux footer -->
    <footer>
      <div class="wrap">
        <ul>
          <li><a  href="{{ route('contact-view') }}">Contact</a></li>

          <a href="https://fr-fr.facebook.com/"><img src="{{ asset('images/resoc/facebook.png') }}" alt="bouton facebook" /></a>
          <a href="https://plus.google.com/discover?hl=fr"><img src="{{ asset('images/resoc/google.png') }}" alt="bouton facebook" /></a>
          <a href="https://twitter.com/?lang=fr"><img src="{{ asset('images/resoc/twitter.png') }}" alt="bouton facebook" /></a>
          <!-- <li><g:plusone size="tall"></g:plusone></li>
          <li><script type="text/javascript" src="http://platform.linkedin.com/in.js"></script></li>
          <li><script type="text/javascript" src="https://apis.google.com/js/plusone.js">/</script></li>
          <li><script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script></li>
          <li><script src="http://static.ak.fbcdn.net/connect.php/js/FB.Share" type="text/javascript"></script></li> -->
                  <!-- {lang: 'fr'} -->

        </ul>



      </div>
    </footer>

        {{-- <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script> --}}


  </body>
</html>
