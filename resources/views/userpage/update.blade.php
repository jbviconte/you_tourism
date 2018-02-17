@extends('layout/layoutback')

@section('title')
  Profil-Update
@endsection

@section('content')
  <section class="content">
    <div class="box box-warning">
      <div class="box-header with-border">
        <h3 class="box-title">Votre profil {{ $users->name }}</h3>
      </div>
      <!-- /.box-header -->
      <div class="box-body">
          {!! Form::open(['route' => ['userpage-update-action', $userpage->id],'method' => 'put']) !!}
          <!-- text input -->
          <div class="form-group">
            <label>Pseudo</label>
            {!! Form::text('pseudo', $user->name,['class' => "form-control", 'placeholder' => 'Votre pseudo']) !!}
            {!! $errors->first('lieu','<small class="help-block">:message</small>') !!}
          </div>
          <div class="form-group">
            <label>Email</label>
            {!! Form::text('content', $user->email, ['class' => "form-control",'placeholder' => 'Votre email']) !!}
            {!! $errors->first('content','<small class="help-block">:message</small>') !!}
          </div>

          {!! Form::submit('Modifier',['class' => 'btn btn-block btn-success btn-lg']) !!}
          {!! Form::close() !!}

      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->
</section>
@endsection
