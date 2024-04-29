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


    @if (session('success'))
        <div>{{ session('success') }}</div>
    @endif


    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.users.update', $user->id) }}" method="post">
        @csrf
        @method('PUT')
        <div>
            <label for="name">Név:</label>
            <input type="text" id="name" name="name" value="{{ old('name',$user->name) }}">
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="{{ old('email',$user->email) }}">
        </div>
        <div>
            <label for="mobil">Mobil telefonszám:</label>
            <input type="text" id="mobil" name="mobil" value="{{ old('mobil', $user->mobil) }}">
        </div>
        <div>
            <label for="address">Cím:</label>
            <input type="text" id="address" name="address" value="{{old('address', $user->address) }}">
        </div>
        <div>
            <label for="date_of_birth">Születési dátum</label>
            <input type="date" id="date_of_birth" name="date_of_birth" value="{{old('date_of_birth', $user->date_of_birth) }}">
        </div>
        <div>
            <label for="par">Szólam:</label>
            <input type="text" id="par" name="par" value="{{old('par', $user->par ) }}">
        </div>
        <div>
            <label for="password">Jelszó:</label>
            <input type="password" id="password" name="password">
        </div>
        <div>
            <label for="password_confirmation">Jelszó megerősítése:</label>
            <input type="password" id="password_confirmation" name="password_confirmation">
        </div>
        <button type="submit" class="btn btn-primary">Frissítés</button>
    </form>

    <a href="{{ route('admin.users') }}">Vissza a tagok listájához</a>
</div>
<script src="path/to/your/javascript/file.js"></script>
</body>
</html>

