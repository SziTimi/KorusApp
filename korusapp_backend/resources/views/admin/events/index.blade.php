<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event List</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-4">
    <h1>Események</h1>
    <a href="{{ route('admin.events.create') }}" class="btn btn-primary mb-3">Új esemény létrehozása</a>
    <a href="{{ route('admin.index') }}" class="btn btn-primary mb-3">Vissza a főoldalra</a>

    <table class="table">
        <thead class="table-dark">
        <tr>

            <th>Időpont</th>
            <th>Helyszín</th>
            <th>Cím</th>
            <th>Kotta</th>
            <th>Tudnivaló</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @foreach ($events as $event)
            <tr>

                <td>{{ $event->event_time }}</td>
                <td>{{ $event->event_venue }}</td>
                <td>{{ $event->event_address }}</td>
                <td>
                    @if ($event->sheetMusic)
                        {{ $event->sheetMusic->composer }} - {{ $event->sheetMusic->song_title }} -
                        <a href="{{ asset('storage/pdf/' . $event->sheetMusic->sheet_music_pdf) }}" target="_blank">PDF</a>
                    @else
                        Nincs kotta csatolva
                    @endif</td>
                <td>{{ $event->additional_info }}</td>
                <td>
                    <a href="{{ route('admin.events.edit', $event->id) }}" class="btn btn-info">Módosítás</a>
                </td>
                <td>
                    <form action="{{ route('admin.events.destroy', $event->id) }}" method="POST" onsubmit="return confirm('Biztos, hogy törlöd??');" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Törlés</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

