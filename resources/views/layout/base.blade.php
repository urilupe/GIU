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
                <li><a href="{{ route('quienes-somos') }}" class="hover:underline">¿Quiénes Somos?</a></li>
                <li><a href="{{ route('venta') }}" class="hover:underline">Venta</a></li>
                <li><a href="{{ route('renta') }}" class="hover:underline">Renta</a></li>
                <li><a href="{{ route('Preguntas_Frecuentes')}}" class="hover:underline">Preguntas Frecuentes</a></li>
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

    

<footer class="bg-white rounded-lg shadow-sm m-4 dark:bg-gray-800">
    <div class="w-full mx-auto max-w-screen-xl p-4 md:flex md:items-center md:justify-between">
      <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023 <a href="https://flowbite.com/" class="hover:underline">Flowbite™</a>. All Rights Reserved.
    </span>
    <ul class="flex flex-wrap items-center mt-3 text-sm font-medium text-gray-500 dark:text-gray-400 sm:mt-0">
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

</body>
</html>