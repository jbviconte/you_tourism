@extends('layout/layoutback')

@section('title')
  Dashboard-Update
@endsection

@section('content')
  <section class="content">
    <div class="box box-warning">
      <div class="box-header with-border">
        <h3 class="box-title">Modifier la description du lieu {{ $lieux->lieu }}</h3>
      </div>
      <!-- /.box-header -->
      <div class="box-body">
          {!! Form::open(['route' => ['lieu-update-action', $lieux->id],'method' => 'put', 'files' => true]) !!}
          {{ csrf_field() }}
          <!-- text input -->
            <div class="form-group">
              <label>Nom du lieu</label>
              {!! Form::text('lieu', $lieux->lieu,['class' => "form-control", 'placeholder' => 'lieu']) !!}
              {!! $errors->first('lieu','<small class="help-block">:message</small>') !!}
            </div>

            <div class="form-group">
              <label>Description du lieu</label>
              {!! Form::textarea('content', $lieux->content, ['class' => "form-control",'placeholder' => 'votre description du lieu touristique']) !!}
              {!! $errors->first('content','<small class="help-block">:message</small>') !!}
            </div>

            <div class="form-group">
              <label>Status: </label>
              {!! Form::select('status', ['publish' => 'Publier', 'no publish' => 'Non publier'], $lieux->status)!!}</li>
            </div>

            <div class="form-group">
              {!! Form::file('image', ['id' => "exampleInputFile"]) !!}
              {!! $errors->first('image','<small class="help-block">:message</small>') !!}
            </div>

          {!! Form::submit('Modifier',['class' => 'btn btn-block btn-success btn-lg']) !!}
          {!! Form::close() !!}

      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->
  </section>
@endsection
