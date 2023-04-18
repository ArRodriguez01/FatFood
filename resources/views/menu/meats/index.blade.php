<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('css/menu.css') }}"/>
    <title>Carnes</title>
  </head>

  <body>
    @include('includes.nav')
    <div class="button-panel">
      <div class="button-row">
        <a href={{route('drinks')}} id="butBeb">Bebidas</a>
        <a href={{route('sides')}} id="butPat">Entrantes</a>
        <a href={{route('burgers')}} id="butHam">Hamburguesas</a>
      </div>
      <div class="button-row">
        <a href={{route('salads')}} id="butEns">Ensaladas</a>
        <a href={{route('allergen')}} id="butAlerg">Libre de alérgenos</a>
        <a href={{route('desserts')}} id="butPost">Postres</a>
      </div>
    </div>
    <center><h2>CARNES</h2></center>

    @if(count($meats)!=0)
    @foreach ($meats as $meat)
    <div class="cajaMenu">
      <div class="container">
        <img src="{{ $meat->url}}" alt="Descripción de la imagen" />
        <div class="container2">
          <p>{{ $meat->name }}</p>
          <p>{{ $meat->ingredientes }}</p>
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
