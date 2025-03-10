<?php

use App\Http\Controllers\AlumnoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/alumnos', [AlumnoController::class, 'index'])->name('alumnos.index');

Route::get('/alumnos/buscar/', [AlumnoController::class, 'buscar'])->name('alumnos.buscar.form');
Route::post('/alumnos/buscar/', [AlumnoController::class, 'submit'])->name('alumnos.buscar.submit');

Route::get('/alumnos/buscar/{matricula}', [AlumnoController::class, 'show'])->name('alumnos.show');