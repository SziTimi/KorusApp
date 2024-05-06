<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Event</title>
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
<div class="container mt-4">
    <h1>Esemény módosítása</h1>

    <form action="{{ route('admin.events.update', $event->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="event_time" class="form-label">Időpont:</label>
            <input type="datetime-local" id="event_time" name="event_time" value="{{ old('event_time', $event->event_time) }}" required class="form-control">
        </div>

        <div class="mb-3">
            <label for="event_venue" class="form-label">Helyszín:</label>
            <input type="text" id="event_venue" name="event_venue" value="{{ old('event_venue', $event->event_venue) }}" class="form-control">
        </div>

        <div class="mb-3">
            <label for="event_address" class="form-label">cím:</label>
            <input type="text" id="event_address" name="event_address" value="{{ old('event_address', $event->event_address) }}" class="form-control">
        </div>

        <div class="mb-3">
            <label for="sheet_music_id" class="form-label">Kotta:</label>
            <select id="sheet_music_id" name="sheet_music_id" class="form-control">
                @foreach ($sheetMusics as $music)
                    <option value="{{ $music->id }}" {{ $event->sheet_music_id == $music->id ? 'selected' : '' }}>
                        {{ $music->composer }} - {{ $music->song_title }} -
                        <a href="{{ asset('path/to/pdf/' . $music->sheet_music_pdf) }}" target="_blank">PDF</a>
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="additional_info" class="form-label">További információ:</label>
            <textarea id="additional_info" name="additional_info" class="form-control">{{ old('additional_info', $event->additional_info) }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Frissítés</button>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
