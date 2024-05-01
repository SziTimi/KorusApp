<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment List</title>
</head>
<body>
<h1>Payments List</h1>
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

            <td>{{ $payment->members_id }}</td>
            <td>{{ $payment->amount_paid }}</td>
            <td>{{ $payment->payment_date }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>

