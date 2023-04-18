<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('css/nav.css') }}">
    <title>Document</title>

  </head>
  <body>
    <nav>
        <div class="logo">
          <img  src="{{ asset('images/logo_blanco.png') }}" alt="Logo de tu empresa">
        </div>
        <div class="menu">
          <ul>
            <li><a href="#">Carta</a></li>
            <li><a href="#">Quienes Somos</a></li>
            <li><a href="#">Contactanos</a></li>
            <div class="dropdown">
                <div class="dropdown-toggle">
                    <img id ="profile" src="{{ asset('images/profile.png') }}" alt="Icono de perfil">
                </div>
                @if(Auth::user())
                <ul class="dropdown-menu">
                    <li><a href="#">Perfil</a></li>
                    <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <li><input type="submit" value="Cerrar sesión"></li>
                    <form>
                </ul>
                @else
                <ul class="dropdown-menu">
                    <li><a href="{{ route('login') }}">Login</a></li>
                    <li><a href="{{ route('register') }}">Register</a></li>
                    <form>
                </ul>
                @endif
            </div>
          </ul>

        </div>
      </nav>

  </body>
</html>
