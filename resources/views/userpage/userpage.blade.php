@extends('layout/layout')

@section('title')
  Profil (Edit/Update)
@endsection

@section('content')
  <section class="content">
      <div class="row">
        <div class="col-xs-12">
          @if (session('success'))
            <div class="alert-alert-success">
              {{ session('success') }}
            </div>
          @endif
          <div id="box">

            <h1>{{ $users['name'] }}</h1>
            <br />
            <p>{{ $users['email'] }}</p>
            <br />
            <a href="{{ route('userpage-update', $users['id']) }}">Modifier profil</a>

            {{ Form::open(['route' => ['user-page-delete-action', $users->id], 'method' => 'delete'])}}
              <button type="submit" class="btn btn-block btn-danger btn-lg">Supprimer</button>
              {!! csrf_field() !!}
              {{ Form::close()}}

          </div>
          <!-- /.box -->
        </div>
      </div>
    </section>
 @endsection
