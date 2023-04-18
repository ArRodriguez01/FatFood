<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('css/menu.css') }}"/>
    <title>Ensaladas</title>
  </head>

  <body>
    @include('includes.nav')
    <div class="button-panel">
      <div class="button-row">
        <a href={{route('drinks')}} id="butBeb">Bebidas</a>
        <a href={{route('sides')}} id="butPat">Entrantes</a>
        <a href={{route('meats')}} id="butCarn">Carnes</a>
      </div>
      <div class="button-row">
        <a href={{route('burgers')}} id="butHam">Hamburguesas</a>
        <a href={{route('allergen')}} id="butAlerg">Libre de alérgenos</a>
        <a href={{route('desserts')}} id="butPost">Postres</a>
      </div>
    </div>
    <center><h2>ENSALADAS</h2></center>

    @if(count($salads)!=0)
    @foreach ($salads as $salad)
    <div class="cajaMenu">
      <div class="container">
        <img src="{{ $salad->url}}" alt="Descripción de la imagen" />
        <div class="container2">
          <p>{{ $salad->name }}</p>
          <p>{{ $salad->ingredientes }}</p>
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
