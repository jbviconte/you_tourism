@extends('layout/layoutback')

@section('title')
  You Tourism-Ajout de lieu
@endsection

@section('content')
<section class="content">
    <div class="box box-warning">
      <div class="box-header with-border">
        <h3 class="box-title">Ajouter un lieu</h3>
      </div>
      <!-- /.box-header -->
      <div class="box-body">
        {!! Form::open(['route' => 'lieu-new-action-post', 'method' => 'post', 'files' => true]) !!}
        {{ csrf_field() }}


        <div class="form-group">
          {!! Form::label('lieu', 'Nom du lieu') !!}
          <br>
          {!! Form::text('lieu', null, ['class' => "form-control", 'placeholder' => 'Nom du lieu']) !!}
          {!! $errors->first('lieu', '<small class="help-block">:message</small>') !!}
          <br>
        </div>
        <div class="form-group">
          {!! Form::label('content', 'Description') !!}
          <br>
          {!! Form::textarea('content', null, ['class' => "form-control", 'placeholder' => 'Description du lieu']) !!}
          {!! $errors->first('content', '<small class="help-block">:message</small>') !!}
          <br>
        </div>
        <div class="form-group">
          {!! Form::file('image', ['id' => "exampleInputFile"]) !!}
          {!! $errors->first('image','<small class="help-block">:message</small>') !!}
        </div>

        {!! Form::submit('Envoyer', ['class' => 'btn btn-success']) !!}
        {!! Form::close() !!}

      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->
</section>
@endsection
