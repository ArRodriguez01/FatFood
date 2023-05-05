<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <title>Home</title>
</head>

<body>
    @include('includes.nav')
    <section class="hero-section">
        <div class="hero-image">
            <img src="{{ asset('images/slide1.jpg') }}" alt="Imagen de la hero section">
            <img src="{{ asset('images/slide2.jpg') }}" alt="Imagen de la hero section">
            <img src="{{ asset('images/slide3.jpg') }}" alt="Imagen de la hero section">
            <img src="{{ asset('images/slide4.jpg') }}" alt="Imagen de la hero section">
            <img src="{{ asset('images/slide5.jpg') }}" alt="Imagen de la hero section">

        </div>
    </section>

    <center>
        <h2>CONOCE NUESTROS PLATOS</h2>
    </center>

    <div class="button-panel">
        <div class="button-row">
            <a aria-label="Hamburguesas" href={{ route('burgers') }} id="butHam">Hamburguesa</a>
            <a aria-label="Entrantes" href={{ route('sides') }} id="butPat">Entrantes</a>
            <a aria-label="Carnes a la brasa" href={{ route('meats') }} id="butCarn">Carnes</a>
        </div>
        <div class="button-row">
            <a aria-label="Ensaladas" href={{ route('salads') }} id="butEns">Ensaladas</a>
            <a aria-label="Libre de alergenos" href={{ route('allergen') }} id="butAlerg">Libre de alérgenos</a>
            <a aria-label="Postres" href={{ route('desserts') }} id="butPost">Postres</a>
        </div>
    </div>
    @include('includes.footer')
    <script>
        const images = document.querySelectorAll('.hero-image img');
        let currentIndex = 0;

        // Mostrar la primera imagen
        images[currentIndex].classList.add('active');

        setInterval(() => {
            // Ocultar la imagen actual
            images[currentIndex].classList.remove('active');

            // Obtener el índice de la siguiente imagen
            currentIndex = (currentIndex + 1) % images.length;

            // Mostrar la siguiente imagen
            images[currentIndex].classList.add('active');
        }, 5000);
    </script>
</body>

</html>
