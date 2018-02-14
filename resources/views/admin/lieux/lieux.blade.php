@extends('layout/layoutback')

@section('title')
  Dashboard Lieux
@endsection

@section('content')
  @foreach ($lieux as $lieu)
    <table>
      <th>
        <td>Lieu: </td>
        <td>Description: </td>
      </th>
      <tr>
        <td>{{ $lieux['lieu'] }}</td><br />
        <td>{{ $lieux['content'] }}</td>
        <img src="{{ Image::url(asset($lieu['path_image'] . '/' . $lieu['new_name_image']) ,50,50)}}"/>
      </tr>
    </table>
  @endforeach
@endsection
