@extends('layout/layout')

@section('title')
  Profil (Edit/Update)
@endsection

@section('content')

  <p>Profil (Modification)</p>
    {{-- {!! csrf_field() !!} --}}

    {!! Form::open(['route' => 'userpage-update', 'method' => 'post']) !!}

    {{-- {!! Form::label() !!} --}}
    {!! Form::text('pseudo', null, ['class' => 'dede', 'placeholder' => 'votre nom']) !!}
    {!! $errors->first('nom', '<small class="help-block">:message</small>') !!}
    <br><br>
    {!! Form::text('email', null, ['class' => 'dede', 'placeholder' => 'votre email']) !!}
    {!! $errors->first('nom', '<small class="help-block">:message</small>') !!}
    <br><br>
    {!! Form::image('avatar', null, ['class' => 'dede', 'placeholder' => 'image de profil']) !!}
    {!! $errors->first('nom', '<small class="help-block">:message</small>') !!}
    <br><br>
    {!! Form::submit('Click me', ['class' => 'btn btn-success']) !!}

    {!! Form::close() !!}

 @endsection
