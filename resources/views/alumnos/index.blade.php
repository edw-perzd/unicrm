<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Alumnos</title>
</head>
<body>
    <h2>Listado general de alumnos:</h2>
    <ul>
    @foreach ($alumnos as $alumno)
        <li>{{$alumno->nombre_alumno}}</li>
        <li>{{$alumno->direccion_alumno}}</li>
        <li>{{$alumno->telefono1_alumno}}</li>
        <li>{{$alumno->telefono2_alumno}}</li>
        <li>{{$alumno->correoE_alumno}}</li>
        <li>{{$alumno->fNacimiento_alumno}}</li>
        <li>{{$alumno->carrera_alumno}}</li>
        <li>{{$alumno->semestre_alumno}}</li>
        <li>{{$alumno->enfermedades_alumno}}</li>
        <li>{{$alumno->medicamentos_alumno}}</li>
        <li>{{$alumno->alergias_alumno}}</li>
        <li>{{$alumno->tipoSangre_alumno}}</li>
        <li>{{$alumno->restricMed_alumno}}</li>
        <li>{{$alumno->contactoMed_alumno}}</li>
    @endforeach
    </ul>
</body>
</html>