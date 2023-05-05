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
            <img src="{{ asset('images/carneBackground.jpg') }}" alt="Imagen de la hero section">
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
            <a href={{ route('meats') }} id="butCarn">Carnes</a>
        </div>
        <div class="button-row">
            <a aria-label="Ensaladas" href={{ route('salads') }} id="butEns">Ensaladas</a>
            <a aria-label="Libre de alergenos" href={{ route('allergen') }} id="butAlerg">Libre de alérgenos</a>
            <a aria-label="Postres" href={{ route('desserts') }} id="butPost">Postres</a>
        </div>
    </div>
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
    @include('includes.footer')

</body>

</html>
