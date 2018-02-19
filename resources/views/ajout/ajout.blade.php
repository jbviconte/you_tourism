@extends('layout/layout')

@section('title')
  Formulaire ajout de lieu
@endsection

@section('content')
  <div class="add">

  <p>Ajouter un lieu</p>


    {!! Form::open(['route' => 'ajout-action', 'method' => 'post', 'files' => true]) !!}

    {!! Form::label('lieu', 'Nom du lieu') !!}
    <br>
    {!! Form::text('lieu', null, ['class' => 'frenchcaba', 'placeholder' => 'Nom du lieu']) !!}
    {!! $errors->first('lieu', '<small class="help-block">:message</small>') !!}
    <br>

    {!! Form::label('content', 'Description') !!}
    <br>
    {!! Form::textarea('content', null, ['class' => 'frenchcaba', 'placeholder' => 'Description du lieu']) !!}
    {!! $errors->first('content', '<small class="help-block">:message</small>') !!}
    <br>

    {!! Form::file('image') !!}
    {!! $errors->first('image','<small class="help-block">:message</small>') !!}

    {!! Form::submit('Envoyer', ['class' => 'btn btn-success']) !!}
    
    {!! Form::close() !!}
  </div>

@endsection
