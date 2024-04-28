<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modify User</title>
    <link rel="stylesheet" href="path/to/your/css/style.css">
</head>
<body>
<div class="container">
    <h1>Tag adatainak módosítása</h1>
    <form action="{{ route('admin.users.update', $user->id) }}" method="post">
        @csrf
        @method('PUT')
        <div>
            <label for="name">Név:</label>
            <input type="text" id="name" name="name" value="{{ $user->name }}">
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="{{ $user->email }}">
        </div>
        <div>
            <label for="mobil">Mobil telefonszám:</label>
            <input type="text" id="mobil" name="mobil" value="{{ $user->mobil }}">
        </div>
        <div>
            <label for="address">Cím:</label>
            <input type="text" id="address" name="address" value="{{ $user->address }}">
        </div>
        <div>
            <label for="par">Szólam:</label>
            <input type="text" id="par" name="par" value="{{ $user->par }}">
        </div>
        <button type="submit" class="btn btn-primary">Frissítés</button>
    </form>
</div>
<script src="path/to/your/javascript/file.js"></script>
</body>
</html>

