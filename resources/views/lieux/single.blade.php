@extends('layout/layout')

@section('title')
  You Tourism-Description du lieu
  <link rel="stylesheet" type ="text/css" href="assets/js/bootstrap.js">
@endsection

@section('content')
<div id="single_lieu">


  @foreach ($lieux as $lieu)

    <div class="lieu">

      <h1>{{ $lieu->lieu }}</h1>
      <img class="image_single" src="{{ Image::url(asset($lieu->path_image . '/' . $lieu->new_name_image)) }}"/>
      <h2>Description du lieu touristique :</h2>
      <p>{{ $lieu->content }}</p>
      <h3>Adresse du lieu:</h3>
      <p>{{ $lieu->adresse }}</p>
      <p id="lieusugg">Lieu suggéré par : {{ $lieu->name }}</p>
    </div>
    @endforeach


    <div>
      @foreach ($commentaires as $commentaire)
        <div>
          <h1>Posté par: {{ $commentaire->name }}</h1>
          <br>
          <p>Sujet: {{ $commentaire->commentaire }}</p>
          <br>
          <p>Commentaire: {{ $commentaire->content }}</p>
          <br>
          <p>Adresse: {{ $commentaire->adresse }}</p>
          <br>
          <p>Posté le: {{ $commentaire->created_at }}</p>
          <br>
        </div>
      @endforeach
    </div>
    <div class="form">
      @if ( Auth::user())

        {!! Form::open(['route' => ['lieux-commentaire-new-action', $lieu->id],  'id' => 'comment', 'method' => 'post']) !!}
        {{ csrf_field() }}

          {!! Form::label('commentaire', 'Sujet du commentaire') !!}
          <br>
          {!! Form::text('commentaire', null, ['class' => 'frenchcaba', 'placeholder' => 'Sujet du commentaire'], ['id' => 'titlecomment']) !!}
          <span id="errorcommentaire"></span>
          <br>
          {!! Form::label('content', 'Description') !!}
          <br>
          {!! Form::textarea('content', null, ['class' => 'frenchcaba', 'placeholder' => 'Commentaire sur le lieu'], ['id' => 'content']) !!}
          <br>

          {!! Form::submit('Envoyer', ['class' => 'btn btn-success']) !!}

      {!! Form::close() !!}
  @endif
</div>
</div>

@endsection

{{-- pour utiliser une section avec un nom specifique, il faut un @yield() qui correspond sur le layout --}}
@section('scripts')


<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

<script>

// definition du token utilisé par ajax, appellé aussi en tete du layout
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$(document).ready(function(){

      $('#comment').on('submit', function(e) {
        e.preventDefault();
        var form = $('#comment');


        $.ajax({
                 url : "{{ route('lieux-commentaire-new-action', $lieu->id) }}",
                 type : 'POST',
                data: form.serialize(),
                 //dataType : 'application/json',
                 success: function(response){ // code_html contient le HTML renvoyé
                        console.log(response.errors);

                      if (response.errors === undefined || response.errors.length == 0) {
                          // if success ,
                          // on enleve le formumlaire , et on met à la place un message de success
                      } else {
                        $('#errorcommentaire').html(response.errors.commentaire);

                        // faire afficher autre error ++++
                      }

                 }
        });



      });


});

</script>

@endsection
