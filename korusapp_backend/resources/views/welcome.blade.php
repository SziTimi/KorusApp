@extends('layouts.layout')

@section('title', 'Üdv a kórus oldalon')

@section('content')
    <h1>ÜDV A KÓRUS OLDALÁN</h1>
    <hr>
    <a href="{{ route('loginForm') }}" class="btn btn-primary">Belépés</a>
@endsection
