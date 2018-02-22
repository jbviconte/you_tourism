@extends('layout/layout')

@section('title')
  Contact
@endsection

@section('content')
<div id="contact_pad">
  <div class="dede">
      <div class="panel-heading">Nous contacter</div>
      <p class="parag">Une idée ? Une suggestion ? Une remarque ?</p>
      <p class="parag">Ou tout simplement besoin d'aide ?</p>
      <p class="parag">Prenez le temps de remplir le formulaire qui suit, notre équipe vous répondra dans les meilleurs délais.</p>
      <br />
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif

    {!! Form::open(['route' => 'contact-action', 'method' => 'post']) !!}

    {!! Form::label('nom', 'Nom') !!}
    <br />
    {!! Form::text('nom',null,['class' => 'dodo', 'placeholder' => 'Votre nom']) !!}
    {!! $errors->first('nom','<small class="help-block">:message</small>') !!}
    <br />

    {!! Form::label('email', 'Email') !!}
    <br />
    {!! Form::email('email', null, ['class' => 'dodo', 'placeholder' => 'Votre email']); !!}
    {!! $errors->first('email','<small class="help-block">:message</small>') !!}
    <br />

    {!! Form::label('sujet', 'Sujet') !!}
    <br />
    {!! Form::text('sujet',null,['class' => 'dodo', 'placeholder' => 'Votre sujet']) !!}
    {!! $errors->first('sujet','<small class="help-block">:message</small>') !!}
    <br />

    {!! Form::label('message', 'Message') !!}
    <br />
    {!! Form::textarea('message', null, ['class' => 'dodo', 'placeholder' => 'Votre message']) !!}
    {!! $errors->first('message','<small class="help-block">:message</small>') !!}
    <br />

    {!! Form::submit('Envoyer', ['class' => 'btn btn-success']) !!}

    {!! Form::close() !!}
  </div>
</div>
@endsection
