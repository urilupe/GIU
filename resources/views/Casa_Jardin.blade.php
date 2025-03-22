@extends('/layout/base')

@section('contenido')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold text-gray-800 text-center mb-6">Detalles de la Casa con Jardín</h1>
    
    <div class="bg-white rounded-lg shadow-md overflow-hidden">
        <!-- Carrusel de imágenes -->
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('images/jardin1.jpg') }}" class="d-block w-100 h-96 object-cover" alt="Casa con Jardín - Imagen 1">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/jardin2.jpg') }}" class="d-block w-100 h-96 object-cover" alt="Casa con Jardín - Imagen 2">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/jardin3.jpg') }}" class="d-block w-100 h-96 object-cover" alt="Casa con Jardín - Imagen 3">
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
            <h2 class="text-2xl font-semibold text-gray-800">Casa con Jardín</h2>
            <p class="text-gray-600">Ubicación: Zona Exclusiva, Ciudad de México</p>
            <p class="text-gray-600">4 recámaras, 3 baños, 200 m²</p>
            <p class="text-gray-900 font-bold text-xl">Precio: $25,000 MXN / mes</p>

            <div class="mt-6">
                <h3 class="text-xl font-semibold text-gray-800">Descripción:</h3>
                <p class="text-gray-600 mt-2">
                    Hermosa casa ubicada en una zona exclusiva, con amplios espacios y un jardín ideal para disfrutar en familia. Cuenta con 4 recámaras, 3 baños completos, y una terraza ideal para reuniones.
                </p>
            </div>

            <div class="mt-6">
                <h3 class="text-xl font-semibold text-gray-800">Características:</h3>
                <ul class="list-disc pl-6 mt-2">
                    <li>Aire acondicionado en todas las habitaciones</li>
                    <li>Jardín privado</li>
                    <li>Terraza con área de parrillada</li>
                    <li>Estacionamiento para 3 autos</li>
                    <li>Vigilancia 24 horas</li>
                </ul>
            </div>

            <div class="mt-6">
                <h3 class="text-xl font-semibold text-gray-800">Contactar:</h3>
                <p class="text-gray-600 mt-2">
                    Para más información, contáctanos al número de teléfono: <strong>(321) 654-9870</strong> o al correo electrónico: <strong>info@inmuebles.com</strong>
                </p>
            </div>
        </div>
    </div>
</div>
@endsection