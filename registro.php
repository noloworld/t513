<div class="title">T513</div>
<div class="subtitle">T513 - Uma Nova Era</div>

<form action="{{ route('register') }}" method="post">
    @csrf
    <label for="email">Insira seu e-mail</label>
    <input type="email" name="email" required>

    <label for="username">Insira seu nick de usuário</label>
    <input type="text" name="username" required>

    <label for="password">Insira sua senha</label>
    <input type="password" name="password" required>

    <label for="password_confirmation">Confirme sua senha</label>
    <input type="password" name="password_confirmation" required>

    <button type="submit">Registrar</button>
    <a href="{{ route('login') }}">Voltar ao login</a>
</form>
