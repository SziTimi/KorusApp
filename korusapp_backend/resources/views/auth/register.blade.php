REGISzTRÁCIÓ
<form
    action="{{ route('register') }}"
    method="POST">
    @csrf

    <label for="name">Név:</label>
    @error('name')
    Hiba: {{$message}}
    @enderror
    <input id="name" name="name"
           type="text" value="{{ old('name', '') }}"/>

    <hr>

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

    <label for="password_confirmation">Jelszó újra:</label>
    <input id="password_confirmation" name="password_confirmation"
           type="password" value=""/>

    <hr>



    <label for="role">Szerep (admin vagy user):</label>
    <select id="role" name="role">
        <option value="admin">Admin</option>
        <option value="user">User</option>
    </select>

    <input type="submit" value="Regisztráció">

</form>
