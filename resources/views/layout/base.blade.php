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

    <nav class="bg-gray-900 mt-6 mx-auto max-w-5xl px-6 py-3 rounded-full shadow-lg">
        <div class="flex items-center justify-between">
            <!-- Logo -->
            <a href="https://flowbite.com" class="flex items-center space-x-3">
                <img src="../images/logo.jpg" alt="Logo" class="w-14 h-14 object-contain rounded-full">
                <span class="text-white text-2xl font-semibold">Vívika</span>
            </a>
    
            <!-- Menú de navegación -->
            <ul class="flex flex-row space-x-6 text-white text-sm">
                <li><a href="{{ route('bienvenida') }}" class="hover:underline">Inicio</a></li>
                <li><a href="{{ route('contacto') }}" class="hover:underline">Contáctanos</a></li>
                <li><a href="{{ route('quienes-somos') }}" class="hover:underline">Quiénes Somos?</a></li>
                <li><a href="{{ route('venta') }}" class="hover:underline">Venta</a></li>
                <li><a href="{{ route('renta') }}" class="hover:underline">Renta</a></li>
            </ul>
    
            <!-- Caja de búsqueda -->
            <div class="relative">
                <input type="text" class="pl-8 pr-4 py-2 rounded-full bg-gray-200 text-gray-800 focus:outline-none" placeholder="🔍">
                <span class="absolute left-2 top-1/2 transform -translate-y-1/2 text-gray-600"></span>
            </div>
        </div>
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