@extends('layout/layout')


@section('title')
  Page 404
@endsection

@section('content')
  <div id="lostpage">
    <h1 class="lostitle">Page 404</h1>
    <p>Vous semblez perdu..<br> la page que vous cherchez n'existe pas ?<br><br>
       Suivez moi, je vais vous montrer <a href="{{ route('home') }}"><span class="lostdir">Le chemin !</span></a></p>
  </div>
@endsection
