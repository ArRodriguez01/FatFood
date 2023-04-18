<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>FatFood</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    </head>
    <body>
        @include('includes.nav')
      <section class="hero-section">
        <div class="hero-image">
          <img src="{{ asset('images/homeBackground.png') }}" alt="Imagen de la hero section">
        </div>
      </section>

      <center><h2>CONOCE NUESTROS PLATOS</h2></center>

      <div class="button-panel">
        <div class="button-row">
            <a href={{route('burgers')}} id="butHam">Hamburguesa</a>
            <a href={{route('sides')}} id="butPat">Entrantes</a>
            <a href={{route('meats')}} id="butCarn">Carnes</a>
        </div>
        <div class="button-row">
          <a href={{route('salads')}} id="butEns">Ensaladas</a>
          <a href={{route('allergen')}} id="butAlerg">Libre de alérgenos</a>
          <a href={{route('desserts')}} id="butPost">Postres</a>
        </div>
      </div>
      @include('includes.footer')
    </body>
</html>
