@extends('layout/layout')

@section('title')
  You Tourism-Lieux Touristiques
@endsection

@section('liste')
<li><a class="liliens" href="{{ route('ajout-view') }}">Ajouter un lieu</a></li>
@endsection

@section('content')

  @foreach ($lieux as $lieu)
<div id="paf">

    <img src="{{ Image::url(asset($lieu['path_image'] . '/' . $lieu['new_name_image']), 500, 500)}}"/>
    <h1>{{ $lieu['lieu']}}</h1>

    <!-- <p>{{ $lieu['content'] }}</p> -->
    <!-- <p><a href="{{ route('single', ['id' => $lieu->id])}}">Voir plus</a></p> -->

  </div>
  @endforeach

@endsection
