@extends('/layout/base')
@section('contenido')
    <div class="max-w-4xl mx-auto p-6">
        <h1 class="text-3xl font-bold text-center text-blue-600 mb-6">Preguntas Frecuentes</h1>
        <div id="accordion-collapse" data-accordion="collapse">
            
            <h2 id="faq-heading-1">
                <button type="button" class="flex items-center justify-between w-full p-5 font-medium text-gray-500 border border-b-0 border-gray-200 rounded-t-xl focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3" data-accordion-target="#faq-body-1" aria-expanded="false" aria-controls="faq-body-1">
                    <span>¿Cómo puedo agendar una visita a una propiedad?</span>
                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                    </svg>
                </button>
            </h2>
            <div id="faq-body-1" class="hidden" aria-labelledby="faq-heading-1">
                <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700">
                    <p class="text-gray-500 dark:text-gray-400">Puedes agendar una visita contactándonos por teléfono, WhatsApp o a través de nuestro formulario en la página web. Nuestro equipo te asistirá para encontrar un horario conveniente.</p>
                </div>
            </div>

            <h2 id="faq-heading-2">
                <button type="button" class="flex items-center justify-between w-full p-5 font-medium text-gray-500 border border-b-0 border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3" data-accordion-target="#faq-body-2" aria-expanded="false" aria-controls="faq-body-2">
                    <span>¿Cuáles son los requisitos para rentar una casa?</span>
                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                    </svg>
                </button>
            </h2>
            <div id="faq-body-2" class="hidden" aria-labelledby="faq-heading-2">
                <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700">
                    <p class="text-gray-500 dark:text-gray-400">Los requisitos varían, pero generalmente se solicita identificación oficial, comprobante de ingresos, depósito de garantía y, en algunos casos, un aval con propiedad.</p>
                </div>
            </div>

            <h2 id="faq-heading-3">
                <button type="button" class="flex items-center justify-between w-full p-5 font-medium text-gray-500 border border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3" data-accordion-target="#faq-body-3" aria-expanded="false" aria-controls="faq-body-3">
                    <span>¿Qué documentos necesito para comprar una propiedad?</span>
                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                    </svg>
                </button>
            </h2>
            <div id="faq-body-3" class="hidden" aria-labelledby="faq-heading-3">
                <div class="p-5 border border-t-0 border-gray-200 dark:border-gray-700">
                    <p class="text-gray-500 dark:text-gray-400">Generalmente se requiere identificación oficial, comprobante de ingresos, CURP, RFC y en algunos casos una carta de preaprobación de crédito hipotecario.</p>
                </div>
            </div>
        </div>

        <div class="mt-8 text-center">
            <p class="text-lg text-gray-600 dark:text-gray-300">¿Tienes más dudas o preguntas? Contáctanos y con gusto te ayudaremos.</p>
            <a href="/contacto" class="mt-4 inline-block px-6 py-3 text-white bg-blue-600 rounded-lg shadow hover:bg-blue-700 focus:ring-4 focus:ring-blue-300">Contáctanos</a>
        </div>
    </div>
@endsection
