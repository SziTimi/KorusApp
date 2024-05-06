@extends('layouts.admin')

@section('title', 'Admin Index')


@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - List of Users</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>
<body>


<hr>
<div class="container">
    <h1>Tagok adatai</h1>

    <table class="table">
        <thead>
        <tr>
            <th>Név</th>
            <th>Email cím</th>
            <th>Mobil telefonszám</th>
            <th>Cím</th>
            <th>Szül. dátum</th>
            <th>Szólam</th>

        </tr>
        </thead>
        <tbody>
        @foreach ($users as $user)
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{$user->mobil }}</td>
                <td>{{$user->address}}</td>
                <td>{{$user->date_of_birth}}</td>
                <td>{{$user->par}}</td>
                <td>
                    <a href="{{ url('/admin/users/show/' . $user->id) }}" class="btn btn-primary">Módosítás</a>

                </td>
            </tr>
        @endforeach
        </tbody>
    </table>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
@endsection

