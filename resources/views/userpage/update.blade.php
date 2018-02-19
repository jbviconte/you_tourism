@extends('layout/layout')

@section('title')
  Profil-Update
@endsection

@section('content')
  <section class="content">
    <div class="box box-warning">
      <div class="box-header with-border">
        <h3 class="box-title">Votre profil</h3>
      </div>
      <!-- /.box-header -->
      <div class="box-body">
        <br><br><br><br><br><br>
          {!! Form::open(['route' => ['userpage-update-action'],'method' => 'put']) !!}
          <!-- text input -->
          <div class="form-group">
            <label>Pseudo</label>
            {!! Form::text('pseudo', $users->name,['class' => "form-control", 'placeholder' => 'Votre pseudo']) !!}
            {!! $errors->first('pseudo','<small class="help-block">:message</small>') !!}
          </div>
          <br>
          <div class="form-group">
            <label>Email</label>
            {!! Form::email('email', $users->email, ['class' => "form-control",'placeholder' => 'Votre email']) !!}
            {!! $errors->first('email','<small class="help-block">:message</small>') !!}
          </div>
          <br>
          {!! Form::submit('Modifier', ['class' => 'btn btn-block btn-success btn-lg']) !!}
          {!! Form::close() !!}
          <br>

          {{-- {{ dd($users) }} --}}

      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->
</section>
@endsection
