@extends('/layout/base')

@section('contenido')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold text-gray-800 text-center mb-6">Departamento en Venta</h1>
    
    <div class="bg-white rounded-lg shadow-md overflow-hidden">
        <!-- Carrusel de imágenes -->
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('images/departamento1.jpg') }}" class="d-block w-100 h-96 object-cover" alt="Departamento en Venta - Imagen 1">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/departamento2.jpg') }}" class="d-block w-100 h-96 object-cover" alt="Departamento en Venta - Imagen 2">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/departamento3.jpg') }}" class="d-block w-100 h-96 object-cover" alt="Departamento en Venta - Imagen 3">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <div class="p-8">
            <h2 class="text-2xl font-semibold text-gray-800">Departamento en Venta</h2>
            <p class="text-gray-600">Ubicación: Zona Centro, Ciudad de México</p>
            <p class="text-gray-600">2 recámaras, 2 baños, 90 m²</p>
            <p class="text-gray-900 font-bold text-xl">Precio: $1,500,000 MXN</p>

            <div class="mt-6">
                <h3 class="text-xl font-semibold text-gray-800">Descripción:</h3>
                <p class="text-gray-600 mt-2">
                    Moderno departamento ubicado en una zona estratégica de la ciudad, cerca de estaciones de metro, centros comerciales y restaurantes. Con 2 recámaras y 2 baños, el departamento está diseñado para ofrecer comodidad, seguridad y calidad de vida. Perfecto para solteros, parejas o pequeños grupos familiares.
                </p>
            </div>

            <div class="mt-6">
                <h3 class="text-xl font-semibold text-gray-800">Características:</h3>
                <ul class="list-disc pl-6 mt-2">
                    <li>Cocina equipada con electrodomésticos de alta gama</li>
                    <li>Balcones con vista panorámica de la ciudad</li>
                    <li>Seguridad las 24 horas</li>
                    <li>Estacionamiento para 1 auto</li>
                    <li>Área común con gimnasio, alberca y salón de eventos</li>
                </ul>
            </div>

            <div class="mt-6">
                <h3 class="text-xl font-semibold text-gray-800">Contactar:</h3>
                <p class="text-gray-600 mt-2">
                    Para más información, contáctanos al número de teléfono: <strong>(555) 345-6789</strong> o al correo electrónico: <strong>info@inmuebles.com</strong>
                </p>
            </div>

            <!-- Enlace para ver más detalles -->
            <div class="mt-6">
                <a href="{{ url('/detalles-departamento-venta') }}" class="text-indigo-600 hover:text-indigo-800 font-semibold">
                    Ver detalles
                </a>
            </div>
        </div>
    </div>
</div>
@endsection