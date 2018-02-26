@extends('layout/layout')

@section('title')
  You Tourism-Description du lieu
  <link rel="stylesheet" type ="text/css" href="assets/js/bootstrap.js">
@endsection

@section('content')

<style media="screen">
  #comform, .sujetcom, .comcom {display:none};
</style>

<div id="single_lieu">
  @foreach ($lieux as $lieu)

  <div id="full">

  <div class="lieu">

    <h1>{{ $lieu->lieu }}</h1>
    <img src="{{ Image::url(asset($lieu->path_image . '/' . $lieu->new_name_image) ,700,650) }}"/>
    <h2>Description du lieu touristique :</h2>
    <p>{{ $lieu->content }}</p>
    <p id="lieusugg">Lieu suggéré par : {{ $lieu->name }}</p>


  </div>
  @endforeach

  <div id="btncom">
    <button type="btn btn-warning" name="startform">Ajouter un commentaire</button>
  </div>

    <div>
      @foreach ($commentaires as $commentaire)
        <div>
          <h1>Posté par: {{ $commentaire->name }}</h1>
          <br>
          <p>Sujet: {{ $commentaire->commentaire }}</p>
          <br>
          <p>Commentaire: {{ $commentaire->content }}</p>
          <br>
          <p>Posté le: {{ $commentaire->created_at }}</p>
          <br>
        </div>
      @endforeach

      <div class="sujetcom"><p><u>Sujet :</u></p></div>
      <br>
      <div id="showcom"></div>
      <br>
      <div class="comcom"><p>Commentaire :</p></div>
      <br>
      <div id="showcom1"></div>

    </div>
    <div id="comform">
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
          <span id="errorcontent"></span>
          <br>

          {!! Form::submit('Envoyer', ['class' => 'btn btn-success']) !!}

      {!! Form::close() !!}
  @endif
</div>
</div>
</div>
@endsection

{{-- pour utiliser une section avec un nom specifique, il faut un @yield() qui correspond sur le layout --}}
@section('scripts')


<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<script>

// definition du token utilisé par ajax, appellé aussi en tete du layout
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$(document).ready(function(){

      $('#btncom').on('click', function() {
          $('#comform').fadeIn(200);

      })

      $('#comment').on('submit', function(e) {
        e.preventDefault();

        var form = $('#comment');


        $.ajax({
                 url : "{{ route('lieux-commentaire-new-action', $lieu->id) }}",
                 type : 'POST',
                data: form.serialize(),
                 //dataType : 'application/json',
                 success: function(response){ // code_html contient le HTML renvoyé

                      //si il n'y a pas d'erreurs
                      if (response.errors === undefined || response.errors.length == 0) {

                        $('#comform').fadeOut(300);
                        $('#btncom').fadeOut(300);

                        $('#showcom').html(response.commentaire);
                        $('#showcom1').html(response.content);

                        $('.sujetcom').fadeIn(200);
                        $('.comcom').fadeIn(200);

                      } else {
                        $('#errorcommentaire').html(response.errors.commentaire);
                        $('#errorcommentaire').html(response.errors.content);
                      }

                 }
        });



      });


});

</script>

@endsection
