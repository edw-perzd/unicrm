<link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
<nav>
  <!-- Navbar -->
  <nav class="navbar">
    <div class="container-nav navbar-container">
      <a href="{{ route('alumnos.index') }}" class="btn-navbar navbar-logo">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <path d="M12 5l0 14M5 12l14 0"></path>
        </svg>
        CRM-UNI
      </a>

      <div class="menu-toggle">
        <span></span>
        <span></span>
        <span></span>
      </div>

      <ul class="navbar-menu">
        <li class="nav-item">
          <a href="{{ route('alumnos.index') }}" class="btn-navbar nav-link {{ request()->routeIs(['alumnos.index', 'alumnos.edit']) ? 'active' : ''}}">Sistema de Control de Alumnos</a>
        </li>
        <li class="nav-item">
          <a href="{{ route('alumnos.buscar.form') }}" class="btn-navbar nav-link {{ request()->routeIs('alumnos.buscar.form') ? 'active' : ''}}">Buscar alumno</a>
        </li>
        @can('admin.alumnos.create')
          <li class="nav-item">
            <a href="{{ route('alumnos.create') }}" class="btn-navbar nav-link {{ request()->routeIs('alumnos.create') ? 'active' : ''}}">Registrar alumno</a>
          </li>
        @endcan
        <li class="nav-item">
          <a href="{{ route('ayuda') }}" class="btn-navbar nav-link {{ request()->routeIs('ayuda') ? 'active' : ''}}">Ayuda</a>
        </li>
        
        <div class="navbar-actions">
          @if (Route::has('login'))
                @auth
                    <li class="nav-item dropdown">
                        <div class="dropdown-toggle nav-link">
                        {{ Auth::user()->name }}
                          <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m6 9 6 6 6-6"/>
                          </svg>
                        </div>
                        <ul class="dropdown-menu">
                            <li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <input style="background: none; border: 0; color: black; font-size: 17px;" class="dropdown-item" type="submit" value="Cerrar sesión"/>
                                </form>
                            </li>
                        </ul>
                    </li>
                @else
                    <a
                        href="{{ route('login') }}"
                        class="action-btn btn-filled btn-navbar"
                    >
                        Iniciar sesión
                    </a>
                @endauth
        @endif
        </div>
      </ul>
    </div>
  </nav>
</nav>
<script src="{{ asset('js/navbar.js') }}"></script> 