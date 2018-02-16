<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/flexslider.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

<<<<<<< HEAD
  </head>


  <body>


=======
>>>>>>> f7ceec40796dd3e964e5ac3bd09c9065aad37cac
    <header id="menu">
      <div class="wrap" style="background_color:lime;">


      <nav>
      <ul id="liens">
        <li><a  class="liliens" href="{{ route('home') }}">Accueil</a></li>
        <li><a  class="liliens" href="{{ route('lieux') }}">Lieux Touristiques</a></li>

        @yield('liste')

        <li><a  class="liliens" href="{{ route('contact-view') }}">Contact</a></li>

              <!-- Authentication Links -->
              @if (Auth::guest())
                  <li><a id="liensco" href="{{ route('login') }}">Se connecter</a></li>
                  <li><a id="liensco2" href="{{ route('register') }}">S'enregistrer</a></li>
                @else
                  @if ( Auth::user()->role == 'admin')
                    <li><a class="liliens" href="{{ route('dashboard') }}">Dashboard</a></li>
                  @endif
                  <li class="dropdown">
                      <a href="#" id="nameco" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                          {{ Auth::user()->name }} <span class="caret"></span>
                        </a>
                        <li><a class="liliens" href="{{ route('userpage') }}">Profil</a></li>
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
<<<<<<< HEAD
        </nav>
        </div>
=======

</header>
>>>>>>> f7ceec40796dd3e964e5ac3bd09c9065aad37cac

</header>



        <div class="connexion">
            @yield('connexion')
        </div>


<<<<<<< HEAD




    <div class="content wrap">
=======
    <div class="content">
>>>>>>> f7ceec40796dd3e964e5ac3bd09c9065aad37cac
      @if (session('success'))
        <div class="alert alert-success">
          {{ session('success') }}
        </div>
      @endif
      @yield('content')

      <div class="clear"></div>
    </div>


    <footer>
      <div class="wrap">
<p>footer</p>
      </div>
    </footer>



  </body>
</html>
