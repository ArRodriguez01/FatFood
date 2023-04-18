<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de sesión</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="contenedor">
        <img src="{{ asset('images/logo.png') }}">
        <form id="formulario" action="{{ route('login') }}" method="POST">
            @csrf
            <div class="formControl">
                <label for="usuario">Email</label>
                <input id="usuario" name="email" type="text">
                @error('email')
                <span  role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

            </div>

            <div class="formControl">
                <label>Contraseña</label>
                <input id="pass" name="password" type="password">
                @error('password')
                        <span  role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

            </div>
            @if (Route::has('password.request'))
            <p id="msg"><a class="btn btn-link" href="{{ route('password.request') }}">¿Has olvidado tu contraseña?</p></a>
            @endif
            <button id="button">Iniciar Sesión</button>
        </form>

    </div>
</body>
</html>

