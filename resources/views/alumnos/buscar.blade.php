<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Buscar alumno</title>
</head>
<body>
    <h2>Escanea para buscar alumno</h2>

    <p>Ó ingresa la matricula</p>
    <form action="{{ route('alumnos.buscar.submit') }}" method="POST">
        @csrf
        <input type="text" name="matricula" id="matricula" placeholder="Ingresa la matricula del alumno" required>
        <input type="submit" value="Buscar">
    </form>
</body>
</html>