@extends('layouts.app')

@section('title', 'Información del alumno')

@section('content')
<link rel="stylesheet" href="{{ asset('css/detailsAlumno.css') }}">

<hr class="separator">

<div class="container">
    <!-- Información del Alumno -->
    <div class="info-alumno">
        <h2>Información del alumno:</h2>

        <div class="section-container">
            <!-- Sección de Información Personal -->
            <div class="section">
                <h3 class="section-title">Datos Personales</h3>
                <ul>
                    <li><strong>Nombre:</strong> {{$alumno->nombre_alumno}}</li>
                    <li><strong>Matrícula:</strong> {{$alumno->matricula_alumno}}</li>
                    <li><strong>Dirección:</strong> {{$alumno->direccion_alumno}}</li>
                    <li><strong>Teléfono 1:</strong> {{$alumno->telefono1_alumno}}</li>
                    <li><strong>Teléfono 2:</strong> {{$alumno->telefono2_alumno}}</li>
                    <li><strong>Correo electrónico:</strong> {{$alumno->correoE_alumno}}</li>
                    <li><strong>Fecha de nacimiento:</strong> {{$alumno->fNacimiento_alumno}}</li>
                    <li><strong>Carrera:</strong> {{$alumno->carrera_alumno}}</li>
                    <li><strong>Semestre:</strong> {{$alumno->semestre_alumno}}</li>
                </ul>
            </div>

            <!-- Sección de Información Médica -->
            <div class="section">
                <h3 class="section-title">Datos Médicos</h3>
                <ul>
                    <li><strong>Enfermedades:</strong> {{$alumno->enfermedades_alumno}}</li>
                    <li><strong>Medicamentos:</strong> {{$alumno->medicamentos_alumno}}</li>
                    <li><strong>Alergias:</strong> {{$alumno->alergias_alumno}}</li>
                    <li><strong>Tipo de sangre:</strong> {{$alumno->tipoSangre_alumno}}</li>
                    <li><strong>Restricciones médicas:</strong> {{$alumno->restricMed_alumno}}</li>
                    <li><strong>Contacto de emergencia:</strong> {{$alumno->contactoMed_alumno}}</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Código QR -->
    <div class="qr-container">
        <h3>Generar Código QR:</h3>
        
        @php
            $qr_url = "https://api.qrserver.com/v1/create-qr-code/?data=" . urlencode($alumno->matricula_alumno) . "&size=200x200";
        @endphp

        <img src="{{ $qr_url }}" alt="QR Code">

        <!-- Botón de descarga del QR -->
        <a href="{{ $qr_url }}" download="QR_Alumno_{{$alumno->matricula_alumno}}.png" class="qr-download-btn">
            Descargar QR
        </a>
    </div>
</div>
@endsection
