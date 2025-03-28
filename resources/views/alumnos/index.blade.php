@extends('layouts.app') 
@section('title', 'Listado de alumnos')

@section('content')
    <hr class="separator">

    <h2>Listado general de alumnos:</h2>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Matricula</th>
            <th scope="col">Nombre completo</th>
            <th scope="col">Teléfono principal</th>
            <th scope="col">Periodo</th>
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
                    <td>{{$alumno->periodo_alumno}}</td>
                    <td>{{$alumno->carrera_alumno}}</td>
                    <td>
                        <a href="{{ route('alumnos.show', $alumno->matricula_alumno) }}" class="btn-ver">Ver</a>
                        @can('admin.alumnos.edit')
                            <a href="{{ route('alumnos.edit', $alumno->matricula_alumno) }}" class="btn-editar">Editar</a>  
                        @endcan
                        @can('admin.alumnos.destroy')
                            <form action="{{ route('alumnos.destroy', $alumno->matricula_alumno) }}" method="POST" class="form-eliminar">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn-eliminar">Eliminar</button>
                            </form>
                        @endcan
                    </td>
                </tr>
            @endforeach
        </tbody>
      </table>
@endsection
