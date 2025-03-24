@extends('layouts.app')
@section('title', 'Registrar alumno')
@section('content')
<link rel="stylesheet" href="{{ asset('css/createAlumno.css') }}">
    <div class="form">
        <div class="tab-content">
          <div id="signup">
            <h1 class="formh1">Actualizar alumno</h1>
            <form action="{{ route('alumnos.update', $alumno->matricula_alumno) }}" method="POST">
                @method('PUT')
                @csrf
                <div class="field-wrap">
                    <input type="text" name="matricula" id="matricula" placeholder="Ingresa la matricula" required value="{{ old('matricula', $alumno->matricula_alumno) }}">
                      @error("matricula")
                          <span class="error-message">{{$message}}</span>
                      @enderror
                </div>
                <div class="field-wrap">
                    <input type="text" name="nombre" id="nombre" placeholder="Ingresa el nombre" required value="{{ old('nombre', $alumno->nombre_alumno) }}">
                    @error("nombre")
                          <span class="error-message">{{$message}}</span>
                      @enderror
                </div>
                <div class="field-wrap">
                    <input type="text" name="direccion" id="direccion" placeholder="Ingresa la dirección" required value="{{ old('direccion', $alumno->direccion_alumno) }}">
                    @error("direccion")
                          <span class="error-message">{{$message}}</span>
                      @enderror
                </div>
                <div class="top-row">
                    <div class="field-wrap">
                        <input type="tel" name="telefono1" id="telefono1" placeholder="Ingresa el teléfono principal" required value="{{ old('telefono1', $alumno->telefono1_alumno) }}">
                        @error("telefono1")
                          <span class="error-message">{{$message}}</span>
                      @enderror
                    </div>
                    <div class="field-wrap">
                        <input type="tel" name="telefono2" id="telefono2" placeholder="Ingresa el teléfono secundario" value="{{ old('telefono2',$alumno->telefono2_alumno) }}">
                        @error("telefono2")
                          <span class="error-message">{{$message}}</span>
                      @enderror
                    </div>
                </div>
                <div class="field-wrap">
                    <input type="email" name="correo" id="correo" placeholder="Ingresa el correo electrónico" value="{{ old('correo', $alumno->correoE_alumno) }}">
                    @error("correo")
                          <span class="error-message">{{$message}}</span>
                      @enderror
                </div>
                <div class="field-wrap">
                    <input type="date" name="fNacimiento" id="fNacimiento" placeholder="Ingresa la fecha de nacimiento" required value="{{ old('fNacimiento', $alumno->fNacimiento_alumno) }}">
                    @error("fNacimiento")
                          <span class="error-message">{{$message}}</span>
                      @enderror
                </div>
                <div class="top-row">
                    <div class="field-wrap">
                        <input type="text" name="carrera" id="carrera" placeholder="Ingresa la carrera" required value="{{ old('carrera',$alumno->carrera_alumno) }}">
                        @error("carrera")
                          <span class="error-message">{{$message}}</span>
                      @enderror
                    </div>
                    <div class="field-wrap">
                        <input type="number" name="semestre" id="semestre" placeholder="Ingresa el semestre" required value="{{ old('semestre', $alumno->semestre_alumno) }}">
                        @error("semestre")
                          <span class="error-message">{{$message}}</span>
                      @enderror
                    </div>
                </div>
                <h2 class="formh2">Datos médicos</h2>
                <div class="top-row">
                    <div class="field-wrap">
                        <input type="text" name="enfermedades" id="enfermedades" placeholder="Ingresa las enfermedades" value="{{ old('enfermedades', $alumno->enfermedades_alumno) }}">
                        @error("enfermedades")
                          <span class="error-message">{{$message}}</span>
                      @enderror
                    </div>
                    <div class="field-wrap">
                        <input type="text" name="medicamentos" id="medicamentos" placeholder="Ingresa los medicamentos" value="{{ old('medicamentos', $alumno->medicamentos_alumno) }}">
                        @error("medicamentos")
                          <span class="error-message">{{$message}}</span>
                      @enderror
                    </div>
                </div>
                <div class="field-wrap">
                    <input type="text" name="alergias" id="alergias" placeholder="Ingresa las alergias" value="{{ old('alergias', $alumno->alergias_alumno) }}">
                    @error("alergias")
                          <span class="error-message">{{$message}}</span>
                      @enderror
                </div>
                <div class="field-wrap">
                    <input type="text" name="tipoSangre" id="tipoSangre" placeholder="Ingresa el tipo de sangre" required value="{{ old('tipoSangre', $alumno->tipoSangre_alumno) }}">
                    @error("tipoSangre")
                          <span class="error-message">{{$message}}</span>
                      @enderror
                </div>
                <div class="field-wrap">
                    <input type="text" name="restricMed" id="restricMed" placeholder="Ingresa las restricciones médicas" value="{{ old('restricMed', $alumno->restricMed_alumno) }}">
                    @error("restricMed")
                          <span class="error-message">{{$message}}</span>
                      @enderror
                </div>
                <div class="field-wrap">
                    <input type="text" name="contactoMed" id="contactoMed" placeholder="Ingresa el contacto de emergencia" required value="{{ old('contactoMed', $alumno->contactoMed_alumno) }}">
                    @error("contactoMed")
                          <span class="error-message">{{$message}}</span>
                      @enderror
                </div>
                  {{-- @if($errors->any())
                  @foreach($errors->all() as $error)
                      <div class="alert alert-danger" role="alert">
                          {{ $error }}
                      </div>
                  @endforeach
              @endif --}}
                <input class="button button-block" type="submit" value="Actualizar">
            </form>
          </div>
          <div id="login">
          </div>
      </div>
      </div> 
@endsection