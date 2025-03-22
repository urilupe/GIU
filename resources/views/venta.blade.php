@extends('/layout/base')
@section('contenido')
   <div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold text-gray-800 text-center mb-6">Casas en Venta</h1>
    
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <!-- Casa 1 -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <img class="w-full h-56 object-cover" src="{{ asset('images/venta1.jpg') }}" alt="Casa 1">
            <div class="p-4">
                <h2 class="text-lg font-semibold text-gray-800">Casa en el Centro</h2>
                <p class="text-gray-600">3 recámaras, 2 baños, 120 m²</p>
                <p class="text-gray-900 font-bold">$1,500,000 MXN</p>
                <a href="{{ url('Casa_Centro') }}" class="block mt-4 text-blue-500 hover:underline">Ver detalles</a>
            </div>
        </div>

        <!-- Casa 2 -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <img class="w-full h-56 object-cover" src="{{ asset('images/venta2.jpg') }}" alt="Casa 2">
            <div class="p-4">
                <h2 class="text-lg font-semibold text-gray-800">Residencia Moderna</h2>
                <p class="text-gray-600">4 recámaras, 3 baños, 250 m²</p>
                <p class="text-gray-900 font-bold">$3,200,000 MXN</p>
                <a href="{{ url('Casa_Moderna') }}" class="block mt-4 text-blue-500 hover:underline">Ver detalles</a>
            </div>
        </div>
        <!-- Casa 3 -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <img class="w-full h-56 object-cover" src="{{ asset('images/venta3.jpg') }}" alt="Casa 3">
            <div class="p-4">
                <h2 class="text-lg font-semibold text-gray-800">Departamento en Venta</h2>
                <p class="text-gray-600">2 recámaras, 2 baños, 90 m²</p>
                <p class="text-gray-900 font-bold">$1,500,000 MXN</p>
                <a href="{{ url('Departamento') }}" class="block mt-4 text-blue-500 hover:underline">Ver detalles</a>
            </div>
        </div>
        </div>
    </div>
</div>
@endsection