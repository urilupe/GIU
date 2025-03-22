@extends('/layout/base')
@section('contenido')
    <div class="max-w-6xl mx-auto p-6 bg-gray-100 rounded-lg shadow-lg flex flex-col md:flex-row items-center">
        <div class="md:w-1/2">
            <img src="../images/quienes.jpg" alt="Interior de una propiedad" class="w-full rounded-lg shadow-md">
        </div>
        <div class="md:w-1/2 md:pl-6 px-6">
            <h1 class="text-3xl font-bold text-blue-600 mb-4">¡Bienvenido!</h1>
            <p class="text-gray-700 mb-6">
                Nos alegra que estés aquí. Sabemos que buscar una propiedad puede ser un proceso largo y complicado, pero estamos aquí para hacerlo más fácil.
                Ya sea que quieras comprar, vender o rentar, tenemos muchas opciones para que encuentres lo que mejor se adapte a tus necesidades.
            </p>
            
            <h2 class="text-2xl font-bold text-blue-600 mb-4">¿Por qué elegirnos?</h2>
            <p class="text-gray-700 mb-2"><strong>Asesoría Personalizada:</strong> Te ayudamos en cada paso, asegurándonos de que tomes la mejor decisión.</p>
            <p class="text-gray-700 mb-2"><strong>Variedad de Propiedades:</strong> Tenemos diferentes opciones para que elijas la que más te guste.</p>
            <p class="text-gray-700"><strong>Compromiso y Confianza:</strong> Trabajamos para ofrecerte solo lo mejor y asegurarnos de que el proceso sea claro y transparente.</p>
        </div>
    </div>
@endsection
