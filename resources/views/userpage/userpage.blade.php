@extends('layout/layout')

@section('title')
  Profil (Edit/Update)
@endsection

@section('content')

  <p>Profil (Modification)</p>
    {{-- {!! csrf_field() !!} --}}
    <br>

    {!! Form::open(['route' => ['userpage-update-action', $user->id], 'method' => 'put']) !!}

    {{-- {!! Form::label() !!} --}}
    {!! Form::label('pseudo') !!}
    <br>
    {!! Form::text('pseudo', null, ['class' => 'dede', 'placeholder' => 'votre nom']) !!}
    {!! $errors->first('nom', '<small class="help-block">:message</small>') !!}
    <br><br>
    {!! Form::label('email') !!}
    <br>
    {!! Form::text('email', null, ['class' => 'dede', 'placeholder' => 'votre email']) !!}
    {!! $errors->first('nom', '<small class="help-block">:message</small>') !!}
    <br><br>
    {!! Form::label('mot de passe actuel') !!}
    <br>
    {!! Form::text('password', null, ['class' => 'dede', 'placeholder' => 'mot de passe actuel']) !!}
    {!! $errors->first('nom', '<small class="help-block">:message</small>') !!}
    <br><br>
    {!! Form::label('nouveau mot de passe') !!}
    <br>
    {!! Form::text('password', null, ['class' => 'dede', 'placeholder' => 'nouveau mot de passe']) !!}
    {!! $errors->first('nom', '<small class="help-block">:message</small>') !!}
    <br><br>
    {!! Form::label('confirmation') !!}
    <br>
    {!! Form::text('password', null, ['class' => 'dede', 'placeholder' => 'confirmation']) !!}
    {!! $errors->first('nom', '<small class="help-block">:message</small>') !!}
    <br><br>
    {{-- {!! Form::image('avatar', null, ['class' => 'dede', 'placeholder' => 'image de profil']) !!}
    {!! $errors->first('nom', '<small class="help-block">:message</small>') !!} --}}
    <br><br>
    {!! Form::submit('Click me', ['class' => 'btn btn-success']) !!}

    {!! Form::close() !!}

 @endsection
