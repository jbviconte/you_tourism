@extends('layout/layout')

@section('title')
  Profil-Update
@endsection

@section('content')
  <section class="content">
    <div class="box box-warning">
      <div class="box-header with-border">
        <h3 class="box-title">Modifier votre profil</h3>
      </div>
      <!-- /.box-header -->
      <div class="box-body">
        <br><br><br><br><br><br>
          {!! Form::open(['route' => ['user-page-update-action', $users->id],'method' => 'put']) !!}
          <!-- text input -->
          <div class="form-group">
            <label for="name">Pseudo</label>
            <br />
            {!! Form::text('name', $users->name,['class' => "form-control", 'placeholder' => 'Votre pseudo']) !!}
            {!! $errors->first('name', '<small class="help-block">:message</small>') !!}
            <br />
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <br />
            {!! Form::text('email', $users->email, ['class' => "form-control",'placeholder' => 'Votre email']) !!}
            {!! $errors->first('email','<small class="help-block">:message</small>') !!}

          </div>
          <div class="form-group">
            <label for="password">Nouveau mot de passe</label>
            <br />
            {!! Form::password('password',['class' => 'form-control']) !!}
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
