@extends('layout/layout')

@section('title')
  You Tourism-Lieux Touristiques
@endsection

@section('liste')
  @if ( Auth::user())
    <li><a class="liliens" href="{{ route('ajout-view') }}">Ajouter un lieu</a></li>
  @endif
@endsection

@section('content')
<div id="bigpaf">
  <div id="titrelieu">

    <h1>Visitez nos sites touristiques</h1>

  </div>
  <div>
    <p class="descript">Voici notre sélection de lieux à ne surtout pas manquer dans notre belle région.</p>

    <br />

    <p class="descript">Si vous en connaissez d'autres, n'hésitez pas à vous inscrire et ajouter vos lieux favoris !</p>

  </div>



  @foreach ($lieux as $lieu)
  <div id="paf">

      <a class="img-hover" href="{{ route('single', ['id' => $lieu->id])}}"><img src="{{ Image::url(asset($lieu->path_image . '/' . $lieu->new_name_image), 400, 250,['crop'])}}"/></a>
      <p>{{ $lieu->lieu}}</p>

      <p id="name">{{ $lieu->name }}</p>


  </div>
  @endforeach


  <div id="pagination">{{ $lieux->links() }}</div>


</div>

@endsection
