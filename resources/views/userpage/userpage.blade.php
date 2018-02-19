@extends('layout/layout')

@section('title')
  Profil (Edit/Update)
@endsection

@section('content')
  <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">

            <h1>{{ $users['name'] }}</h1>

            <p>{{ $users['email'] }}</p>

            <a href="{{ route('userpage-update', $users['id']) }}">Modifier profil</a>

          </div>
          <!-- /.box -->
        </div>
      </div>
    </section>
 @endsection
