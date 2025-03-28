@extends('layouts.app')
@section('title', 'Registrar alumno')
@section('content')
<link rel="stylesheet" href="{{ asset('css/createAlumno.css') }}">

    <div class="form">
      <div class="tab-content">
        <div id="signup">
          <h1 class="formh1">Registrar alumno</h1>
          <form action="{{ route('alumnos.store') }}" method="POST">
            @csrf
              {{-- Estado. Ej. 1 (Activo) --}}
              <div class="field-wrap">
                  <label for="estado">Estado:</label>
                  <input type="checkbox" name="estado" id="estado" checked value="{{ old('estado') }}">
                    {{-- @error("estado")
                        <span class="error-message">{{$message}}</span>
                    @enderror --}}
              </div>

              {{-- Matricula --}}
              <div class="field-wrap">
                  <input type="text" name="matricula" id="matricula" placeholder="Ingresa la matricula" required value="{{ old('matricula') }}">
                    @error("matricula")
                        <span class="error-message">{{$message}}</span>
                    @enderror
              </div>

              {{-- Nombre completo --}}
              <div class="field-wrap">
                  <input type="text" name="nombre" id="nombre" placeholder="Ingresa el nombre completo" required value="{{ old('nombre') }}">
                  @error("nombre")
                        <span class="error-message">{{$message}}</span>
                    @enderror
              </div>
              
              {{-- Dirección --}}
              <div class="field-wrap">
                  <input type="text" name="direccion" id="direccion" placeholder="Ingresa la dirección" required value="{{ old('direccion') }}">
                  @error("direccion")
                        <span class="error-message">{{$message}}</span>
                    @enderror
              </div>

              {{-- Teléfonos --}}
              <div class="top-row">
                  {{-- Teléfono 1 --}}
                  <div class="field-wrap">
                      <input type="tel" name="telefono1" id="telefono1" placeholder="Ingresa el teléfono principal" required value="{{ old('telefono1') }}">
                      @error("telefono1")
                        <span class="error-message">{{$message}}</span>
                    @enderror
                  </div>
                  {{-- Teléfono 2 (Opcional) --}}
                  <div class="field-wrap">
                      <input type="tel" name="telefono2" id="telefono2" placeholder="Ingresa teléfono secundario (opcional)" value="{{ old('telefono2') }}">
                      @error("telefono2")
                        <span class="error-message">{{$message}}</span>
                    @enderror
                  </div>
              </div>

              {{-- Correo electrónico --}}
              <div class="field-wrap">
                  <input type="email" name="correo" id="correo" placeholder="Ingresa el correo electrónico" required value="{{ old('correo') }}">
                  @error("correo")
                        <span class="error-message">{{$message}}</span>
                    @enderror
              </div>

              {{-- Fecha de nacimiento --}}
              <div class="field-wrap">
                <label for="ultRevision">Fecha de nacimiento:</label>
                <br>
                <br>
                  <input type="date" name="fNacimiento" id="fNacimiento" placeholder="Ingresa la fecha de nacimiento" required value="{{ old('fNacimiento') }}">
                  @error("fNacimiento")
                        <span class="error-message">{{$message}}</span>
                    @enderror
              </div>

              {{-- Carrera (completa) --}}
              <div class="field-wrap">
                  <input type="text" name="carrera" id="carrera" placeholder="Ingresa la carrera" required value="{{ old('carrera') }}">
                  @error("carrera")
                    <span class="error-message">{{$message}}</span>
                @enderror
              </div>

              {{-- Periodo en el que cursa (Ej. 5 Cuatrimestre) --}}
              <div class="field-wrap">
                  <input type="text" name="periodo" id="periodo" placeholder="Periodo en que estudia" required value="{{ old('periodo') }}">
                  @error("periodo")
                    <span class="error-message">{{$message}}</span>
                @enderror
              </div>

              {{-- Edificio y grupo --}}
              <div class="top-row">
                  {{-- Edificio --}}
                  <div class="field-wrap">
                      <input type="text" name="edificio" id="edificio" placeholder="Ingresa el edificio" required value="{{ old('edificio') }}">
                      @error("edificio")
                        <span class="error-message">{{$message}}</span>
                    @enderror
                  </div>
                  {{-- Grupo --}}
                  <div class="field-wrap">
                      <input type="text" name="grupo" id="grupo" placeholder="Ingresa el grupo" required value="{{ old('grupo') }}">
                      @error("grupo")
                        <span class="error-message">{{$message}}</span>
                    @enderror
                  </div>
              </div>

              {{-- Tipo de sangre --}}
              <div class="field-wrap">
                <input type="text" name="tipoSangre" id="tipoSangre" placeholder="Ingresa el tipo de sangre" required value="{{ old('tipoSangre') }}">
                @error("tipoSangre")
                      <span class="error-message">{{$message}}</span>
                  @enderror
              </div>

              {{-- Datos médicos --}}
              <h2 class="formh2">Datos médicos</h2>

              {{-- Fecha de la última revisión médica --}}
              <div class="field-wrap">
                <label for="ultRevision">Fecha de la última revisión médica:</label>
                <br>
                <br>
                <input type="date" name="ultRevision" id="ultRevision" required value="{{ old('ultRevision') }}">
                @error("ultRevision")
                      <span class="error-message">{{$message}}</span>
                  @enderror
              </div>

              {{-- Antecedentes relevantes --}}
              <div class="field-wrap">
                <input type="text" name="antecedentes" id="antecedentes" placeholder="Ingresa las alergias" value="{{ old('antecedentes') }}">
                @error("antecedentes")
                      <span class="error-message">{{$message}}</span>
                  @enderror
              </div>

              {{-- Intervenciones quirúrgicas --}}
              <div class="field-wrap">
                <input type="text" name="intervencionesQ" id="intervencionesQ" placeholder="Intervenciones quirúrgicas" value="{{ old('intervencionesQ') }}">
                @error("intervencionesQ")
                      <span class="error-message">{{$message}}</span>
                  @enderror
              </div>
              
              {{-- Emfermedades y tratamientos --}}
              <div class="top-row">
                  {{-- Enfermedades crónicas --}}
                  <div class="field-wrap">
                      <input type="text" name="enfermedades" id="enfermedades" placeholder="Ingresa las enfermedades" value="{{ old('enfermedades') }}">
                      @error("enfermedades")
                        <span class="error-message">{{$message}}</span>
                    @enderror
                  </div>
                  {{-- Tratamientos y medicamentos --}}
                  <div class="field-wrap">
                      <input type="text" name="medicamentos" id="medicamentos" placeholder="Ingresa los medicamentos" value="{{ old('medicamentos') }}">
                      @error("medicamentos")
                        <span class="error-message">{{$message}}</span>
                    @enderror
                  </div>
              </div>

              {{-- Alergias --}}
              <div class="field-wrap">
                  <input type="text" name="alergias" id="alergias" placeholder="Ingresa las alergias" value="{{ old('alergias') }}">
                  @error("alergias")
                        <span class="error-message">{{$message}}</span>
                    @enderror
              </div>

              {{-- Antecedentes familiares --}}
              <div class="field-wrap">
                <input type="text" name="antecedentesF" id="antecedentesF" placeholder="Antecedentes familiares" value="{{ old('antecedentesF') }}">
                  @error("antecedentesF")
                      <span class="error-message">{{$message}}</span>
                  @enderror
              </div>

              {{-- Restricciones médicas --}}
              <div class="field-wrap">
                  <input type="text" name="restricMed" id="restricMed" placeholder="Restricciones y recomendaciones médicas" value="{{ old('restricMed') }}">
                  @error("restricMed")
                        <span class="error-message">{{$message}}</span>
                    @enderror
              </div>

              {{-- Contacto médico de emergencia --}}
              <div class="field-wrap">
                  <input type="tel" name="contactoMed" id="contactoMed" placeholder="Ingresa el contacto de emergencia" required value="{{ old('contactoMed') }}">
                  @error("contactoMed")
                        <span class="error-message">{{$message}}</span>
                    @enderror
              </div>

              {{-- Observaciones --}}
              <div class="field-wrap">
                  <textarea name="observaciones" id="observaciones" placeholder="Observaciones generales y/o médicas" rows="4"></textarea>
                  @error("observaciones")
                        <span class="error-message">{{$message}}</span>
                    @enderror
              </div>

              {{-- Enviar registro --}}
              <input class="button button-block" type="submit" value="Registrar">
          </form>
        </div>
        <div id="login">
        </div>
    </div>
    </div> 
@endsection


