@extends('layouts.app')
@section('title', 'Registrar alumno')
@section('content')
<link rel="stylesheet" href="{{ asset('css/createAlumno.css') }}">

    @if($errors->any())
    @foreach($errors->all() as $error)
        <div class="alert alert-danger" role="alert">
            {{ $error }}
        </div>
    @endforeach
    @endif

    <div class="form">
      <div class="tab-content">
        <div id="signup">
          <h1 class="formh1">Registrar alumno</h1>
          <form action="{{ route('alumnos.store') }}" method="POST">
            @csrf
              <div class="field-wrap">
                  <input type="text" name="matricula" id="matricula" placeholder="Ingresa la matricula" required value="{{ old('matricula') }}">
              </div>
              <div class="field-wrap">
                  <input type="text" name="nombre" id="nombre" placeholder="Ingresa el nombre" required value="{{ old('nombre') }}">
              </div>
              <div class="field-wrap">
                  <input type="text" name="direccion" id="direccion" placeholder="Ingresa la dirección" required value="{{ old('direccion') }}">
              </div>
              <div class="top-row">
                  <div class="field-wrap">
                      <input type="tel" name="telefono1" id="telefono1" placeholder="Ingresa el teléfono principal" required value="{{ old('telefono1') }}">
                  </div>
                  <div class="field-wrap">
                      <input type="tel" name="telefono2" id="telefono2" placeholder="Ingresa el teléfono secundario" value="{{ old('telefono2') }}">
                  </div>
              </div>
              <div class="field-wrap">
                  <input type="email" name="correo" id="correo" placeholder="Ingresa el correo electrónico" value="{{ old('correo') }}">
              </div>
              <div class="field-wrap">
                  <input type="date" name="fNacimiento" id="fNacimiento" placeholder="Ingresa la fecha de nacimiento" required value="{{ old('fNacimiento') }}">
              </div>
              <div class="top-row">
                  <div class="field-wrap">
                      <input type="text" name="carrera" id="carrera" placeholder="Ingresa la carrera" required value="{{ old('carrera') }}">
                  </div>
                  <div class="field-wrap">
                      <input type="number" name="semestre" id="semestre" placeholder="Ingresa el semestre" required value="{{ old('semestre') }}">
                  </div>
              </div>
              <h2 class="formh2">Datos médicos</h2>
              <div class="top-row">
                  <div class="field-wrap">
                      <input type="text" name="enfermedades" id="enfermedades" placeholder="Ingresa las enfermedades" value="{{ old('enfermedades') }}">
                  </div>
                  <div class="field-wrap">
                      <input type="text" name="medicamentos" id="medicamentos" placeholder="Ingresa los medicamentos" value="{{ old('medicamentos') }}">
                  </div>
              </div>
              <div class="field-wrap">
                  <input type="text" name="alergias" id="alergias" placeholder="Ingresa las alergias" value="{{ old('alergias') }}">
              </div>
              <div class="field-wrap">
                  <input type="text" name="tipoSangre" id="tipoSangre" placeholder="Ingresa el tipo de sangre" required value="{{ old('tipoSangre') }}">
              </div>
              <div class="field-wrap">
                  <input type="text" name="restricMed" id="restricMed" placeholder="Ingresa las restricciones médicas" value="{{ old('restricMed') }}">
              </div>
              <div class="field-wrap">
                  <input type="text" name="contactoMed" id="contactoMed" placeholder="Ingresa el contacto de emergencia" required value="{{ old('contactoMed') }}">
              </div>
              <input class="button button-block" type="submit" value="Registrar">
          </form>
        </div>
        <div id="login">
        </div>
      </div>
    </div> 
@endsection


