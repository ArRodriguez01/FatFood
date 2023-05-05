<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}"/>
    <title>Footer</title>
</head>
<body>
    <footer>
        <div class="links">
          <ul>
            <li><a aria-label="Menu" id="titFoot" href={{route('home')}}>Menu</a></li>
            <li><a aria-label="Hamburguesas" href={{route('burgers')}}>Hamburguesas</a></li>
            <li><a aria-label="Entrantes" href={{route('sides')}}>Entrantes</a></li>
            <li><a aria-label="Postres" href={{route('desserts')}}>Postres</a></li>
            <li><a aria-label="Bebidas" href={{route('drinks')}}>Bebidas</a></li>
            <li><a aria-label="Carnes a la brasa" href={{route('meats')}}>Carnes</a></li>
            <li><a aria-label="Libres de alergenos" href={{route('allergen')}}>Libre de alérgenos</a></li>
          </ul>
          </div>
          <div class="links">
            <ul>
              <li><a aria-label="Sobre nosotros" id="titFoot" href="#">Sobre nosotros</a></li>
              <li><a aria-label="Ubicacion" href="#">Ubicación</a></li>
              <li><a aria-label="Politica privacidad" href={{route('privacy')}}>Política de privacidad</a></li>
              <li><a aria-label="Aviso legal" href={{route('avlegal')}}>Aviso legal</a></li>
              <li><a aria-label="Empleo" href="#">Empleo</a></li>
              <li><a aria-label="Carta de alergenos" href="#">Carta de alérgenos</a></li>
            </ul>
        </div>
        <div class="social-icons">
          <a aria-label="Nuestro Instagram" href="https://instagram.com/fatfoodnuria?igshid=YmMyMTA2M2Y="><img src={{ asset('images/instagram.png') }} alt="Logo de Instagram"></a>
          <a aria-label="Nuestro Linkedin" href="#"><img src={{ asset('images/linkedin.png') }} alt="Logo de LinkedIn"></a>
          <a aria-label="Nuestro Facebook " href="#"><img src={{ asset('images/facebook.png') }} alt="Logo de Facebook"></a>
        </div>
        <div id="logo">
          <img src={{ asset('images/logo_blanco.png') }} alt="Logo"></a>
        </div>
      </footer>

</body>
</html>
