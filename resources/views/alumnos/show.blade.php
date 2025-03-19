@extends('layouts.app')

@section('title', 'Información del alumno')

@section('content')
<link rel="stylesheet" href="{{ asset('css/detailsAlumno.css') }}">
    <hr class="separator">

    <div class="container">
        <!-- Información del Alumno -->
        <div class="info-alumno">
            <h2>Información del alumno:</h2>
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
                <li><strong>Enfermedades:</strong> {{$alumno->enfermedades_alumno}}</li>
                <li><strong>Medicamentos:</strong> {{$alumno->medicamentos_alumno}}</li>
                <li><strong>Alergias:</strong> {{$alumno->alergias_alumno}}</li>
                <li><strong>Tipo de sangre:</strong> {{$alumno->tipoSangre_alumno}}</li>
                <li><strong>Restricciones médicas:</strong> {{$alumno->restricMed_alumno}}</li>
                <li><strong>Contacto de emergencia:</strong> {{$alumno->contactoMed_alumno}}</li>
            </ul>

            <a href="{{ route('alumnos.index') }}" class="btn-azul">Ver listado de alumnos</a>
        </div>

        <!-- Código QR -->
        <div class="qr-container">
            <h3>Generar Código QR:</h3>
            <img src="https://api.qrserver.com/v1/create-qr-code/?data={{ urlencode($alumno->matricula_alumno) }}&size=200x200" alt="QR Code">
        </div>
    </div>
@endsection
