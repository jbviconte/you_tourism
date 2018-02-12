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

            <p>Nouveau lieux</p>
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

            <p>Utilisateurs Enregistrer</p>
          </div>
          <div class="icon">
            <i class="ion ion-person-add"></i>
          </div>
          <a href="#" class="small-box-footer">Plus info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-red">
          <div class="inner">
            <h3>65</h3>

            <p>Visiteur</p>
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


        </div>

        <div class="box box-primary">
          <h3 class="box-title">Utilisateur enregistrer</h2>
          @foreach ($users as $user)
            <table>
              <th>
                <td>Nom: </td>
                <td>E-mail: </td>
              </th>
              <tr>
                <td>{{ $user['name'] }}</td><br />
                <td>{{ $user['email'] }}</td>
              </tr>
            </table>
          @endforeach
        </div>
        <!-- /.box -->

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
      <!-- /.Left col -->
      <!-- right col (We are only adding the ID to make the widgets sortable)-->

      <!-- right col -->
    </div>
    <!-- /.row (main row) -->

  </section>
  <!-- /.content -->
@endsection
