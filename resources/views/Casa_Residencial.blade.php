@extends('/layout/base')

@section('contenido')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold text-gray-800 text-center mb-6">Detalles de la Casa en Renta</h1>
    
    <div class="bg-white rounded-lg shadow-md overflow-hidden">
        <!-- Carrusel de imágenes -->
        <div id="default-carousel" class="relative w-full" data-carousel="slide">
            <!-- Carousel wrapper -->
            <div class="relative h-96 overflow-hidden rounded-lg">
                <!-- Item 1 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <div class="absolute inset-0 flex items-center justify-center">
                        <img src="{{ asset('images/residencial1.jpg') }}" class="w-full h-full object-cover" alt="Casa con Jardín - Imagen 1">
                    </div>
                </div>
                <!-- Item 2 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <div class="absolute inset-0 flex items-center justify-center">
                        <img src="{{ asset('images/residencial2.jpg') }}" class="w-full h-full object-cover" alt="Casa con Jardín - Imagen 2">
                    </div>
                </div>
                <!-- Item 3 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <div class="absolute inset-0 flex items-center justify-center">
                        <img src="{{ asset('images/residencial3.jpg') }}" class="w-full h-full object-cover" alt="Casa con Jardín - Imagen 3">
                    </div>
                </div>
            </div>
            <!-- Slider controls (mantener igual) -->
           

            <!-- Botón Anterior (Flecha Izquierda) -->
<button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
    <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/80 group-hover:bg-white/90 group-focus:ring-2 group-focus:ring-black group-focus:outline-none">
        <svg class="w-6 h-6 text-black" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
        </svg>
        <span class="sr-only">Previous</span>
    </span>
</button>

<!-- Botón Siguiente (Flecha Derecha) -->
<button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
    <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/80 group-hover:bg-white/90 group-focus:ring-2 group-focus:ring-black group-focus:outline-none">
        <svg class="w-6 h-6 text-black" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
        </svg>
        <span class="sr-only">Next</span>
    </span>
</button>
        </div>

        <div class="p-8">
            <h2 class="text-2xl font-semibold text-gray-800">Casa Residencial</h2>
            <p class="text-gray-600">Ubicación: Zona Residencial, Ciudad de México</p>
            <p class="text-gray-600">3 recámaras, 2 baños, 120 m²</p>
            <p class="text-gray-900 font-bold text-xl">Precio: $22,000 MXN / mes</p>

            <div class="mt-6">
                <h3 class="text-xl font-semibold text-gray-800">Descripción:</h3>
                <p class="text-gray-600 mt-2">
                    Casa con acabados modernos en una zona tranquila y segura. Ideal para familias que buscan comodidad y tranquilidad.
                </p>
            </div>

            <div class="mt-6">
                <h3 class="text-xl font-semibold text-gray-800">Características:</h3>
                <ul class="list-disc pl-6 mt-2">
                    <li>Aire acondicionado</li>
                    <li>Jardín</li>
                    <li>Estacionamiento para 2 autos</li>
                    <li>Cerca de escuelas y parques</li>
                </ul>
            </div>

            <div class="mt-6">
                <h3 class="text-xl font-semibold text-gray-800">Contactar:</h3>
                <p class="text-gray-600 mt-2">
                    Para más información, contáctanos al número de teléfono: <strong>(987) 654-3210</strong> o al correo electrónico: <strong>info@inmuebles.com</strong>
                </p>
            </div>
        </div>
    </div>
</div>
@endsection