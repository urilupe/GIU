@extends('/layout/base')
@section('contenido')
    <div class="bg-gray-100 min-h-screen flex justify-center py-12 px-4">
        <div class="max-w-5xl w-full bg-white p-8 rounded-lg shadow-md flex flex-col md:flex-row gap-8">
            <!-- Sección de Información -->
            <div class="md:w-1/2">
                <h1 class="text-3xl font-bold text-gray-900 mb-4 inline-block bg-blue-100 text-blue-700 px-4 py-2 rounded-lg">
                    Contáctanos
                </h1>
                <p class="text-xl text-gray-600 italic">
                    Por favor complete el siguiente formulario para enviarnos un correo electrónico.
                </p>
                <p class="text-xl mt-4 text-gray-700">
                    En Vívika, estamos aquí para ayudarte a encontrar el hogar de tus sueños o la mejor inversión inmobiliaria.
                    ¡Contáctanos y hagamos realidad tu proyecto!
                </p>
                <div class="text-xl mt-6 space-y-2">
                    <p><strong>E-mail:</strong> inmobiliaria123@gmail.com</p>
                    <p><strong>Dirección:</strong> asdjgqurgafgkjsdyr #54684</p>
                    <p><strong>Teléfono:</strong> 3323234454</p>
                </div>
            </div>

            <!-- Sección del Formulario -->
            <div class="md:w-3/4 bg-gray-700 p-6 rounded-lg ml-auto -ml-16"> <!-- '-ml-16' mueve el formulario más hacia la izquierda -->
                <form action="#" method="POST" class="space-y-4">
                    <div>
                        <label for="nombre" class="text-xl block text-sm font-medium text-gray-300">NOMBRE</label>
                        <input type="text" id="nombre" name="nombre"
                            class="w-full p-2 mt-1 border border-gray-500 bg-gray-600 text-white rounded-md shadow-sm focus:ring focus:ring-blue-500">
                    </div>
                    <div>
                        <label for="correo" class="text-xl block text-sm font-medium text-gray-300">E-MAIL</label>
                        <input type="email" id="correo" name="correo"
                            class="w-full p-2 mt-1 border border-gray-500 bg-gray-600 text-white rounded-md shadow-sm focus:ring focus:ring-blue-500">
                    </div>
                    <div>
                        <label for="mensaje" class="text-xl block text-sm font-medium text-gray-300">MENSAJE</label>
                        <textarea id="mensaje" name="mensaje" rows="4"
                            class="w-full p-2 mt-1 border border-gray-500 bg-gray-600 text-white rounded-md shadow-sm focus:ring focus:ring-blue-500"></textarea>
                    </div>
                    <button type="submit"
                        class="w-full py-2 bg-blue-900 text-white font-semibold rounded-md shadow-md hover:bg-blue-800 transition duration-300">
                        Enviar
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
