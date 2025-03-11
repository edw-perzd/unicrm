@extends('layouts.app') 
@section('title', 'Listado de alumnos')

@section('content')
    {{-- Enlace al archivo CSS --}}
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <hr class="separator">

    <!-- Botón para ir a la pantalla de búsqueda -->
    <a href="{{ route('alumnos.buscar.form') }}" class="btn-buscar">Buscar alumno</a>

    <h2>Listado general de alumnos:</h2>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Matricula</th>
            <th scope="col">Nombre completo</th>
            <th scope="col">Teléfono principal</th>
            <th scope="col">Semestre</th>
            <th scope="col">Carrera</th>
            <th scope="col">Acción</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($alumnos as $alumno)
                <tr>
                    <th scope="row">{{$alumno->id}}</th>
                    <td>{{$alumno->matricula_alumno}}</td>
                    <td>{{$alumno->nombre_alumno}}</td>
                    <td>{{$alumno->telefono1_alumno}}</td>
                    <td>{{$alumno->semestre_alumno}}</td>
                    <td>{{$alumno->carrera_alumno}}</td>
                    <td>
                        <a href="{{ route('alumnos.show', $alumno->matricula_alumno) }}" class="btn-ver">Ver</a>
                        <a href="{{ route('alumnos.edit', $alumno->matricula_alumno) }}" class="btn-editar">Editar</a>  
                        <form action="{{ route('alumnos.destroy', $alumno->matricula_alumno) }}" method="POST" class="form-eliminar">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn-eliminar">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
      </table>

      <form class="" method="POST" action="{{ route('logout') }}">
        @csrf
        <button class="dropdown-item" type="submit">Cerrar Sesión</button>
    </form>
@endsection
