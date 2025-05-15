<!DOCTYPE html>
<html lang="en">
<head>
     <!-- Incluir Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Incluir Flowbite CSS -->
    <link href="https://cdn.jsdelivr.net/npm/flowbite@1.4.2/dist/flowbite.min.css" rel="stylesheet">
    
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
    <div class="flex flex-wrap items-center justify-between">
        <!-- Logo -->
        <a href="https://flowbite.com" class="flex items-center space-x-3">
            <img src="../images/logo.jpg" alt="Logo" class="w-14 h-14 object-contain rounded-full">
            <span class="text-white text-3xl font-semibold">Vívika</span>
        </a>

        <!-- Botón hamburguesa (solo visible en móviles) -->
        <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 ml-3 text-sm text-gray-400 rounded-lg md:hidden hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
            <span class="sr-only">Abrir menú</span>
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
            </svg>
        </button>

        <!-- Menú de navegación -->
        <div class="hidden w-full md:block md:w-auto" id="navbar-default">
            <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-700 rounded-lg bg-gray-900 md:flex-row md:space-x-6 md:mt-0 md:border-0">
                <li><a href="{{ route('bienvenida') }}" class="block py-2 px-3 text-white hover:underline">Inicio</a></li>
                <li><a href="{{ route('contacto') }}" class="block py-2 px-3 text-white hover:underline">Contáctanos</a></li>
                <li><a href="{{ route('quienes-somos') }}" class="block py-2 px-3 text-white hover:underline">¿Quiénes Somos?</a></li>
                <li><a href="{{ route('venta') }}" class="block py-2 px-3 text-white hover:underline">Venta</a></li>
                <li><a href="{{ route('renta') }}" class="block py-2 px-3 text-white hover:underline">Renta</a></li>
                <li><a href="{{ route('Preguntas_Frecuentes') }}" class="block py-2 px-3 text-white hover:underline">Preguntas Frecuentes</a></li>
            </ul>
        </div>
    </div>
</nav>
    

    <main>
        @yield('contenido')
    </main>

    

<footer class="bg-white rounded-lg shadow-sm m-4 dark:bg-gray-800">
    <div class="w-full mx-auto max-w-screen-xl p-4 md:flex md:items-center md:justify-between">
      <span class="text-xl text-gray-500 sm:text-center dark:text-gray-400">© 2023 <a href="https://flowbite.com/" class="hover:underline">Flowbite™</a>. All Rights Reserved.
    </span>
    <ul class="flex flex-wrap items-center mt-3 text-xl font-medium text-gray-500 dark:text-gray-400 sm:mt-0">
        <li>
            <a href="#" class="hover:underline me-4 md:me-6">About</a>
        </li>
        <li>
            <a href="#" class="hover:underline me-4 md:me-6">Privacy Policy</a>
        </li>
        <li>
            <a href="#" class="hover:underline me-4 md:me-6">Licensing</a>
        </li>
        <li>
            <a href="#" class="hover:underline">Contact</a>
        </li>
    </ul>
    </div>
</footer>

<script src="{{ asset('js/categorias.js') }}"></script>
</body>
</html>

