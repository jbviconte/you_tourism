<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <link href="https://fonts.googleapis.com/css?family=Eagle+Lake" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/flexslider.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">

  </head>


  <body>


    <header id="menu" class="large">
      <div class="logo">
        <a href="{{ route('home') }}">YouTourism</a>
      </div>
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
        </nav>
    </div>
  <div class="line_height"></div>
</header>


    <div class="content wrap">

      @if (session('success'))
        <div class="alert-alert-success">
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
      <div id="foot">
        <ul>
          <li><a  href="{{ route('contact-view') }}">Contact</a></li>

          <a href="https://fr-fr.facebook.com/"><img src="{{ asset('images/resoc/facebook.png') }}" alt="bouton facebook" /></a>
          <a href="https://plus.google.com/discover?hl=fr"><img src="{{ asset('images/resoc/google.png') }}" alt="bouton facebook" /></a>
          <a href="https://twitter.com/?lang=fr"><img src="{{ asset('images/resoc/twitter.png') }}" alt="bouton facebook" /></a>

        </ul>
      </div>

    </footer>

    @yield('scripts')


  </body>
</html>
