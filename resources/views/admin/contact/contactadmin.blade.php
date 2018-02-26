@extends('layout/layoutback')

@section('title')
  Dashboard Contact
@endsection

@section('content')
  <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Contacts</h3>
              {{-- {{ $contact->links() }} --}}
              <div class="box-tools">
              </div>
              @if (session('success'))
              <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i> {{ session('success') }}</h4>
              </div>
              @endif
            <div class="box-body table-responsive no-padding">

              <table class="table table-hover">
                <tr>
                  <th>Expéditeurs: </th>
                  <th>Email</th>
                  <th>Sujet: </th>
                  <th>Message</th>
                  <th>Envoyer le</th>
                  <th>Action</th>
                </tr>

                @foreach ($contacts as $contact)
                  <tr>
                    <td style="width:100px">{{ $contact->nom }}</td><br />
                    <td style="width:100px">{{ $contact->email }}</td>
                    <td style="width:100px">{{ $contact->sujet }}</td>
                    <td>{{ $contact->message }}</td>
                    <td style="width:100px">{{ $contact->created_at }}</td>
                    <td style="width:100px">{{ Form::open(['route' => ['admin-contact-delete', $contact->id], 'method' => 'delete'])}}
                      <button type="submit" class="btn btn-block btn-danger btn-lg">Supprimer</button>
                      {!! csrf_field() !!}
                      {{ Form::close()}}
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
