@extends('layout/layoutback')

@section('title')
  Dashboard Lieux
@endsection

@section('content')
  <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Lieux Touristiques</h3>
              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <a href="{{ route('lieu-new-action') }}"><button type="button" class="btn btn-block btn-default btn-lg">Ajouter un lieu</button></a>
                </div>
              </div>
            <div class="box-body table-responsive no-padding">
              {{ $lieux->links() }}
              @if (session('success'))
                <div class="alert-alert-success">
                  {{ session('success') }}
                </div>
              @endif
              <table class="table table-hover">
                <tr>
                  <th>Lieu: </th>
                  <th>Description: </th>
                  <th>Adresse</th>
                  <th>Image du lieu: </th>
                  <th>Poster par: </th>
                  <th>Status: </th>
                  <th>Action: </th>
                </tr>

                @foreach ($lieux as $lieu)
                  <tr>
                    <td style="width:100px">{{ $lieu->lieu }}</td><br />
                    <td>{{ $lieu->content }}</td>
                    <td>{{ $lieu->adresse }}</td>
                    <td style="width:100px"><img src="{{ Image::url(asset($lieu->path_image . '/' . $lieu->new_name_image) ,50,50)}}"/></td>
                    <td style="width:100px">{{ $lieu->name }}</td>
                    <td style="width:100px">{{ $lieu->status }}</td>
                    <td style="width:150px"><div class="btn-group">
                      <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                        <span class="caret"></span>
                        <span class="sr-only">Autre Action</span>
                      </button>
                      <ul class="dropdown-menu" role="menu">
                        <li class="divider"></li>
                        {{ Form::open(['route' => ['admin-lieu-delete-action', $lieu->id], 'method' => 'delete'])}}
                        {{ csrf_field() }}
                        <li><button type="form" class="btn btn-block btn-danger btn-xs">Supprimer</button></li>
                        {{ Form::close()}}
                      </ul>
                      <a href="{{ route('lieu-update-new', ['id' => $lieu->id]) }}"><button type="button" class="btn btn-default">Modifier</button></a>
                    </div></td>
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
    <!-- /.content -->

@endsection
