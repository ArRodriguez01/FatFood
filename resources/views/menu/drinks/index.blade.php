<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('css/menu.css') }}"/>
    <title>Bebidas</title>
  </head>

  <body>
    @include('includes.nav')
    <div class="button-panel">
      <div class="button-row">
        <a href={{route('burgers')}} id="butHam">Hamburguesas</a>
        <a href={{route('sides')}} id="butPat">Entrantes</a>
        <a href={{route('meats')}} id="butCarn">Carnes</a>
      </div>
      <div class="button-row">
        <a href={{route('salads')}} id="butEns">Ensaladas</a>
        <a href={{route('allergen')}} id="butAlerg">Libre de alérgenos</a>
        <a href={{route('desserts')}} id="butPost">Postres</a>
      </div>
    </div>
    <center><h2>BEBIDAS</h2></center>

    @if(count($drinks)!=0)
    @foreach ($drinks as $drink)
    <div class="cajaMenu">
      <div class="container">
        <img src="{{ $drink->url}}" alt="Descripción de la imagen" />
        <div class="container2">
          <p>{{ $drink->name }}</p>
          <p>{{ $drink->ingredientes }}</p>
          @if(Auth::user())
          <button type="submit">Añadir al carrito</button>
          @endif
        </div>
      </div>
    </div>
    @endforeach
    @else
    <p>No hay menus por el momento</p>
    @endif
    @include('includes.footer')
  </body>
</html>
