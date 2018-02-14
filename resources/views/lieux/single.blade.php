@extends('layout/layout')

@section('title')
  You Tourism-Description du lieu
@endsection

@section('content')

  @foreach ($lieux as $lieu)
  <div class="lieu">

    <h1>{{ $lieu['lieu']}}</h1>
    <img src="{{ asset( $lieu['path_image'] . '/' . $lieu['new_name_image']) }}"/>
    <p>{{ $lieu['content']}}</p>


  </div>
  @endforeach

@endsection
