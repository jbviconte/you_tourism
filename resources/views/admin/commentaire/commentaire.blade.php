@extends('layout/layoutback')

@section('title')

@endsection

@section('content')

  <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Commentaires poster</h3>

              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  {{-- {{ $commentaires->links() }} --}}
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <th>Titre commentaire: </th>
                  <th>Commentaire: </th>
                  <th>Lieu touristique: </th>
                  <th>Nom du</th>
                  <th>Action : </th>
                </tr>
                @foreach ($commentaires as $commentaire)
                  <tr>
                    <td>{{ $commentaire->commentaire }}</td><br />
                    <td>{{ $commentaire->content }}</td>
                    <td>{{ $commentaire->lieu }}</td>
                    <td>{{ $commentaire->name }}</td>
                    {{-- <td><a href="{{ route('user-update', ['id' => $user->id]) }}"><button type="button" class="btn btn-default">Modifier</button></a></td> --}}

                    </td>
                    <td>{{ Form::open(['route' => ['admin-commentaire-delete-action', $commentaire->id], 'method' => 'delete'])}}
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
