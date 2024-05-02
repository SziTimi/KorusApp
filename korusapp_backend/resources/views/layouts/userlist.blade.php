<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Your Application Name</title>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
<header>
    <!-- Place your header or navigation bar here -->
</header>

<div class="container">
    @yield('content')
</div>

<footer>
    <!-- Place your footer content here -->
</footer>

<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
