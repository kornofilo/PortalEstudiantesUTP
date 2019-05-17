<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!--Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>
<body class="bg-light">
    <div id="app">
        <nav class="navbar navbar-expand-lg sticky-top navbar-dark bg-dark">
            <!-- Nombre de la web -->
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name') }}
            </a>

            <!-- Toggler para la navegación en dispositivos móviles -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
             <ul class="navbar-nav mr-auto">
                <!-- Link a la sección de eventos -->
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('eventos') }}">
                        <!-- Icono de Eventos -->
                        <i class="fas fa-calendar-alt"></i>
                        <!-- Texto del Link de Eventos -->
                        {{ __('Eventos') }}
                    </a>
                </li>

                 <!-- Link a la sección de Bolsa de trabajo -->
                 <li class="nav-item">
                    <a class="nav-link" href="{{ url('bolsatrabajos') }}">
                        <!-- Icono de Bolsa de Trabajo-->
                        <i class="fas fa-briefcase"></i>
                        <!-- Texto del Link de Bolsa de Trabajo-->
                        {{ __('Bolsa de Trabajo') }}
                    </a>
                </li>

                <!-- Dropdown de la sección de clasificados -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <!-- Icono de Clasificados -->
                        <i class="far fa-newspaper"></i>
                        <!-- Texto del Dropdown de Clasificados-->
                        {{ __('Clasificados') }}
                    </a>

                    <!-- Opciones del Dropdown de Clasificados -->
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ url('clasificado/anuncios') }}">
                            <!-- Icono de Compra/Venta -->
                            <i class="fas fa-money-bill-wave"></i>
                            <!-- Texto del Link de Compra/Venta -->
                            {{ __('Compra/Venta') }}
                        </a>
                        <a class="dropdown-item" href="{{ url('clasificado/tutorias') }}">
                            <!-- Icono de Tutorías -->
                            <i class="fas fa-chalkboard-teacher"></i>
                            <!-- Texto del Link de Tutorías -->
                            {{ __('Tutorías') }}
                        </a>
                        <a class="dropdown-item" href="{{ url('clasificado/alquilerhospedajes') }}">
                            <!-- Icono de Alquiler/Hospedaje -->
                            <i class="fas fa-home"></i>
                            <!-- Texto del Link de Alquiler/Hospedaje -->
                            {{ __('Alquiler/Hospedaje') }}
                        </a>
                    </div>
                </li>

                 <!-- Dropdown del Panel de Administración -->
                 <!-- Consultamos con la directuva role si el usuario cuenta con el rol de administrador -->
                 @role('Administrador')
                 <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <!-- Icono del Panel de Administración  -->
                        <i class="fas fa-cog"></i>
                        <!-- Texto del Dropdown del Panel de Admnistración-->
                        {{ __('Panel de Administración') }}
                    </a>

                    <!-- Opciones del Dropdown de Panel de Administración -->
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ url('usersAdmin') }}">
                            <!-- Icono de Gestión de Usuarios -->
                            <i class="fas fa-user-cog"></i>
                            <!-- Texto de Gestión de Usuarios -->
                            {{ __('Gestión de Usuarios') }}
                        </a>
                        <a class="dropdown-item" href="{{ url('degreesAdmin') }}">
                            <!-- Icono de Gestión de Facultades y Carreras -->
                            <i class="fas fa-user-graduate"></i>
                            <!-- Texto del Link de Gestión de Facultades y Carreras -->
                            {{ __('Gestión de Facultades y Carreras') }}
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ url('postsMod') }}">
                            <!-- Icono de Moderación de Publicaciones -->
                            <i class="fas fa-check-double"></i>
                            <!-- Texto del Link de Moderación de Publicaciones -->
                            {{ __('Publicaciones por Moderar') }}
                        </a>
                    </div>
                </li>
                @endrole

                <!-- Opción de Gestión de Publicacione (Exclusiva de usuarios con el rol de moderador) -->
                 <!-- Consultamos con la directuva role si el usuario cuenta con el rol de moderador -->
                 @role('Moderador')
                 <li class="nav-item">
                    <a class="nav-link" href="{{ url('postsMod') }}">
                            <!-- Icono de Moderación de Publicaciones -->
                            <i class="fas fa-check-double"></i>
                            <!-- Texto del Link de Moderación de Publicaciones -->
                            {{ __('Publicaciones por Moderar') }}
                    </a>
                </li>
                @endrole
             </ul>

              <!-- Dropdown de Opciones de Usuario -->
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <!-- Si el usuario tiene la imagen de perfil por defecto, la mostramos. -->
                @if(auth()->user()->imagen === "default_avatar.png")
                    <img src="{{url(auth()->user()->imagen)}}" class="rounded" width="30">
                <!-- Si el usuario ha cambiado su imagen de perfil, la mostramos. -->
                @else
                    <img src="/imagenes/profileImages/{{auth()->user()->email}}/{{auth()->user()->imagen}}" class="rounded" width="30">
                @endif
                  <!-- Email del usuario  -->
                  {{ Auth::user()->email }}
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <!-- Opción para acceder al perfil del usuario -->
                    <a class="dropdown-item" href="{{ url('miPerfil') }}">Mi Perfil</a>

                    <!-- Opción para cerrar la sesión -->
                    <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                        {{ __('Cerrar Sesión') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                 </div>
             </div>
            </div>
    </div>
        </nav>

        <main class="py-4">
            @include('includes.alerts')
            @yield('content')
        </main>
    </div>

    <!-- JavaScript -->
   

    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>



    <!-- Footer del Portal Estudiantil -->
    <footer>
        <div class="fixed-bottom bg-dark text-white">
            <h6>&copy Portal Estudiantil - 2019</h6>
        </div>
    </footer>
</body>
</html>
