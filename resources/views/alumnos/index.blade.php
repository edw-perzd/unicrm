@extends('layouts.app') 
@section('title', 'Listado de alumnos')
@section('content')
    <h2>Listado general de alumnos:</h2>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Matricula</th>
            <th scope="col">Nombre completo</th>
            <th scope="col">Telefono principal</th>
            <th scope="col">Semestre</th>
            <th scope="col">Carrera</th>
            <th scope="col">Acción</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($alumnos as $alumno)
            <a href="{{ route('alumnos.show', $alumno->matricula_alumno) }}">
                <tr>
                <th scope="row">{{$alumno->id}}</th>
                <td>{{$alumno->matricula_alumno}}</td>
                    <td>{{$alumno->nombre_alumno}}</td>
                    <td>{{$alumno->telefono1_alumno}}</td>
                    <td>{{$alumno->semestre_alumno}}</td>
                    <td>{{$alumno->carrera_alumno}}</td>
                    <td><a href="{{ route('alumnos.edit', $alumno->matricula_alumno) }}">Editar</a> | 
                        <form action="{{ route('alumnos.destroy', $alumno->matricula_alumno) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Eliminar</button>
                        </form></td>
                </tr>
            </a>
            @endforeach
        </tbody>
      </table>
@endsection