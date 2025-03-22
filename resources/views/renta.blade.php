@extends('/layout/base')
@section('contenido')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold text-gray-800 text-center mb-6">Casas en Renta</h1>
    
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <!-- Casa 1 -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <img class="w-full h-56 object-cover" src="{{ asset('images/renta1.jpg') }}" alt="Casa 1">
            <div class="p-4">
                <h2 class="text-lg font-semibold text-gray-800">Casa en la Playa</h2>
                <p class="text-gray-600">2 recámaras, 1 baño, 90 m²</p>
                <p class="text-gray-900 font-bold">$15,000 MXN / mes</p>
                <a href="{{ url('Casa_Playa') }}" class="block mt-4 text-blue-500 hover:underline">Ver detalles</a>
            </div>
        </div>

        <!-- Casa 2 -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <img class="w-full h-56 object-cover" src="{{ asset('images/renta2.jpg') }}" alt="Casa 2">
            <div class="p-4">
                <h2 class="text-lg font-semibold text-gray-800">Casa en Zona Residencial</h2>
                <p class="text-gray-600">3 recámaras, 2 baños, 150 m²</p>
                <p class="text-gray-900 font-bold">$22,000 MXN / mes</p>
                <a href="{{ url('Casa_Residencial') }}" class="block mt-4 text-blue-500 hover:underline">Ver detalles</a>
            </div>
        </div>

        <!-- Casa 3 -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <img class="w-full h-56 object-cover" src="{{ asset('images/renta3.jpg') }}" alt="Casa 3">
            <div class="p-4">
                <h2 class="text-lg font-semibold text-gray-800">Casa con Jardín</h2>
                <p class="text-gray-600">4 recámaras, 3 baños, 200 m²</p>
                <p class="text-gray-900 font-bold">$25,000 MXN / mes</p>
                <a href="{{ url('Casa_Jardin') }}" class="block mt-4 text-blue-500 hover:underline">Ver detalles</a>
            </div>
        </div>
    </div>
</div>
@endsection