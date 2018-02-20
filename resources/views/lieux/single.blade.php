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
        <h1>Posté par : {{ $commentaire->name }}</h1>
        <p>Commentaire : {{ $commentaire->commentaire }}</p>
        <p>Posté le : {{ $commentaire->created_at }}</p>
      </div>
    @endforeach

  </div>
  <div>
  @if ( Auth::user())
      {!! Form::open(['route' => ['lieux-commentaire-new-action', $lieu->id],  'id' => 'comment', 'method' => 'post']) !!}
      {{ csrf_field() }}

        {!! Form::label('commentaire', 'Sujet du commentaire') !!}
        <br>
        {!! Form::text('commentaire', null, ['class' => 'frenchcaba', 'placeholder' => 'Sujet du commentaire'], ['id' => 'titlecomment']) !!}
        {!! $errors->first('commentaire', '<small class="help-block">:message</small>') !!}
        <br>

        {!! Form::label('content', 'Description') !!}
        <br>
        {!! Form::textarea('content', null, ['class' => 'frenchcaba', 'placeholder' => 'Commentaire sur le lieu'], ['id' => 'content']) !!}
        {!! $errors->first('content', '<small class="help-block">:message</small>') !!}
        <br>

        {!! Form::submit('Envoyer', ['class' => 'btn btn-success',]) !!}

      {!! Form::close() !!}
  @endif
</div>
@endsection

@section('scripts')

<script type="text/javascript">


// astuces-webmaster.ch systeme ajax

$(document).ready(function(){


  $('#comment').on('submit',function(e){
    e.preventDefault();
    console.log('dede');

    $('#comment').val('Chargement en cours..')
    $('span.error').remove();

    // envoi des données au submit.php
       $.post('ajax/submit.php', $(this).serialize(), function(msg){

         working = false;
         $('#submit').val('Submit');

         if(msg.status) {

           $(msg.html).hide().insertBefore('#addCommentContainer').slideDown();
           $('#comment').val();
         } else {
           $.each(msg.errors, function(sujet, comm){
             $('label[for='+sujet+']').append('<span class="error">'+comm+'</span>');
           });
         }
       },'json');
     });
   });

    // var form = $('#comment').val();
    // var commentaire = $('#titlecomment').val();
    // var content = $('#content').val();
    //
    // $.ajax({
    //   type: "POST",
    //   url: '{{ route('lieux-commentaire-new-action', $lieu->id) }}',
    //   data: {commentaire: commentaire, content: content },
    //   datatype: 'json',
    //   success: function(response){
    //     console.log(response);
    //     // $('#titlecomment').val('');
    //     // $('#content').val('');

      }
    });
  });
});

</script>

@endsection
