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
            <th>Az esemény típusa</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($events as $event)
            <tr>

                <td>{{ $event->event_time }}</td>
                <td>{{ $event->event_venue }}</td>
                <td>{{ $event->event_address }}</td>
                <td>{{ $event->sheet_music_id }}</td>
                <td>{{ $event->additional_info }}</td>
                <td>
                    <a href="{{ route('admin.events.edit', $event->id) }}" class="btn btn-info">Edit</a>
                    <form action="{{ route('admin.events.destroy', $event->id) }}" method="POST" onsubmit="return confirm('Are you sure?');" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
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

