@extends('layouts.layout')

@section('title', 'Welcome to Musica Nostra')

@section('content')
    <h1>WELCOME TO THE MUSICA NOSTRA APPLICATION</h1>
    <hr>
    <a href="{{ route('loginForm') }}" class="btn btn-primary">Belépés (Login)</a>
@endsection
