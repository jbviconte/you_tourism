@extends('layout/layoutback')

@section('title')

@endsection

@section('content')

  <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Commentaires postés</h3>

              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  {{-- {{ $commentaires->links() }} --}}
                </div>
              </div>
              @if (session('success'))
              <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i> {{ session('success') }}</h4>
              </div>
              @endif
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <th>Titre commentaire</th>
                  <th>Commentaire</th>
                  <th>Lieu touristique</th>
                  <th>Nom du</th>
                  <th>Posté le</th>
                  <th>Action</th>
                </tr>
                @foreach ($commentaires as $commentaire)
                  <tr>
                    <td>{{ $commentaire->commentaire }}</td><br />
                    <td>{{ $commentaire->content }}</td>
                    <td>{{ $commentaire->lieu }}</td>
                    <td>{{ $commentaire->name }}</td>
                    <td>{{ $commentaire->created_at }}</td>
                    {{-- <td><a href="{{ route('user-update', ['id' => $user->id]) }}"><button type="button" class="btn btn-default">Modifier</button></a></td> --}}

                    </td>
                    <td>{{ Form::open(['route' => ['admin-commentaire-delete-action', $commentaire->id], 'method' => 'delete'])}}
                      {{ csrf_field() }}
                      <button type="submit" class="btn btn-block btn-danger btn-lg">Supprimer</button>
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
