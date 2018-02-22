@extends('layout/layoutback')

@section('title')
  Dashboard Utilisateurs
@endsection

@section('content')
    <section class="content">
        <div class="row">
          <div class="col-xs-12">
            <div class="box">
              <div class="box-header">
                <h3 class="box-title">Utilisateur inscrit</h3>

                <div class="box-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    {{ $users->links() }}
                    @if (session('success'))
                      <div class="alert-alert-success">
                        {{ session('success') }}
                      </div>
                    @endif
                  </div>
                </div>

              </div>
              <!-- /.box-header -->
              <div class="box-body table-responsive no-padding">
                <table class="table table-hover">
                  <tr>
                    <th>Nom : </th>
                    <th>E-mail : </th>
                    <th>Status : </th>
                    <th>Edit : </th>
                    <th>Action : </th>
                  </tr>
                  @foreach ($users as $user)
                    <tr>
                      <td>{{ $user['name'] }}</td><br />
                      <td>{{ $user['email'] }}</td>
                      <td>{{ $user['role'] }}</td>
                      <td><a href="{{ route('user-update', ['id' => $user->id]) }}"><button type="button" class="btn btn-default">Modifier</button></a></td>

                      </td>
                      <td>{{ Form::open(['route' => ['admin-user-delete-action', $user->id], 'method' => 'delete'])}}
                        <button type="submit" class="btn btn-block btn-danger btn-lg">Supprimer</button>
                        {!! csrf_field() !!}
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
        </div>
      </section>
@endsection
