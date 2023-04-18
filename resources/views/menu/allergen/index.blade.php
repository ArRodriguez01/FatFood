<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('css/menu.css') }}"/>
    <title>Libre de alergenos</title>
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
        <a href={{route('salads')}} id="butEns">Ensaladas</a>
        <a href={{route('burgers')}} id="butHam">Hamburguesas</a>
        <a href={{route('desserts')}} id="butPost">Postres</a>
      </div>
    </div>
    <center><h2>LIBRE DE ALERGENOS</h2></center>

    <div class="cajaMenu">
      <div class="container">
        <img src="" alt="Descripción de la imagen" />
        <div class="container2">
          <p></p>
          <p></p>
          <button type="submit">Añadir</button>
        </div>
      </div>
    </div>
    @include('includes.footer')
  </body>
</html>
