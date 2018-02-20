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
          {!! Form::open(['route' => ['userpage-update-action', $users->id],'method' => 'put']) !!}
          <!-- text input -->
          <div class="form-group">
            <label>Pseudo</label>

            <br />
            {!! Form::text('name', $users->name,['class' => "form-control", 'placeholder' => 'Votre pseudo']) !!}
            {!! $errors->first('name','<small class="help-block">:message</small>') !!}
          </div>

          <div class="form-group">
            <label>Email</label>
            <br />
            {!! Form::text('content', $users->email, ['class' => "form-control",'placeholder' => 'Votre email']) !!}
            {!! $errors->first('content','<small class="help-block">:message</small>') !!}

          </div>

          <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
              <label for="password" class="col-md-4 control-label">Mot de passe</label>

              <div class="col-md-6">
                  <input id="password" type="password" class="form-control" name="password" value="$users->passworld" required>

                  @if ($errors->has('password'))
                      <span class="help-block">
                          <strong>{{ $errors->first('password') }}</strong>
                      </span>
                  @endif
              </div>
          </div>

          <div class="form-group">
              <label for="password-confirm" class="col-md-4 control-label">Confirmer le nouveau mot de passe</label>

              <div class="col-md-6">
                  <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
              </div>
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
