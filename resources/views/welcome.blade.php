@extends('/layout/base')
@section('contenido')
    <h1 href= "app">Bienvenido a Nuestra Pagina</h1>
    <section>
        <p>Nos alegra que estés aquí. Sabemos que buscar una propiedad puede ser un proceso largo y complicado, pero estamos
            aquí para hacerlo más fácil. Ya sea que quieras comprar, vender o rentar, tenemos muchas opciones para que
            encuentres lo que mejor se adapte a tus necesidades.</p>
        <h1>¿Por qué elegirnos?</h1>
        <p>Asesoría Personalizada: Te ayudamos en cada paso, asegurándonos de que tomes la mejor decisión.</p>
        <p>Variedad de Propiedades: Tenemos diferentes opciones de propiedades para que puedas elegir la que más te guste.
        </p>
        <p>Compromiso y Confianza: Trabajamos para ofrecerte solo lo mejor y asegurarnos de que el proceso sea claro y
            transparente.</p>
        <p>Tecnología al Servicio: Usamos herramientas modernas para que tu experiencia sea rápida y sencilla.</p>
        <h3>¿Estás listo para encontrar tu nuevo hogar o espacio?</h3>
        <p>Explora las opciones que tenemos disponibles y si tienes alguna duda, no dudes en contactarnos. ¡Estamos aquí
            para ayudarte!</p>
    </section>
    <button><a href="{{ route('contacto') }}" class="btn btn-primary">Contáctanos</a></button>
@endsection