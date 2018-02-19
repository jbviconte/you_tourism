@extends('layout/layout')

@section('title')
  Profil (Edit/Update)
@endsection

@section('content')

  <h1>{{ $users['name'] }}</h1>

  <p>{{ $users['email'] }}</p>

  <a href="{{ route('userpage-update', $users['id']) }}">Modifier profil</a>



@endsection
