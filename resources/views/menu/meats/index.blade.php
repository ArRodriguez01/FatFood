<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
    <link rel="stylesheet" href="{{ asset('css/menu.css') }}"/>
    <link rel="icon" type="image/png" href={{ asset('images/logo1(1).png') }}>
    <title>Carnes</title>
  </head>

  <body>
    @include('includes.nav')
    <div class="button-panel">
      <div class="button-row">
        <a aria-label="Bebidas" href={{route('drinks')}} id="butBeb">Bebidas</a>
        <a aria-label="Entrantes" href={{route('sides')}} id="butPat">Entrantes</a>
        <a aria-label="Hamburguesas" href={{route('burgers')}} id="butHam">Hamburguesas</a>
      </div>
      <div class="button-row">
        <a aria-label="Ensaladas" href={{route('salads')}} id="butEns">Ensaladas</a>
        <a aria-label="Libre de alergenos" href={{route('allergen')}} id="butAlerg">Libre de alérgenos</a>
        <a aria-label="Postres" href={{route('desserts')}} id="butPost">Postres</a>
      </div>
    </div>
    <h2>CARNES</h2>
    <div id="notification"></div>
    <div class="menus">
    @if(count($meats)!=0)
    @foreach ($meats as $meat)
    <div class="cajaMenu">
      <div class="container">
        <img src="{{ $meat->url}}" alt="Descripción de la imagen" />
        <div class="container2">
        <h1>{{ $meat->name }}</h1>
          <p id="p1">{{ $meat->ingredientes }}</p>
          <p id="p2">{{ $meat->price }}€</p>
          @if(Auth::user())
          <form action="{{route('cart.add',$meat->id)}}" method="GET" id="addForm">
                <button type="submit">Añadir</button>
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
    <script>
      var addForm = document.getElementById("addForm");

      addForm.addEventListener("submit", function(event) {
        event.preventDefault(); // Evitar el envío del formulario

        showNotification("El elemento se ha añadido al carrito");
      });

      function showNotification(message) {
        Toastify({
          text: message,
          duration: 3000,
          newWindow: true,
          close: true,
          gravity: "top",
          position: "right",
          backgroundColor: "linear-gradient(to right, #00b09b, #96c93d)",
          stopOnFocus: true,
        }).showToast();
      }
    </script>
  </body>
</html>
