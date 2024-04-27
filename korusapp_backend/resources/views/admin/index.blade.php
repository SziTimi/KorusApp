ADMIN INDEX
<hr>

<a href="{{route('logout')}}">
    Kilépés
</a>

<hr>
Szia {{ Auth::user()->name }}! Üdv az oldalon :)

<hr>
<a href="{{ route('registerForm') }}">Új felhasználó regisztrációja</a>
<hr>
<a href="{{ route('notifications.create') }}">Új bejegyzés létrehozása</a>
<hr>

<a href="{{ route('notifications.edit', dd($notification)) }}">Edit</a>
