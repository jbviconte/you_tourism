<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
  </head>
  <body>

    <header id="menu">
      <ul>
        <li><a href="{{ route('home') }}">Acceuil</a></li>
        {{-- <li><a href="{{ route('lieux') }}">Lieux
           <ul><li><a href="{{ route('add_lieux') }}">Ajouter un lieux</a></li></ul>
         </a></li> --}}
      </ul>
    </header>

    <div class="content">
      @yield('content')
    </div>

  </body>
</html>