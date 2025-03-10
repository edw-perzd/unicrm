@extends('layouts.app')
@section('title', 'Registrar alumno')
@section('content')
    @if($errors->any())
    @foreach($errors->all() as $error)
        <div class="alert alert-danger" role="alert">
            {{ $error }}
        </div>
    @endforeach
    @endif

    <form action="{{ route('alumnos.store') }}" method="POST">
        @csrf
        <input type="text" name="matricula" id="matricula" placeholder="Ingresa la matricula" required value="{{ old('matricula') }}">
        <input type="text" name="nombre" id="nombre" placeholder="Ingresa el nombre" required value="{{ old('nombre') }}">
        <input type="text" name="direccion" id="direccion" placeholder="Ingresa la dirección" required value="{{ old('direccion') }}">
        <input type="text" name="telefono1" id="telefono1" placeholder="Ingresa el teléfono principal" required value="{{ old('telefono1') }}">
        <input type="text" name="telefono2" id="telefono2" placeholder="Ingresa el teléfono secundario" value="{{ old('telefono2') }}">
        <input type="email" name="correo" id="correo" placeholder="Ingresa el correo electrónico" value="{{ old('correo') }}">
        <input type="date" name="fNacimiento" id="fNacimiento" placeholder="Ingresa la fecha de nacimiento" required value="{{ old('fNacimiento') }}">
        <input type="text" name="carrera" id="carrera" placeholder="Ingresa la carrera" required value="{{ old('carrera') }}">
        <input type="number" name="semestre" id="semestre" placeholder="Ingresa el semestre" required value="{{ old('semestre') }}">
        <input type="text" name="enfermedades" id="enfermedades" placeholder="Ingresa las enfermedades" value="{{ old('enfermedades') }}">
        <input type="text" name="medicamentos" id="medicamentos" placeholder="Ingresa los medicamentos" value="{{ old('medicamentos') }}">
        <input type="text" name="alergias" id="alergias" placeholder="Ingresa las alergias" value="{{ old('alergias') }}">
        <input type="text" name="tipoSangre" id="tipoSangre" placeholder="Ingresa el tipo de sangre" value="{{ old('tipoSangre') }}">
        <input type="text" name="restricMed" id="restricMed" placeholder="Ingresa las restricciones médicas" value="{{ old('restricMed') }}">
        <input type="text" name="contactoMed" id="contactoMed" placeholder="Ingresa el contacto de emergencia" value="{{ old('contactoMed') }}">
        <input type="submit" value="Registrar">
    </form>
@endsection