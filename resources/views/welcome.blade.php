@extends('layouts.app') 
@section('title', 'CRM - Universidad')

@section('content')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <section class="hero">
        <div class="hero-content fade-in">
            <h1>Bienvenido</h1>
            <p>Consulta la información completa de los alumnos.</p>
        </div>
    </section>

      <div class="features">
        <div class="feature-card">
          <i class="fas fa-rocket"></i>
          <h4>Qué es?</h4>
          <p>Sistema diseñado para gestionar y organizar la información de los estudiantes de la universidad.</p>
        </div>
        <div class="feature-card">
          <i class="fas fa-shield-alt"></i>
          <h4>Proposito</h4>
          <p>Facilitar el acceso rápido, mediante su matrícula universitaria, a los datos personales, médicos y académicos de los estudiantes.</p>
        </div>
        {{-- <div class="feature-card">
          <i class="fas fa-cogs"></i>
          <h4>Customizable</h4>
          <p>Tailor the experience to your needs with our flexible options.</p>
        </div>
        <div class="feature-card">
          <i class="fas fa-users"></i>
          <h4>User Friendly</h4>
          <p>Enjoy an intuitive and easy-to-use interface.</p>
        </div> --}}
      </div>


    <section class="contact">
        <h2>Comenzar a buscar</h2>
        <a href="{{ route('alumnos.buscar.form') }}" target="_blank">
          <button class="discord-button button-3d">Ir a buscar</button>
        </a>
    </section>
@endsection
            