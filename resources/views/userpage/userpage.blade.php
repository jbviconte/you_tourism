@extends('layout/layout')

@section('title')
  Profil (Edit/Update)
@endsection

@section('content')
  <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Votre profil</h3>

              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <br><br>
                  <th>Nom : </th>
                  <th>E-mail : </th>
                  <th>Profil : </th>
                </tr>
                @foreach ($users as $user)
                  <tr>
                    <td>{{ $user['name'] }}</td><br />
                    <td>{{ $user['email'] }}</td>
                    <td><a href="{{ route('userpage-update-action') }}"><button type="button" class="btn btn-default">Modifier</button></a></td>

                    </td>
                    <td>{{ Form::open(['route' => ['userpage-delete-action'], 'method' => 'delete'])}}
                      <button type="submit" class="btn btn-block btn-danger btn-lg">Supprimer</button>
                      {!! csrf_field() !!}
                      {{ Form::close()}}
                    </td>
                  </tr>
              @endforeach
              </table>
              <br>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
    </section>
 @endsection
  <h1>{{ $users['name'] }}</h1>

  <p>{{ $users['email'] }}</p>

  <a href="{{ route('userpage-update', $users['id']) }}">Modifier profil</a>



@endsection
