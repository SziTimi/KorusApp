@extends('layouts.admin')

@section('title', 'Admin Index')


@section('content')

    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Befizetések</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <style>
        body {
            padding: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            padding: 10px;
            border-bottom: 1px solid #dee2e6;
        }
        th {
            background-color: #f8f9fa;
        }
        form {
            display: flex;
            align-items: center;
        }
        input[type="number"] {
            width: 100px;
            margin-right: 10px;
        }
        @media (max-width: 576px) {
            input[type="number"] {
                width: 80px;
            }
        }
    </style>
</head>
<body>
<div class="container">
    <hr>
    <h1 class="text-center">Befizetések</h1>
    <div class="table-responsive">
        <table class="table">
            <thead>
            <tr>
                <th>Tag neve</th>
                <th>Befizetett összeg</th>
                <th>Legutolsó befizetés időpontja</th>
                <th></th>
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
                            <div class="input-group">
                                <input type="number" name="additional_amount" class="form-control" placeholder="Hozzáadott összeg" required>
                                <button type="submit" class="btn btn-primary">Befizetés frissítése</button>
                            </div>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
@endsection

