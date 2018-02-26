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

  <div id="pagination">{{ $lieux->links() }}</div>

  <div class="greatpaf">
    @foreach ($lieux as $lieu)
      <div id="paf">
        <a class="img-hover" href="{{ route('single', ['id' => $lieu->id])}}"><img src="{{ Image::url(asset($lieu->path_image . '/' . $lieu->new_name_image),700,300,['crop'])}}"/></a>
        <div class="parag">
          <p>{{ $lieu->lieu}}</p>
        </div>
        {{-- <p id="name">{{ $lieu->name }}</p> --}}
      </div>
    @endforeach
  </div>

  <div id="pagination">{{ $lieux->links() }}</div>


</div>

@endsection
