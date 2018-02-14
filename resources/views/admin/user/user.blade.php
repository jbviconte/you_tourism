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
      </tr>
    </table>
  @endforeach
@endsection
