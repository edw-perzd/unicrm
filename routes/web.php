<?php

use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate'])->name('login.authenticate');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/ayuda', function () {return view('alumnos.ayuda');})->name('ayuda');

Route::get('/alumnos', [AlumnoController::class, 'index'])->name('alumnos.index');

Route::get('/alumnos/buscar/', [AlumnoController::class, 'buscar'])->name('alumnos.buscar.form');
Route::post('/alumnos/buscar/', [AlumnoController::class, 'submit'])->name('alumnos.buscar.submit');

Route::get('/alumnos/buscar/{matricula}', [AlumnoController::class, 'show'])->name('alumnos.show');

Route::get('/alumnos/crear/', [AlumnoController::class, 'create'])->name('alumnos.create');
Route::post('/alumnos/crear/', [AlumnoController::class, 'store'])->name('alumnos.store');
Route::get('/alumnos/{matricula}/editar', [AlumnoController::class, 'edit'])->name('alumnos.edit');
Route::put('/alumnos/{matricula}', [AlumnoController::class, 'update'])->name('alumnos.update');

Route::delete('/alumnos/{matricula}', [AlumnoController::class, 'destroy'])->name('alumnos.destroy');