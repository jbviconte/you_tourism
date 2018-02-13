@extends('layout/layout')

@section('title')
  You Tourism-Description du lieu
@endsection

@section('content')

  @foreach ($lieux as $lieu)
  <div class="lieu">

    <h1>{{ $lieu['lieu']}}</h1>
    <p>{{ $lieu['content']}}</p>


  </div>
  @endforeach

@endsection
