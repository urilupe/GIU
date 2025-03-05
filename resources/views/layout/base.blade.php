<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <title>InmoPlus</title>
</head>
<header>
    <p></p>
</header>
<body>
    
<nav class="bg-gray-50 dark:bg-gray-700 pd: 10%">
    <div class="max-w-screen-xl px-4 py-3 mx-auto ">
        <div class="flex items-center">
            <ul class="flex flex-row font-medium mt-0 space-x-8 rtl:space-x-reverse text-sm">
                <a href="https://flowbite.com" class="flex items-center space-x-3 rtl:space-x-reverse">
                    <img src="https://flowbite.com/docs/images/logo.svg" class="h-8" alt="Flowbite Logo" />
                    <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Flowbite</span>
                </a>
                <li><a href="{{ route('bienvenida') }}">Bienvenida</a></li>
                <li><a href="{{ route('galeria') }}">Galería</a></li>
                <li><a href="{{ route('quienes-somos') }}">Quiénes Somos</a></li>
                <li><a href="{{ route('contacto') }}">Contáctanos</a></li>
                <li><a href="{{ route('venta') }}">Venta</a></li>
                <li><a href="{{ route('renta') }}">Renta</a></li>
            </ul>
        </div>
    </div>
</nav>

    
    <nav>
        <ul>

            
            
            
            
            <li><a href="{{ route('flowbite') }}">Flowbite</a></li>

        </ul>
    </nav>
    <main>
        @yield('contenido')
    </main>

    <footer>
        <p>
            ESTE ES EL PIE DE SITIO
        </p>
    </footer>
</body>
</html>