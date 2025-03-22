@extends('/layout/base')

@section('contenido')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold text-gray-800 text-center mb-6">Detalles de la Casa en Renta</h1>
    
    <div class="bg-white rounded-lg shadow-md overflow-hidden">
        <!-- Carrusel de imágenes -->
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('images/playa1.jpg') }}" class="d-block w-100 h-96 object-cover" alt="Casa en Renta - Imagen 1">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/playa2.jpg') }}" class="d-block w-100 h-96 object-cover" alt="Casa en Renta - Imagen 2">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/playa3.jpg') }}" class="d-block w-100 h-96 object-cover" alt="Casa en Renta - Imagen 3">
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
            <h2 class="text-2xl font-semibold text-gray-800">Casa en la Playa</h2>
            <p class="text-gray-600">Ubicación: Playa del Carmen, Quintana Roo</p>
            <p class="text-gray-600">2 recámaras, 1 baño, 90 m²</p>
            <p class="text-gray-900 font-bold text-xl">Precio: $15,000 MXN / mes</p>

            <div class="mt-6">
                <h3 class="text-xl font-semibold text-gray-800">Descripción:</h3>
                <p class="text-gray-600 mt-2">
                    Esta hermosa casa está ubicada en la playa, ideal para disfrutar de la brisa marina. Con dos recámaras, un baño completo, y un hermoso jardín, es el lugar perfecto para descansar.
                </p>
            </div>

            <div class="mt-6">
                <h3 class="text-xl font-semibold text-gray-800">Características:</h3>
                <ul class="list-disc pl-6 mt-2">
                    <li>Aire acondicionado</li>
                    <li>Alberca privada</li>
                    <li>Cerca de tiendas y restaurantes</li>
                    <li>Estacionamiento para 2 autos</li>
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