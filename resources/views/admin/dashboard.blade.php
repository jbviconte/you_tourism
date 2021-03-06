@extends('layout/layoutback')

@section('title')
  Dashboard
@endsection



@section('content')
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Administration
      <small>Vue Général</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> Retour au site</a></li>
      <li class="active">Administration</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-aqua">
          <div class="inner">
            <h3>{{ $lieuxcounts }}</h3>

            <p>Lieux Enregistrer</p>
          </div>
          <div class="icon">
            <i class="ion ion-bag"></i>
          </div>
          <a href="{{ route('adminlieux') }}" class="small-box-footer">Plus info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-yellow">
          <div class="inner">
            <h3>{{ $userscounts }}</h3>

            <p>Utilisateurs Enregistrés</p>
          </div>
          <div class="icon">
            <i class="ion ion-person-add"></i>
          </div>
          <a href="{{ route('user') }}" class="small-box-footer">Plus d'infos <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
    </div>
    <!-- /.row -->
    <!-- Main row -->
    <div class="row">
      <!-- Left col -->
      <section class="col-lg-7 connectedSortable">


        <div class="box" style="width:1250px">
                    <div class="box-header">
                      <h3 class="box-title">Derniers utilisateurs enregistrés</h3>

                      <div class="box-tools">
                        <div class="input-group input-group-sm" style="width: 150px;">


                        </div>
                      </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body table-responsive no-padding">
                      <table class="table table-hover">
                        <tr>
                          <th>Nom : </th>
                          <th>Email : </th>
                          <th>Créé le : </th>
                        </tr>

                        @foreach ($users as $user)

                            <tr>
                              <td>{{ $user['name'] }}</td>
                              <td>{{ $user['email'] }}</td>
                              <td>{{ $user['created_at'] }}</td>
                            </tr>


                        @endforeach
                          </table>

                    </div>
                    <!-- /.box-body -->
                  </div>
                  <!-- /.box -->



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
                          <th style="width:100px">Nom : </th>
                          <th>Description : </th>
                          <th style="width:100px">Créé le : </th>
                        </tr>

                        @foreach ($lieux as $lieu)

                        <tr>
                          <td>{{ $lieu['lieu'] }}</td>
                          <td>{{ $lieu['content'] }}</td>
                          <td>{{ $lieu['created_at'] }}</td>
                        </tr>

                        @endforeach

                      </table>
                    </div>
                    <!-- /.box-body -->
                  </div>
                  <!-- /.box -->

      </section>

    </div>

  </section>
  <!-- /.content -->
@endsection
