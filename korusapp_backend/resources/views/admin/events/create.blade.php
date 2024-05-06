@extends('layouts.admin')

@section('title', 'Admin Index')


@section('content')

    <!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Új esemény</title>
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
<header class="text-center mb-4">
    <h1>Új esemény létrehozása</h1>
</header>
<main>
    <div class="container form-container">
        <a href="{{ route('admin.events.index') }}" class="btn btn-primary mb-4">Vissza az eseményekhez</a>
        <form action="/admin/events" method="POST">
            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
            <div class="mb-3">
                <label for="event_time" class="form-label">Dátum:</label>
                <input type="datetime-local" name="event_time" id="event_time" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="event_venue" class="form-label">Helyszín:</label>
                <input type="text" name="event_venue" id="event_venue" class="form-control">
            </div>
            <div class="mb-3">
                <label for="event_address" class="form-label">Cím:</label>
                <input type="text" name="event_address" id="event_address" class="form-control">
            </div>
            <div class="mb-3">
                <label for="sheet_music_id" class="form-label">Kotta sorszáma:</label>
                <input type="number" name="sheet_music_id" id="sheet_music_id" class="form-control">
            </div>
            <div class="mb-3">
                <label for="additional_info" class="form-label">További információk:</label>
                <textarea name="additional_info" id="additional_info" rows="4" class="form-control"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Esemény hozzáadása</button>
        </form>
    </div>
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

@endsection

