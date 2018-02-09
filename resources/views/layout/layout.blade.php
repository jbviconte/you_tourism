<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
  </head>
  <body>
    <header>
      <nav>
        <ul>
          <li><a href="{{ route('contact-view') }}">Contact</a></li>
        </ul>
      </nav>
    </header>

    <div class="content">
      @yield('content')
    </div>

  </body>
</html>
