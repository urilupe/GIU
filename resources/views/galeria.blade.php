@extends('/layout/base')
@section('contenido')
    <h1>Esta es la pagina de imagenes</h1>

    <div>
        <img src="{{ asset('/images/img10.jpg') }}" alt="Descripción de la imagen">
        <img src="{{ asset('/images/img1.jpg') }}" alt="Descripción de la imagen">
        <img src="{{ asset('/images/img2.jpg') }}" alt="Descripción de la imagen">
        <img src="{{ asset('/images/img3.webp') }}" alt="Descripción de la imagen">
        <img src="{{ asset('/images/img4.jpg') }}" alt="Descripción de la imagen">
        <img src="{{ asset('/images/img5.jpg') }}" alt="Descripción de la imagen">
        <img src="{{ asset('/images/img6.webp') }}" alt="Descripción de la imagen">
        <img src="{{ asset('/images/img7.jpg') }}" alt="Descripción de la imagen">
        <img src="{{ asset('/images/img8.jpg') }}" alt="Descripción de la imagen">
        <img src="{{ asset('/images/img9.jpg') }}" alt="Descripción de la imagen">
        


    </div>
@endsection