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
                  {{ $lieux->links() }}
                </div>
              </div>
            </div>
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <th>Lieu: </th>
                  <th>Description: </th>
                  <th>Image du lieu: </th>
                  <th>Action: </th>
                </tr>

                @foreach ($lieux as $lieu)
                  <tr>
                    <td style="width:100px">{{ $lieu['lieu'] }}</td><br />
                    <td>{{ $lieu['content'] }}</td>
                    <td style="width:100px"><img src="{{ Image::url(asset($lieu['path_image'] . '/' . $lieu['new_name_image']) ,50,50)}}"/></td>
                    <td style="width:100px">{{ Form::open(['route' => ['admin-lieu-delete-action', $lieu->id], 'method' => 'delete'])}}
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
      </div>
    </section>
    <!-- /.content -->

@endsection
