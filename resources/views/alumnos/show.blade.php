<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Alumno</title>
</head>
<body>
    <h2>Información del alumno:</h2>
    <ul>
        <li>Nombre: {{$alumno->nombre_alumno}}</li>
        <li>Dirección: {{$alumno->direccion_alumno}}</li>
        <li>Teléfono 1: {{$alumno->telefono1_alumno}}</li>
        <li>Teléfono 2: {{$alumno->telefono2_alumno}}</li>
        <li>Correo electrónico: {{$alumno->correoE_alumno}}</li>
        <li>Fecha de nacimiento: {{$alumno->fNacimiento_alumno}}</li>
        <li>Carrera: {{$alumno->carrera_alumno}}</li>
        <li>Semestre: {{$alumno->semestre_alumno}}</li>
        <li>Enfermedades: {{$alumno->enfermedades_alumno}}</li>
        <li>Medicamentos: {{$alumno->medicamentos_alumno}}</li>
        <li>Alergias: {{$alumno->alergias_alumno}}</li>
        <li>Tipo de sangre: {{$alumno->tipoSangre_alumno}}</li>
        <li>Restricciones médicas: {{$alumno->restricMed_alumno}}</li>
        <li>Contacto de emergencia: {{$alumno->contactoMed_alumno}}</li>
    </ul>
    <a href="{{ route('alumnos.index') }}">Regresar al listado de alumnos</a>
</body>
</html>