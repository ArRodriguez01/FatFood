<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('css/menu.css') }}"/>
    <title>Entrantes</title>
  </head>

  <body>
    @include('includes.nav')
    <div class="button-panel">
      <div class="button-row">
        <a aria-label="Bebidas" href={{route('drinks')}} id="butBeb">Bebidas</a>
        <a aria-label="Hamburguesas" href={{route('burgers')}} id="butHam">Hamburguesas</a>
        <a aria-label="Carnes a la brasa" href={{route('meats')}} id="butCarn">Carnes</a>
      </div>
      <div class="button-row">
        <a aria-label="Ensaladas" href={{route('salads')}} id="butEns">Ensaladas</a>
        <a aria-label="Libre de alergenos" href={{route('allergen')}} id="butAlerg">Libre de alérgenos</a>
        <a aria-label="Postres" href={{route('desserts')}} id="butPost">Postres</a>
      </div>
    </div>
    <h2 aria-label="Seccion de entrantes">ENTRANTES</h2>
    <div class="menus">
    @if(count($sides)!=0)
    @foreach ($sides as $side)
    <div class="cajaMenu">
      <div class="container">
        <img src="{{ $side->url}}" alt="Descripción de la imagen" />
        <div class="container2">
          <p>{{ $side->name }}</p>
          <p>{{ $side->ingredientes }}</p>
          @if(Auth::user())
          <form action="{{route('cart.add',$side->id)}}" method="GET">
            <button  type="submit">Añadir</button>
            </form>
          @endif
        </div>
      </div>
    </div>
    @endforeach
    @else
    <p>No hay menus por el momento</p>
    @endif
    </div>
    @include('includes.footer')
  </body>
</html>
