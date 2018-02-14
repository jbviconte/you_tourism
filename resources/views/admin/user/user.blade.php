@extends('layout/layoutback')

@section('title')
  Dashboard Utilisateurs
@endsection

@section('content')
  <table>
    <th>
      <td>Nom: </td>
      <td>E-mail: </td>
    </th>
  @foreach ($users as $user)
      <tr>
        <td>{{ $user['name'] }}</td><br />
        <td>{{ $user['email'] }}</td>
          {{ Form::open(['route' => ['admin-user-delete-action', $user->id], 'method' => 'delete'])}}
          {{ Form::submit('delete')}}
          {{ Form::close()}}
      </tr>
    </table>
  @endforeach
@endsection
