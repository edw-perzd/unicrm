@extends('layouts.app')

@section('title', 'Buscar alumno')

@section('content')

<link rel="stylesheet" href="{{ asset('css/buscar.css') }}">
    
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
            <form action="{{ route('alumnos.buscar.submit') }}" method="POST" class=".form-search">
                @csrf
                <input class="input-search" type="text" name="matricula" id="matricula" placeholder="Ingresa la matrícula del alumno" autocomplete="false" required>
                <input class="input-search" type="submit" value="Buscar">
            </form>
        </div>
    </div>

    <script src="{{ asset('js/qr-scanner.js') }}"></script> 
    <script src="{{ asset('js/modal.js') }}"></script> 
@endsection
