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
  {{ $lieux->links() }}
  @foreach ($lieux as $lieu)
  <div id="paf">

      <a href="{{ route('single', ['id' => $lieu->id])}}"><img src="{{ Image::url(asset($lieu->path_image . '/' . $lieu->new_name_image), 400, 250,['crop'])}}"/></a>
      <p>{{ $lieu->lieu}}</p>

      <p>{{ $lieu->name }}</p>
      {{-- <p><a href="{{ route('single', ['id' => $lieu->id])}}">Voir plus</a></p> --}}

  </div>
  @endforeach
  {{ $lieux->links() }}
  </div>

@endsection
