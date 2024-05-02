<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Új esemény </title>
</head>
<body>
<header>
    <h1>Új esemény létrehozása</h1>
</header>
<main>
    <form action="/admin/events" method="POST">
        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
        <div>
            <label for="event_time">Dátum:</label>
            <input type="datetime-local" name="event_time" required>
        </div>
        <div>
            <label for="event_venue">Helyszín:</label>
            <input type="text" name="event_venue">
        </div>
        <div>
            <label for="event_address">cím:</label>
            <input type="text" name="event_address">
        </div>
        <div>
            <label for="sheet_music_id">Kotta sorszáma:</label>
            <input type="number" name="sheet_music_id">
        </div>
        <div>
            <label for="additional_info">További információk:</label>
            <textarea name="additional_info" id="additional_info" rows="4" class="form-control"></textarea>
        </div>
        <button type="submit">Esemény hozzáadása</button>
        <hr>
        <a href="{{ route('admin.index') }}">Vissza a főoldalra</a>
        <hr>
        <a href="{{ route('admin.events.index') }}">Vissza az eseményekhez</a>
    </form>
</main>
<footer>

</footer>
</body>
</html>

