@extends('layouts.layout')

@section('title', 'Login - Musica Nostra')

@section('content')
    <h1>BELÉPÉS</h1>
    <form action="{{ route('login') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="email">Email:</label>
            @error('email')
            <div class="alert alert-danger">Hiba: {{ $message }}</div>
            @enderror
            <input id="email" name="email" type="email" value="{{ old('email', '') }}" class="form-control"/>
        </div>

        <hr>

        <div class="form-group">
            <label for="password">Jelszó:</label>
            @error('password')
            <div class="alert alert-danger">Hiba: {{ $message }}</div>
            @enderror
            <input id="password" name="password" type="password" class="form-control"/>
        </div>

        <hr>

        <div class="form-group">
            <input type="submit" value="Belépés" class="btn btn-primary">
        </div>
    </form>
@endsection

