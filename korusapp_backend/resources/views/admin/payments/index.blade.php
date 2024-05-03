<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Befizetések</title>
</head>
<body>

<a href="{{ route('admin.index') }}">Vissza a főoldalra</a>
<hr>
<h1>Befizetések</h1>
<table>
    <thead>
    <tr>
        <th>Tag neve</th>
        <th>Befizetett összeg</th>
        <th>Befizetés dátuma</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($payments as $payment)
        <tr>

            <td>{{ $payment->user ? $payment->user->name : 'Nincs felhasználó' }}</td>
            <td>{{ $payment->amount_paid }}</td>
            <td>{{ $payment->payment_date }}</td>
            <td>
                <form action="{{ route('admin.payments.update', $payment->id) }}" method="POST">
                    @csrf
                    @method('PATCH')
                    <input type="number" name="additional_amount" placeholder="Hozzáadott összeg" required>
                    <button type="submit">Befizetés frissítése</button>

                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>

