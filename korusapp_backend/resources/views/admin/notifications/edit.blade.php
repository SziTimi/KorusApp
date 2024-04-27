<div class="container">
    <h1>Edit Notification</h1>
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form method="POST" action="{{ route('notifications.update', $notification->id) }}">
        @csrf
        @method('PUT') <!-- This is necessary for the update route -->

        <div class="form-group">
            <label for="message">Message:</label>
            <input type="text" class="form-control" id="message" name="message" value="{{ $notification->message }}" required>
        </div>

        <div class="form-group">
            <label for="scheduled_at">Date and Time:</label>
            <input type="datetime-local" class="form-control" id="scheduled_at" name="scheduled_at" value="{{ $notification->scheduled_at->format('Y-m-d\TH:i') }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Update Notification</button>
    </form>
</div>
