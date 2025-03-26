@extends('layouts.app')

@section('title', 'Información del alumno')

@section('content')
<link rel="stylesheet" href="{{ asset('css/detailsAlumno.css') }}">

<hr class="separator">

<div class="container">
    <!-- Información del Alumno -->
    <div class="info-alumno">
        <h2>Información del alumno:</h2>
        <br>
        <div class="section-container">
            <!-- Sección de Información Personal -->
            <div class="section">
                <h3 class="section-title">Datos Personales</h3>
                <ul>
                    <li><strong>Matrícula:</strong> {{$alumno->matricula_alumno}}</li>
                    <li><strong>Nombre:</strong> {{$alumno->nombre_alumno}}</li>
                    <li><strong>Dirección:</strong> {{$alumno->direccion_alumno}}</li>
                    <li><strong>Teléfono 1:</strong> {{$alumno->telefono1_alumno}}</li>
                    <li><strong>Teléfono 2:</strong> <span style="{{ $alumno->telefono2_alumno? '' : 'color: gray; font-style: italic'}}">{{$alumno->telefono2_alumno? $alumno->telefono2_alumno: 'Sin registro'}}</span></li>
                    <li><strong>Correo electrónico:</strong> <span style="{{ $alumno->correoE_alumno? '' : 'color: gray; font-style: italic'}}">{{$alumno->correoE_alumno? $alumno->correoE_alumno: 'Sin registro'}}</span></li>
                    <li><strong>Fecha de nacimiento:</strong> {{$alumno->fNacimiento_alumno}}</li>
                    <li><strong>Carrera:</strong> {{$alumno->carrera_alumno}}</li>
                    <li><strong>Semestre:</strong> {{$alumno->semestre_alumno}}</li>
                </ul>
            </div>

            <!-- Sección de Información Médica -->
            <div class="section">
                <h3 class="section-title">Datos Médicos</h3>
                <ul>
                    <li><strong>Enfermedades:</strong> <span style="{{ $alumno->enfermedades_alumno? '' : 'color: gray; font-style: italic'}}">{{$alumno->enfermedades_alumno? $alumno->enfermedades_alumno : 'Ninguna'}}</span></li>
                    <li><strong>Medicamentos:</strong> <span style="{{ $alumno->medicamentos_alumno? '' : 'color: gray; font-style: italic'}}">{{$alumno->medicamentos_alumno? $alumno->medicamentos_alumno : 'Ninguno'}}</span></li>
                    <li><strong>Alergias:</strong> <span style="{{ $alumno->alergias_alumno? '' : 'color: gray; font-style: italic' }}">{{$alumno->alergias_alumno? $alumno->alergias_alumno: 'Ninguna'}}</span></li>
                    <li><strong>Tipo de sangre:</strong> {{$alumno->tipoSangre_alumno}}</li>
                    <li><strong>Restricciones médicas:</strong> <span style="{{ $alumno->restricMed_alumno? '' : 'color: gray; font-style: italic'}}">{{$alumno->restricMed_alumno? $alumno->restricMed_alumno: 'Ninguna'}}</span></li>
                    <li><strong>Contacto de emergencia:</strong> {{$alumno->contactoMed_alumno}}</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Código QR -->
    <div class="qr-container">
        <h3>Código QR generado:</h3>
        
        @php
            // Generar el QR para la matrícula
            // $qr_url_matricula = "https://api.qrserver.com/v1/create-qr-code/?data=" . urlencode($alumno->matricula_alumno) . "&size=200x200";
            
            // Generar la URL completa para el alumno (incluyendo la matrícula)
            $full_url = url('alumnos/buscar/' . $alumno->matricula_alumno);
            
            // Generar el QR para la matrícula
            $qr_url_dominio = "https://api.qrserver.com/v1/create-qr-code/?data=" . urlencode($full_url) . "&size=200x200";
        @endphp

        <!-- Mostrar el QR para la matrícula -->
        {{-- <img src="{{ $qr_url_matricula }}" alt="QR Code Matrícula para el sitio">
        <p>QR de Matrícula</p> --}}

        <!-- Botón de descarga del QR para matrícula -->
        {{-- <a href="{{ $qr_url_matricula }}" download="QR_Alumno_{{$alumno->matricula_alumno}}.png" class="qr-download-btn">
            Descargar QR de Matrícula
        </a> --}}

        <!-- Mostrar el QR para el dominio con la ruta completa -->
        <img src="{{ $qr_url_dominio }}" alt="QR Code Web externo">

        <!-- Botón de descarga del QR para el dominio con la ruta -->
        <a href="{{ $qr_url_dominio }}" download="QR_Dominio_{{ $alumno->matricula_alumno }}.png" class="qr-download-btn">
            Descargar código QR
        </a>
    </div>
</div>
@endsection
