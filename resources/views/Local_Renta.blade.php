@extends('/layout/base')

@section('contenido')
<div id="casa-centro" class="property-item casas container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold text-gray-800 text-center mb-6">Detalles del Local en Renta</h1>
    
    <div id="default-carousel" class="relative w-full h-[600px]]" data-carousel="slide">
        <!-- Carousel wrapper -->
        <div id="default-carousel" class="relative w-full bg-gray-100" data-carousel="slide">
            <!-- Contenedor principal (ajusta la altura según necesites) -->
            <div class="relative h-96 overflow-hidden">
                <!-- Ítems del carrusel -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <div class="flex items-center justify-center w-full h-full">
                        <img 
                            src="{{ asset('images/LocalRenta1.jpg') }}" 
                            class="max-w-full max-h-full object-contain" 
                            alt="Imagen 1"
                        >
                    </div>
                </div>
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <div class="flex items-center justify-center w-full h-full">
                        <img 
                            src="{{ asset('images/LocalRenta2.jpg') }}" 
                            class="max-w-full max-h-full object-contain" 
                            alt="Imagen 2"
                        >
                    </div>
                </div>
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <div class="flex items-center justify-center w-full h-full">
                        <img 
                            src="{{ asset('images/LocalRenta3.jpg') }}" 
                            class="max-w-full max-h-full object-contain" 
                            alt="Imagen 3"
                        > 
                    </div>
                </div>
       

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
            <h2 class="text-2xl font-semibold text-gray-800">Local en Renta</h2>
            <p class="text-gray-600">Andares: Zapopan, Jalisco</p>
            <p class="text-gray-900 font-bold text-xl">Precio: $50,000 MXN / mes</p>

            <div class="mt-6">
                <h3 class="text-xl font-semibold text-gray-800">Descripción:</h3>
                <p class="text-gray-600 mt-2">
                    Se vende excelente local comercial ubicado dentro de una reconocida plaza comercial con alto flujo de clientes diarios. Ideal para negocios como boutique, cafetería, consultorio, oficina o franquicia.
                </p>
            </div>

            <div class="mt-6">
                <h3 class="text-xl font-semibold text-gray-800">Características:</h3>
                <ul class="list-disc pl-6 mt-2">
                    <li>Tamaño: 20 m2</li>
                    <li>1 baño</li>
                    <li>Luz electrica</li>
                    <li>Zona principal</li>
                    <li>Servicio de Agua</li>
                </ul>
            </div>

            <div class="mt-6">
                <h3 class="text-xl font-semibold text-gray-800">Contactar:</h3>
                <p class="text-gray-600 mt-2">
                    Para más información, contáctanos al número de teléfono: <strong>(123) 456-7890</strong> o al correo electrónico: <strong>info@inmuebles.com</strong>
                </p>
            </div>
        </div>
    </div>
</div>
@endsection