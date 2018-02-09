<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
  </head>
  <body>

    <header id="menu">

      <nav>
        <ul>
          <li><a href="{{ route('home') }}">Accueil</a></li>
          {{-- <li><a href="{{ route('lieux') }}">Lieux
            <ul><li><a href="{{ route('add_lieux') }}">Ajouter un lieux</a></li></ul>
          </a></li> --}}
          <li><a href="{{ route('contact-view') }}">Contact</a></li>
          <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
        </ul>
=======

      <ul>
        <li><a href="{{ route('home') }}">Accueil</a></li>

        {{-- <li><a href="{{ route('lieux') }}">Lieux --}}
           <ul><li><a href="{{ route('ajout-view') }}">Ajouter un lieux</a></li></ul>
         {{-- </a></li> --}}

        <li><a href="{{ route('contact-view') }}">Contact</a></li>
        <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
      </ul>
>>>>>>> 563d98e5a45eb5313ca991f4164d0a0cd6504504

        <ul class="nav navbar-nav navbar-right">
              <!-- Authentication Links -->
              @if (Auth::guest())
                  <li><a href="{{ route('login') }}">Se connecter</a></li>
                  <li><a href="{{ route('register') }}">S'enregistrer</a></li>
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
                                    Logout
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>

                  </li>
                @endif
        </ul>
      <nav>

    </header>

    <div class="content">
      @yield('content')
    </div>

  </body>
</html>
