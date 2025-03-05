@extends('/layout/base')
@section('contenido')
    <h1>Contactanos</h1>
    <section>
        <h2>Estamos aquí para ayudarte</h2>
        <p>Si tienes alguna pregunta o necesitas más información, no dudes en ponerte en contacto con nosotros. Estamos
            disponibles para asistirte y brindarte la mejor atención.</p>
        <p>Por favor, utiliza el formulario de contacto a continuación o envíanos un correo electrónico a <a
                href="mailto:inmobiliaria123@gmail.com">inmobiliaria123@gmail.com</a>.</p>

        <form>
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" disabled>
            <br>

            <br><label for="correo">Correo Electrónico:</label>
            <input type="email" id="correo" name="correo" disabled>
            <br>

            <br><label for="mensaje">Mensaje:</label>
            <textarea id="mensaje" name="mensaje" rows="4" disabled></textarea>
            <br>

            <br><button type="submit" disabled>Enviar Mensaje</button>
        </form>

    </section>
@endsection
