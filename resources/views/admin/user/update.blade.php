@extends('layout/layoutback')

@section('title')
  Dashboard-modification status profil
@endsection

@section('content')

  <section class="content">
    <div class="box box-warning">
      <div class="box-header with-border">
        <h3 class="box-title">Utilisateur {{ $users->name }}</h3>
      </div>
      <!-- /.box-header -->
      <div class="box-body">

          {!! Form::open(['route' => ['user-update-action', $users->id], 'method' => 'put']) !!}
          {{ csrf_field() }}
          <!-- text input -->
          <div class="form-group">
            <label>Pseudo</label>
            {!! Form::text('name', $users->name, ['class' => "form-control", 'placeholder' => 'pseudo']) !!}
            {!! $errors->first('name','<small class="help-block">:message</small>') !!}
          </div>

          <div class="form-group">
            <label>Role: </label>
            {!! Form::select('role', ['inscrit' => 'Inscrit', 'admin' => 'Admin'], $users->role) !!}
          </div>

          {!! Form::submit('Modifier', ['class' => 'btn btn-block btn-success btn-lg']) !!}
          {!! Form::close() !!}

      </div>
      <!-- /.box-body -->
      {{-- {{ dd($count) }} --}}
    </div>
    <!-- /.box -->
    {{-- affichage commentaire poster par l'utilisateur --}}
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header with-border">
            <h3 class="box-title">Commentaire de l'utilisateur {{ $users->name }}</h3>
            <div class="box-tools">
              <div class="input-group input-group-sm" style="width: 150px;">
                {{ $countcommentaires->links() }}
              </div>
            </div>
          </div>
          <div class="box-body table-responsive no-padding">

            <table class="table table-hover">
              <tr>
                <th>Sujet</th>
                <th>Commentaire</th>
                <th>Lieu du commentaire</th>
              </tr>
              @foreach ($countcommentaires as $countcommentaire)
                <tr>
                  <td>{{ $countcommentaire->commentaire }}</td>
                  <td>{{ $countcommentaire->content }}</td>
                  <td>{{ $countcommentaire->lieu }}</td>
                </tr>
              @endforeach

            </table>
          </div>
        </div>
      </div>
    </div>

    {{-- affichage lieu poster par l'utilisateur --}}
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header with-border">
            <h3 class="box-title">Lieux de l'utilisateur {{ $users->name }}</h3>
            <div class="box-tools">
              <div class="input-group input-group-sm" style="width: 150px;">
                {{ $countlieux->links() }}
              </div>
            </div>
          </div>
          <div class="box-body table-responsive no-padding">
            <table class="table table-hover">
              <tr>
                <th>Lieu Touristique</th>
                <th>Description</th>
              </tr>
              @foreach ($countlieux as $countlieu)
                <tr>
                  <td>{{ $countlieu->lieu }}</td>
                  <td>{{ $countlieu->content }}</td>
                </tr>
              @endforeach

            </table>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection
