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
            <h3>150</h3>

            <p>Nouveaux lieux</p>
          </div>
          <div class="icon">
            <i class="ion ion-bag"></i>
          </div>
          <a href="#" class="small-box-footer">Plus info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-yellow">
          <div class="inner">
            <h3>44</h3>

            <p>Utilisateurs Enregistrés</p>
          </div>
          <div class="icon">
            <i class="ion ion-person-add"></i>
          </div>
          <a href="{{ route('user') }}" class="small-box-footer">Plus d'infos <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-red">
          <div class="inner">
            <h3>65</h3>

            <p>Visiteurs</p>
          </div>
          <div class="icon">
            <i class="ion ion-pie-graph"></i>
          </div>
          <a href="#" class="small-box-footer">Plus info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
    </div>
    <!-- /.row -->
    <!-- Main row -->
    <div class="row">
      <!-- Left col -->
      <section class="col-lg-7 connectedSortable">


        <div class="box">
                    <div class="box-header">
                      <h3 class="box-title">Derniers utilisateurs enregistrés</h3>

                      <div class="box-tools">
                        <div class="input-group input-group-sm" style="width: 150px;">
                          <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                          <div class="input-group-btn">
                            <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                          </div>
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



        <div class="box">
                    <div class="box-header">
                      <h3 class="box-title">Derniers lieux ajoutés</h3>

                      <div class="box-tools">
                        <div class="input-group input-group-sm" style="width: 150px;">
                          <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                          <div class="input-group-btn">
                            <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body table-responsive no-padding">
                      <table class="table table-hover">
                        <tr>
                          <th>Nom : </th>
                          <th>Description : </th>
                          <th>Créé le : </th>
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



        </div>

        <!-- quick email widget -->
        <div class="box box-info">
          <div class="box-header">
            <i class="fa fa-envelope"></i>

            <h3 class="box-title">Envoyer un Email</h3>
            <!-- tools box -->

            <!-- /. tools -->
          </div>
          <div class="box-body">
            <form action="#" method="post">
              <div class="form-group">
                <input type="email" class="form-control" name="emailto" placeholder="Destinataire:">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" placeholder="Sujet">
              </div>
              <div>
                <textarea class="textarea" placeholder="Message"
                          style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
              </div>
            </form>
          </div>
          <div class="box-footer clearfix">
            <button type="button" class="pull-right btn btn-default" id="sendEmail">Envoyer
              <i class="fa fa-arrow-circle-right"></i></button>
          </div>
        </div>

      </section>



    </div>

  </section>
  <!-- /.content -->
@endsection
