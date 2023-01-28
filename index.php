<div class="title">T513</div>
<div class="subtitle">T513 - Uma Nova Era</div>

<form action="{{ route('login') }}" method="post">
    @csrf
    <label for="email">E-mail</label>
    <input type="email" name="email" required>

    <label for="password">Senha</label>
    <input type="password" name="password" required>

    <input type="checkbox" name="remember" id="remember">
    <label for="remember">Lembrar e-mail e senha</label>

    <button type="submit">Login</button>
    <a href="{{ route('register') }}">Registrar</a>
</form>