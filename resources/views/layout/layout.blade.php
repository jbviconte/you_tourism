<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="css/flexslider.css" />
    <link rel="stylesheet" href="css/style.css">



    <header id="menu">
      <nav>
      <ul id="liens">
        <li><a href="{{ route('home') }}">Accueil</a></li>
        <li><a href="{{ route('lieux') }}">Lieux Touristique</a></li>

        <li><a href="{{ route('ajout-view') }}">Ajouter un lieu</a></li>

        <li><a href="{{ route('contact-view') }}">Contact</a></li>

              <!-- Authentication Links -->
              @if (Auth::guest())
                  <li><a id="liensco" href="{{ route('login') }}">Se connecter</a></li>
                  <li><a id="liensco2" href="{{ route('register') }}">S'enregistrer</a></li>
                @else
                  {{-- @if ( Auth::user()->role == 'admin') --}}
                    <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
                  {{-- @endif --}}
                  <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                          {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <br><br>
                        <a href="{{ route('logout') }}"
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
</header>

</head>

    <body>

        <div class="connexion">
            @yield('connexion')
        </div>
      </nav>





    <div class="content">
      @yield('content')
    </div>



  </body>
</html>
