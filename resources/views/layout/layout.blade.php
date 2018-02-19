<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/flexslider.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

  </head>


  <body>


    <header id="menu">
      <div class="wrap">


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
      </nav>
    </header>
  <body>

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
          <li><a href="http://twitter.com/share" class="twitter-share-button" data-count="vertical" data-via="InfoWebMaster">Tweet</a></li>
          <li><iframe src="http://www.facebook.com/plugins/like.php?href=http://www.example.com/page.html&layout=box_count&show_faces=true&width=65&action=like&font=arial&colorscheme=light&height=65" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:65px; height:65px; margin-top:3px;" allowTransparency="true"></iframe></li>
          <li><a name="fb_share" type="box_count" share_url="http://www.example.com/page.html"></a></li>
          <li><script type="in/share" data-counter="right"></script></li>
          <li><g:plusone size="tall"></g:plusone></li>
          <li><script type="text/javascript" src="http://platform.linkedin.com/in.js"></script></li>
          <li><script type="text/javascript" src="https://apis.google.com/js/plusone.js">
                  {lang: 'fr'}
              </script></li>
        </ul>



      </div>
    </footer>


        <script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
        <script src="http://static.ak.fbcdn.net/connect.php/js/FB.Share" type="text/javascript"></script>
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        @yield('scripts')

  </body>
</html>
