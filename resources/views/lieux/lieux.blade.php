@extends('layout/layout')

@section('title')
  You Tourism-Lieux Touristique
@endsection

@section('liste')
<li><a href="{{ route('ajout-view') }}">Ajouter un lieu</a></li>
@endsection

@section('content')
<div id="pad">
  @foreach ($lieux as $lieu)
  <div class="lieu">
    <h1>{{ $lieu['lieu']}}</h1>
    <p>{{ $lieu['content']}}</p>
    <p><a href="{{ route('single', ['id' => $lieu->id])}}">voir plus</a></p>

  </div>
</div>
  @endforeach

@endsection
