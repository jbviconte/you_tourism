@extends('layout/layout')

@section('title')
  Formulaire ajout de lieu
@endsection

@section('content')
  <div class="add">

  <p>Ajouter un lieu</p>

     @if ($errors->any())
       <div class="alert alert-danger">
         <ul>
           @foreach ($errors->all() as $error)
             <li>{{ $error }}</li>
           @endforeach
         </ul>
       </div>
     @endif

    {!! Form::open(['route' => 'ajout-action', 'method' => 'post']) !!}

    {!! Form::label('nom', 'Nom du lieu') !!}
    <br>
    {!! Form::text('nom', null, ['class' => 'frenchcaba', 'placeholder' => 'Nom du lieu']) !!}
    {!! $errors->first('nom', '<small class="help-block">:message</small>') !!}
    <br>

    {!! Form::label('description', 'Description') !!}
    <br>
    {!! Form::textarea('description', null, ['class' => 'frenchcaba', 'placeholder' => 'Description du lieu']) !!}
    {!! $errors->first('description', '<small class="help-block">:message</small>') !!}
    <br>

    {{-- {!! Form:label('nom', 'Image du lieu') !!}
    <br> --}}
    {{-- {!! Form::text('image', null, ['class' => 'frenchcaba', 'placeholder' => 'Image du lieu']) !!}
    {!! $errors->first('image', '<small class="help-block">:message</small>') !!} --}}

    {!! Form::submit('Envoyer', ['class' => 'btn btn-success']) !!}

    {!! Form::close() !!}
  </div>

@endsection
