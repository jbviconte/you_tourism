@extends('layout/layoutback')

@section('title')

@endsection

@section('content')

  <section class="content">
    <div class="box box-warning">
      <div class="box-header with-border">
        <h3 class="box-title">Utilisateur {{ $users->name }}</h3>
      </div>
      <!-- /.box-header -->
      <div class="box-body">
          {!! Form::open(['route' => ['user-update-action', $users->id],'method' => 'put']) !!}
          <!-- text input -->
          <div class="form-group">
            <label>Pseudo</label>
            {!! Form::text('lieu', $users->name,['class' => "form-control", 'placeholder' => 'pseudo']) !!}
            {!! $errors->first('lieu','<small class="help-block">:message</small>') !!}
          </div>

            <div class="form-group">
              <label>Status: </label>
              {!! Form::select('role', ['inscrit' => 'Inscrit', 'admin' => 'Admin'], $users->role)!!}</li>
            </div>



          {!! Form::submit('Modifier',['class' => 'btn btn-block btn-success btn-lg']) !!}
          {!! Form::close() !!}

      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->
</section>

@endsection