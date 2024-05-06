@extends('layouts.admin')

@section('title', 'Admin Index')

@section('content')
    <h1>ADMIN FŐOLDAL</h1>
    <hr>
    <p>Szia {{ Auth::user()->name }}! Üdv az oldalon :)</p>
    <hr>

    <a href="{{ route('admin.events.index') }}" class="btn btn-primary btn-lg btn-block">Események</a>
    <hr>
    <a href="{{ route('admin.users') }}" class="btn btn-primary btn-lg btn-block">Tagok listája</a>
    <hr>
    <a href="{{ route('admin.payments.index') }}" class="btn btn-primary btn-lg btn-block">Befizetések</a>
@endsection
