<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/flexslider.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">



    <header id="menu">
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
                  {{-- @if ( Auth::user()->role == 'admin') --}}
                    <li><a class="liliens" href="{{ route('dashboard') }}">Dashboard</a></li>
                  {{-- @endif --}}
                  <li class="dropdown">
                      <a href="#" id="nameco" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                          {{ Auth::user()->name }} <span class="caret"></span>
                        </a>
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
        
</header>

</head>

    <body>


        <div class="connexion">
            @yield('connexion')
        </div>
      </nav>





    <div class="content">
      @if (session('success'))
        <div class="alert alert-success">
          {{ session('success') }}
        </div>
      @endif
      @yield('content')
    </div>



  </body>
</html>
