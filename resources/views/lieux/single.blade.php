@extends('layout/layout')

@section('title')
  You Tourism-Description du lieu
@endsection

@section('content')

  @foreach ($lieux as $lieu)
  <div class="lieu">

    <h1>{{ $lieu->lieu }}</h1>
    <img src="{{ Image::url(asset($lieu->path_image . '/' . $lieu->new_name_image) ,700,650) }}"/>
    <h2>Description du lieu touristique:</h2>
    <p>{{ $lieu->content }}</p>
    <p>lieu suggerer par: {{ $lieu->name }}</p>


  </div>
  @endforeach

  <div>
    @foreach ($commentaires as $commentaire)
      <div>
        <h1>{{ $commentaire->name }}</h1>
        <p>{{ $commentaire->commantaire }}</p>
      </div>
    @endforeach

  </div>
  <div>
  @if ( Auth::user())
      {!! Form::open(['route' => 'commentaire-new-action', 'method' => 'post']) !!}

      {{ Form::hidden(array('id' => $id)) }}

        {!! Form::label('commentaire', 'Sujet du commentaire') !!}
        <br>
        {!! Form::text('commentaire', null, ['class' => 'frenchcaba', 'placeholder' => 'Sujet du commentaire']) !!}
        {!! $errors->first('commentaire', '<small class="help-block">:message</small>') !!}
        <br>

        {!! Form::label('content', 'Description') !!}
        <br>
        {!! Form::textarea('content', null, ['class' => 'frenchcaba', 'placeholder' => 'Commnetaire sur le lieu']) !!}
        {!! $errors->first('content', '<small class="help-block">:message</small>') !!}
        <br>

        {!! Form::submit('Envoyer', ['class' => 'btn btn-success']) !!}

      {!! Form::close() !!}
  @endif
</div>
@endsection
