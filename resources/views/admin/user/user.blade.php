@extends('layout/layoutback')

@section('title')
  Dashboard Utilisateurs
@endsection

@section('content')

            <div class="box" style="width:1250px">
              <div class="box-header">
                <h3 class="box-title">Derniers lieux ajoutés</h3>

                <div class="box-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">


                  </div>
                </div>
              </div>
              <!-- /.box-header -->
              <div class="box-body table-responsive no-padding">
                <table class="table table-hover">

                  <tr>
                    <th>Nom: </th>
                    <th>E-mail: </th>
                    <th>Action: </th>
                  </tr>
                  @foreach ($users as $user)
                    <tr>
                      <td>{{ $user['name'] }}</td><br />
                      <td>{{ $user['email'] }}</td>
                      <td>{{ Form::open(['route' => ['admin-user-delete-action', $user->id], 'method' => 'delete'])}}
                        {{ Form::submit('Supprimer')}}
                        {{ Form::close()}}
                      </td>
                    </tr>
                @endforeach
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        </div>
        <!-- /.row -->
@endsection
