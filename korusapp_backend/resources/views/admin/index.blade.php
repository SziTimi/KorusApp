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
<a href="{{ route('admin.events.create') }}">Új esemény létrehozása</a>

<hr>
<a href="{{ route('admin.users') }}">Tagok listája</a>

<hr>
<a href="{{ route('admin.payments.index') }}">Befizetések</a>
