@extends('/layout/base')
@section('contenido')

<div class="flex items-center justify-center py-4 md:py-8 flex-wrap"> 
    <button id="btn_all" type="button" class="text-blue-700 hover:text-blue-100 border border-blue-600 bg-white hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-full text-xl font-medium px-5 py-2.5 text-center me-3 mb-3 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:bg-gray-900 dark:focus:ring-blue-800">Todas las categorías</button>
    <button id="btn_casas" type="button" class="text-gray-900 border border-white hover:border-gray-200 dark:border-gray-900 dark:bg-gray-900 dark:hover:border-gray-700 bg-white focus:ring-4 focus:outline-none focus:ring-gray-300 rounded-full text-xl font-medium px-5 py-2.5 text-center me-3 mb-3 dark:text-white dark:focus:ring-gray-800">Casas</button>
    <button id="btn_departamentos" type="button" class="text-gray-900 border border-white hover:border-gray-200 dark:border-gray-900 dark:bg-gray-900 dark:hover:border-gray-700 bg-white focus:ring-4 focus:outline-none focus:ring-gray-300 rounded-full text-xl font-medium px-5 py-2.5 text-center me-3 mb-3 dark:text-white dark:focus:ring-gray-800">Departamentos</button>
    <button id="btn_terrenos" type="button" class="text-gray-900 border border-white hover:border-gray-200 dark:border-gray-900 dark:bg-gray-900 dark:hover:border-gray-700 bg-white focus:ring-4 focus:outline-none focus:ring-gray-300 rounded-full text-xl font-medium px-5 py-2.5 text-center me-3 mb-3 dark:text-white dark:focus:ring-gray-800">Terrenos</button>
    <button id="btn_locales" type="button" class="text-gray-900 border border-white hover:border-gray-200 dark:border-gray-900 dark:bg-gray-900 dark:hover:border-gray-700 bg-white focus:ring-4 focus:outline-none focus:ring-gray-300 rounded-full text-xl font-medium px-5 py-2.5 text-center me-3 mb-3 dark:text-white dark:focus:ring-gray-800">Locales</button>
    <button id="btn_bodegas" type="button" class="text-gray-900 border border-white hover:border-gray-200 dark:border-gray-900 dark:bg-gray-900 dark:hover:border-gray-700 bg-white focus:ring-4 focus:outline-none focus:ring-gray-300 rounded-full text-xl font-medium px-5 py-2.5 text-center me-3 mb-3 dark:text-white dark:focus:ring-gray-800">Bodegas</button>
    
    <button id="dropdownSearchButton" data-dropdown-toggle="dropdownSearch" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">Sub categorias <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
      </svg>
    </button>
    
    <!-- Dropdown menu -->
    
    <div id="dropdownSearch" class="z-10 hidden bg-white rounded-lg shadow-sm w-60 dark:bg-gray-700">
        <div class="p-3">
          <label for="input-group-search" class="sr-only">Search</label>
          <div class="relative">
            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
              <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
            </svg>
            </div>
            <input type="text" id="input-group-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Buscar propiedad...">
          </div>
        </div>
        <ul class="h-48 px-3 pb-3 overflow-y-auto text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownSearchButton">
            Baños
            <li>
              <div class="flex items-center p-2 rounded-sm hover:bg-gray-100 dark:hover:bg-gray-600">
                <input id="checkbox-bano1" type="checkbox" value="1_bano" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded-sm focus:ring-blue-500 dark:focus:ring-blue-600 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                <label for="checkbox-bano1" class="w-full ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">1 Baño</label>
              </div>
            </li>
            <li>
              <div class="flex items-center p-2 rounded-sm hover:bg-gray-100 dark:hover:bg-gray-600">
                <input id="checkbox-bano2" type="checkbox" value="2_banos" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded-sm focus:ring-blue-500 dark:focus:ring-blue-600 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                <label for="checkbox-bano2" class="w-full ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">2 Baños</label>
              </div>
            </li>
            <li>
              <div class="flex items-center p-2 rounded-sm hover:bg-gray-100 dark:hover:bg-gray-600">
                <input id="checkbox-bano3" type="checkbox" value="3_banos" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded-sm focus:ring-blue-500 dark:focus:ring-blue-600 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                <label for="checkbox-bano3" class="w-full ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">3 Baños</label>
              </div>
            </li>
            Recámaras
            <li>
              <div class="flex items-center p-2 rounded-sm hover:bg-gray-100 dark:hover:bg-gray-600">
                <input id="checkbox-recamara2" type="checkbox" value="2_recámaras" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded-sm focus:ring-blue-500 dark:focus:ring-blue-600 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                <label for="checkbox-recamara2" class="w-full ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">2 Recámaras</label>
              </div>
            </li>
            <li>
                <div class="flex items-center p-2 rounded-sm hover:bg-gray-100 dark:hover:bg-gray-600">
                  <input id="checkbox-recamara3" type="checkbox" value="3_recámaras" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded-sm focus:ring-blue-500 dark:focus:ring-blue-600 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                  <label for="checkbox-recamara3" class="w-full ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">3 Recámaras</label>
                </div>
              </li>
              <li>
                <div class="flex items-center p-2 rounded-sm hover:bg-gray-100 dark:hover:bg-gray-600">
                  <input id="checkbox-recamara4" type="checkbox" value="4_recámaras" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded-sm focus:ring-blue-500 dark:focus:ring-blue-600 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                  <label for="checkbox-recamara4" class="w-full ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">4 Recámaras</label>
                </div>
              </li>
            Precios
            <li>
                <div class="flex items-center p-2 rounded-sm hover:bg-gray-100 dark:hover:bg-gray-600">
                  <input id="checkbox-precio-15000" type="checkbox" value="15000" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded-sm focus:ring-blue-500 dark:focus:ring-blue-600 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                  <label for="checkbox-precio-15000" class="w-full ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">15,000</label>
                </div>
              </li>
              
              <li>
                <div class="flex items-center p-2 rounded-sm hover:bg-gray-100 dark:hover:bg-gray-600">
                  <input id="checkbox-precio-1500000" type="checkbox" value="1500000" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded-sm focus:ring-blue-500 dark:focus:ring-blue-600 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                  <label for="checkbox-precio-1500000" class="w-full ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">1,500,000</label>
                </div>
              </li>
              
              <li>
                <div class="flex items-center p-2 rounded-sm hover:bg-gray-100 dark:hover:bg-gray-600">
                  <input id="checkbox-precio-25000" type="checkbox" value="25000" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded-sm focus:ring-blue-500 dark:focus:ring-blue-600 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                  <label for="checkbox-precio-25000" class="w-full ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">25,000</label>
                </div>
              </li>
              Metros²
              <div class="flex items-center p-2 rounded-sm hover:bg-gray-100 dark:hover:bg-gray-600">
                <input id="checkbox-m90" type="checkbox" value="90m" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded-sm focus:ring-blue-500 dark:focus:ring-blue-600 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                <label for="checkbox-m90" class="w-full ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">90 m²</label>
              </div>
            </li>
            <li>
              <div class="flex items-center p-2 rounded-sm hover:bg-gray-100 dark:hover:bg-gray-600">
                <input id="checkbox-m120" type="checkbox" value="120m" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded-sm focus:ring-blue-500 dark:focus:ring-blue-600 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                <label for="checkbox-m120" class="w-full ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">120 m²</label>
              </div>
            </li>
            <li>
              <div class="flex items-center p-2 rounded-sm hover:bg-gray-100 dark:hover:bg-gray-600">
                <input id="checkbox-m250" type="checkbox" value="250m" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded-sm focus:ring-blue-500 dark:focus:ring-blue-600 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                <label for="checkbox-m250" class="w-full ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">250 m²</label>
              </div>
            </li>
          </ul>
    </div>
        
</div>

<div class="container mx-auto px-4 py-8" >
    <h1 id="titulo" class="text-3xl font-bold text-center mb-6">En Venta</h1>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        
        <!-- Casa 1 -->
        <div class="producto border-2 property-item casas rounded-lg shadow-md overflow-hidden">
            <img class="w-full h-56 object-cover" src="{{ asset('images/venta1.jpg') }}" alt="Casa 1">
            <div class="p-4">
                <h2 class="text-xl font-semibold text-gray-800">Casa en el Centro</h2>
                <p class="text-xl text-gray-600">3 recámaras, 2 baños, 120 m²</p>
                <p class="text-xl text-gray-900 font-bold">$1,500,000 MXN</p>
                <a href="{{ url('Casa_Centro') }}" class="block mt-4 text-blue-500 hover:underline">Ver detalles</a>
            </div>
        </div>

        <!-- Casa 2 -->
        <div class="producto border-2 property-item casas rounded-lg shadow-md overflow-hidden">
            <img class="w-full h-56 object-cover" src="{{ asset('images/venta2.jpg') }}" alt="Casa 2">
            <div class="p-4">
                <h2 class="text-xl font-semibold text-gray-800">Residencia Moderna</h2>
                <p class="text-xl text-gray-600">4 recámaras, 3 baños, 250 m²</p>
                <p class="text-xl text-gray-900 font-bold">$3,200,000 MXN</p>
                <a href="{{ url('Casa_Moderna') }}" class="block mt-4 text-blue-500 hover:underline">Ver detalles</a>
            </div>
        </div>
        <!-- Departamento 3 -->
        <div class="producto border-2 transform property-item departamentos rounded-lg shadow-md overflow-hidden">
            <img class="w-full h-56 object-cover" src="{{ asset('images/venta3.jpg') }}" alt="Casa 3">
            <div class="p-4">
                <h2 class="text-xl font-semibold text-gray-800">Departamento en Venta</h2>
                <p class="text-xl text-gray-600">2 recámaras, 2 baños, 90 m²</p>
                <p class="text-xl text-gray-900 font-bold">$1,500,000 MXN</p>
                <a href="{{ url('Departamento') }}" class="block mt-4 text-blue-500 hover:underline">Ver detalles</a>
            </div>
        </div>
        <!-- Terreno -->
        <div class="producto border-2 transform property-item terrenos rounded-lg shadow-md overflow-hidden">
            <img class="w-full h-56 object-cover" src="{{ asset('images/terreno1.jpg') }}" alt="Terreno 1">
            <div class="p-4">
                <h2 class="text-xl font-semibold text-gray-800">Terreno en Venta</h2>
                <p class="text-xl text-gray-600">Alumbrado, 1000 m²</p>
                <p class="text-xl text-gray-900 font-bold">$1,500,000 MXN</p>
                <a href="{{ url('Terreno_Venta') }}" class="block mt-4 text-blue-500 hover:underline">Ver detalles</a>
            </div>
        </div>
        
        <!-- Local -->
        <div class="producto border-2 transform property-item locales rounded-lg shadow-md overflow-hidden">
            <img class="w-full h-56 object-cover" src="{{ asset('images/local1.jpg') }}" alt="Local1">
            <div class="p-4">
                <h2 class="text-xl font-semibold text-gray-800">Local en Venta</h2>
                <p class="text-xl text-gray-600">1 baño, 10 m²</p>
                <p class="text-xl text-gray-900 font-bold">$700,000 MXN</p>
                <a href="{{ url('Local_Venta') }}" class="block mt-4 text-blue-500 hover:underline">Ver detalles</a>
            </div>
        </div>
        <!-- Bodega  -->
        <div class="producto border-2 transform property-item bodegas rounded-lg shadow-md overflow-hidden" class="fsfdsfds" >
            <img class="w-full h-56 object-cover" src="{{ asset('images/bodega.jpg') }}" alt="Bodega 1">
            <div class="p-4">
                <h2 class="text-xl font-semibold text-gray-800">Bodega en Venta</h2>
                <p class="text-xl text-gray-600">1 baño, 120 m²</p>
                <p class="text-xl text-gray-900 font-bold">$800,000 MXN</p>
                <a href="{{ url('Bodega_Venta') }}" class="block mt-4 text-blue-500 hover:underline">Ver detalles</a>
            </div>
        </div>
        </div>
    </div>
</div>


@endsection