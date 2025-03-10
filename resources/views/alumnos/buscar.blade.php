@extends('layouts.app')
@section('title', 'Buscar alumno')
@section('content')
    <h2>Escanea para buscar alumno</h2>

    <p>Ó ingresa la matricula</p>
    <form action="{{ route('alumnos.buscar.submit') }}" method="POST">
        @csrf
        <input type="text" name="matricula" id="matricula" placeholder="Ingresa la matricula del alumno" required>
        <input type="submit" value="Buscar">
    </form>
@endsection