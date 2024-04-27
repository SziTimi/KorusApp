BELÉPÉS
<form
    action="{{ route('login') }}"
    method="POST">
    @csrf

    <label for="email">Email:</label>
    @error('email')
    Hiba: {{$message}}
    @enderror
    <input id="email" name="email"
           type="email" value="{{ old('email', '') }}"/>

    <hr>

    <label for="password">Jelszó:</label>
    @error('password')
    Hiba: {{$message}}
    @enderror
    <input id="password" name="password" type="password" value=""/>

    <hr>

    <input type="submit" value="Belépés">

</form>

