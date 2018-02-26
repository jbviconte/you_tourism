@extends('layout/layout')

@section('title')
  You Tourism-Description du lieu
@endsection

@section('content')

  <style media="screen">
    #commentform {display:none;}
  </style>

  @foreach ($lieux as $lieu)
  <div class="lieu">

    <h1>{{ $lieu->lieu }}</h1>
    <img src="{{ Image::url(asset($lieu->path_image . '/' . $lieu->new_name_image) ,700,650) }}"/>
    <h2>Description du lieu touristique :</h2>
    <p>{{ $lieu->content }}</p>
    <p id="lieusugg">Lieu suggéré par : {{ $lieu->name }}</p>


  </div>
  @endforeach

  <div id="addcomment">
    <button type="btn btn-danger" name="button">Ajouter un commentaire</button>
  </div>

  <br>
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

  {{-- affichage des commentaires ajaxisés --}}
  <div id="showcommentaire"></div>
  <br>
  <div id="showcommentaire2"></div>

  </div>

  <div id="commentform">
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

      $('#addcomment').on('click', function() {
          $('#commentform').fadeIn(200);
      });

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
                        $('#comment').fadeOut(300);
                        $('#showcommentaire').html(response.commentaire);
                        $('#showcommentaire2').html(response.content);
                      } else {
                        $('#errorcommentaire').html(response.errors.commentaire);
                        $('#errorcontent').html(response.errors.content);
                      }

                 }
        });



      });


});

</script>

@endsection
