@extends('layouts.app')

@section('title', 'Buscar alumno')

@section('content')
    {{-- Enlace al archivo CSS --}}
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('css/modal.css') }}"> {{-- Agrega los estilos del modal --}}
    
    <hr class="separator">

    <h2>Buscar alumnos</h2>
    <p>Escanea el código QR</p>
    
    <video id="qr-video" autoplay></video>
    <p id="mensaje">Escaneando...</p>

    <script src="https://cdn.jsdelivr.net/npm/jsqr@latest/dist/jsQR.js"></script>
    <script>
        const redirectUrl = "{{ route('alumnos.show', 'PLACEHOLDER') }}";
    </script>

    <p>Ingresando la matrícula</p>
    <button id="abrir-modal" >Ingresar matrícula</button> 

    {{-- Modal para ingresar matrícula --}}
    <div id="modal" class="modal">
        <div class="modal-contenido">
            <span class="cerrar" id="cerrar-modal">&times;</span>
            <h3>Ingrese la matrícula</h3>
            <form action="{{ route('alumnos.buscar.submit') }}" method="POST">
                @csrf
                <input type="text" name="matricula" id="matricula" placeholder="Ingresa la matrícula del alumno" required>
                <input type="submit" value="Buscar">
            </form>
        </div>
    </div>

    <script src="{{ asset('js/qr-scanner.js') }}"></script> 
    <script src="{{ asset('js/modal.js') }}"></script> 
@endsection
