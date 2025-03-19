@extends('layouts.app')
@section('title', 'Iniciar sesión')
@section('content')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
    @if(Auth::user())
        <script>
            window.location.href = "{{ url('/alumnos') }}"
        </script>
    @endif
    <div class="container-search">
        <div class="body-form">
            <div class="background-form"></div>
            <div class="card-form">
                <img class="logo-form" src="#" alt="Logo">
                <h4>Iniciar sesión</h4>
                <form class="form" action="{{ route('login.authenticate') }}" method="POST">
                    @csrf
                    <input type="email" name="email" id="email" placeholder="Ingresa tu correo electrónico" required value="{{ old('email') }}">
                    @error("email")
                        <span class="error-message">{{$message}}</span>
                    @enderror
                    <input type="password" name="password" id="password" placeholder="Ingresa tu contraseña" required>
                    <input type="submit" value="Iniciar sesión">
                </form>
        
                <footer>
                    Si eres el administrador del CRM, inicia sesión para acceder a más funciones
                </footer>
            </div>
        </div>
    </div>
@endsection