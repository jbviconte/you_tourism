@extends('layout/layout')

@section('title')
  formulaire ajout de lieu
@endsection

@section('content')

  <p>Ajouter un lieu</p>

    {!! Form::open(['route' => 'ajout-action', 'method' => 'post']) !!}

    {!! Form::text('nom', null, ['class' => 'frenchcaba', 'placeholder' => 'Nom du lieu']) !!}
    {!! $errors->first('nom', '<small class="help-block">:message</small>') !!}

    {!! Form::textarea('description', null, ['class' => 'frenchcaba', 'placeholder' => 'description du lieu']) !!}
    {!! $errors->first('description', '<small class="help-block">:message</small>') !!}

    {{-- {!! Form::text('image', null, ['class' => 'frenchcaba', 'placeholder' => 'image du lieu']) !!}
    {!! $errors->first('image', '<small class="help-block">:message</small>') !!} --}}

    {!! Form::submit('Envoyer', ['class' => 'btn btn-success']) !!}

    {!! Form::close() !!}

@endsection
