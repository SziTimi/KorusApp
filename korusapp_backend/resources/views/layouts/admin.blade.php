<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Felület - Musica Nostra')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="{{ route('admin.index') }}">Musica Nostra - Admin</a>
    <div class="navbar-nav">
        <a class="nav-item nav-link btn btn-info mr-2" href="{{ route('logout') }}">Kilépés</a>
        <a class="nav-item nav-link btn btn-secondary" href="{{ route('registerForm') }}">Új felhasználó regisztrációja</a>
    </div>
</nav>

<div class="container mt-4">
    @yield('content')
</div>

<footer class="bg-light text-center text-lg-start mt-4">
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.05);">
        © 2024 Musica Nostra - Admin Section
    </div>
</footer>
</body>
</html>
