@extends('layout/layoutback')

@section('title')
  Dashboard Utilisateurs
@endsection

@section('content')
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
@endsection
