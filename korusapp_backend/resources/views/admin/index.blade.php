ADMIN INDEX
<hr>

<a href="{{route('logout')}}">
    Kilépés
</a>

<hr>
Szia {{ Auth::user()->name }}! Üdv az oldalon :)

<hr>
<a href="{{ route('registerForm') }}">Új felhasználó regisztrációja</a>

