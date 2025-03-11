@extends('layouts.app')
@section('title', 'Iniciar sesión')
@section('content')
    @if($errors->any())
    @foreach($errors->all() as $error)
        <div class="alert alert-danger" role="alert">
            {{ $error }}
        </div>
    @endforeach
    @endif

    <form action="{{ route('login.authenticate') }}" method="POST">
        @csrf
        <input type="email" name="email" id="email" placeholder="Ingresa tu correo electrónico" required value="{{ old('email') }}">
        <input type="password" name="password" id="password" placeholder="Ingresa tu contraseña" required>
        <input type="submit" value="Iniciar sesión">
    </form>
@endsection