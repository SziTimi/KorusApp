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
            <input type="date" name="event_time" required>
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
        <button type="submit">Esemény hozzáadása</button>
    </form>
</main>
<footer>
    <p>Copyright © Your Company 2024</p>
</footer>
</body>
</html>

