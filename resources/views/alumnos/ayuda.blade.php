@extends('layouts.app')

@section('title', 'Ayuda')

@section('content')

  <!-- Referencia al archivo CSS específico de esta página -->
  <link rel="stylesheet" href="{{ asset('css/ayuda.css') }}">

  <!-- Contenedor principal con clase específica -->
  <hr class="separator">
  <div class="container-ayuda">
    <h2 class="text-center">Centro de Ayuda</h2>
    <p class="text-center">Aquí encontrarás respuestas a las preguntas más comunes y orientación sobre el sistema.</p>

    <h3>Preguntas Frecuentes (FAQ)</h3>

    <ul class="faq-container">
      <!-- Pregunta 1 -->
      <li class="faq-item">
        <div class="faq-question">
          <strong>¿Cómo buscar un alumno?</strong>
        </div>
        <div class="faq-answer">
          Puedes buscar un alumno escaneando un QR o ingresando su matrícula en la seccion de "buscar alumno" en el menu.
        </div>
      </li>
      
      <!-- Pregunta 2 -->
      <li class="faq-item">
        <div class="faq-question">
          <strong>¿Cómo cerrar sesión?</strong>
        </div>
        <div class="faq-answer">
          Haz clic en tu nombre en el menú y selecciona "Cerrar sesión".
        </div>
      </li>

      <!-- Pregunta 3 -->
      <li class="faq-item">
        <div class="faq-question">
          <strong>¿Cómo funciona el sistema?</strong>
        </div>
        <div class="faq-answer">
          Texto ramodm jsjsjs.
        </div>
      </li>
    </ul>

    <h3>Contacto</h3>
    <p>Si necesitas más ayuda, contacta al equipo de soporte a través de <a href="mailto:soporte@crm-uni.com">soporte@crm-uni.com</a>.</p>
  </div>

  <!-- Referencia al archivo JavaScript específico de esta página -->
  <script src="{{ asset('js/ayuda.js') }}"></script>

@endsection
