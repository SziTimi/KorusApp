<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - List of Users</title>
    <!-- Optional: include a CSS file directly if styling is needed -->
    <link rel="stylesheet" href="path/to/your/css/style.css">
</head>
<body>

<a href="{{ route('admin.index') }}">Vissza az admin főoldalra</a>
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


<!-- Optional: Include JavaScript files if necessary -->
<script src="path/to/your/javascript/file.js"></script>
</body>
</html>

