@extends('/layout/base')
@section('contenido')
    <!-- Sección del Banner -->
    <section class="relative w-full h-screen bg-cover bg-center" style="background-image: url('{{ asset('images/home.jpg') }}');">
        <!-- Capa oscura para mejorar la legibilidad del texto -->
        <div class="absolute inset-0 bg-black opacity-50"></div>

        <!-- Contenido del banner -->
        <div class="relative z-10 flex flex-col items-center justify-center h-full text-center text-white px-6">
            <h1 class="text-5xl md:text-6xl font-bold">¿Estás listo para encontrar tu nuevo hogar?</h1>
            <p class="mt-4 text-lg md:text-xl max-w-2xl">
                Explora las opciones que tenemos disponibles y si tienes alguna duda, contáctanos.
                ¡Estamos aquí para ayudarte!
            </p>

            <!-- Botón de contacto -->
            <a href="{{ route('contacto') }}"
                class="mt-6 px-6 py-3 bg-white text-gray-900 font-semibold text-lg rounded-lg shadow-md hover:bg-gray-200 transition duration-300">
                Contáctanos
            </a>
        </div>
    </section>
@endsection
