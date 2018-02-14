@extends('layout/layoutback')

@section('title')
  Dashboard Lieux
@endsection

@section('content')
  <table>
    <th>
      <td>Lieu: </td>
      <td>Description: </td>
    </th>
  @foreach ($lieux as $lieu)
      <tr>
        <td>{{ $lieu['lieu'] }}</td><br />
        <td>{{ $lieu['content'] }}</td>
        <img src="{{ Image::url(asset($lieu['path_image'] . '/' . $lieu['new_name_image']) ,50,50)}}"/>
        {{ Form::open(['route' => ['admin-lieu-delete-action', $lieu->id], 'method' => 'delete'])}}
        {{ Form::submit('delete')}}
        {{ Form::close()}}
      </tr>
    </table>
  @endforeach
@endsection
