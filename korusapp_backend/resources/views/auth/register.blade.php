@extends('layouts.layout')

@section('title', 'Registration')


@section('content')

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Modify User</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
        <style>
            body {
                padding: 20px;
            }
            .form-container {
                max-width: 500px;
                margin: auto;
            }
        </style>
    </head>
    <body>
    <div class="container form-container">
        <h2 class="text-center">Regisztráció</h2>
        <form action="{{ route('register') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Név:</label>
                <input id="name" name="name" type="text" class="form-control" value="{{ old('name', '') }}">
                @error('name')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input id="email" name="email" type="email" class="form-control" value="{{ old('email', '') }}">
                @error('email')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Jelszó:</label>
                <input id="password" name="password" type="password" class="form-control" value="">
                @error('password')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="password_confirmation" class="form-label">Jelszó újra:</label>
                <input id="password_confirmation" name="password_confirmation" type="password" class="form-control" value="">
            </div>
            <div class="mb-3">
                <label for="role" class="form-label">Szerep (admin vagy user):</label>
                <select id="role" name="role" class="form-select">
                    <option value="admin">Admin</option>
                    <option value="user">User</option>
                </select>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary">Regisztráció</button>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    </body>
    </html>

@endsection
