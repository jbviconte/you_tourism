@extends('layout/layout')

@section('title')
  You Tourism-Lieux Touristique
@endsection


@section('content')
  @foreach ($lieux as $lieu)

    <h1>{{ $lieu['lieu']}}</h1>
    <p>{{ $lieu['content']}}</p>

  @endforeach

@endsection
