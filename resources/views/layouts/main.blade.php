<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow">
    <div class="container">

        <a class="navbar-brand fw-bold" href="{{ route('inicio') }}">
            Autos Web
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">

            <ul class="navbar-nav me-auto">

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('inicio') }}">
                        Inicio
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('autos') }}">
                        Autos
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('nosotros') }}">
                        Nosotros
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contacto') }}">
                        Contacto
                    </a>
                </li>

                @auth

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('dashboard') }}">
                        Dashboard
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('mensajes') }}">
                        Mensajes
                    </a>
                </li>

                @endauth

            </ul>

            <div class="d-flex align-items-center">

                @auth

                    <span class="text-white me-3">
                        {{ Auth::user()->name }}
                    </span>

                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <button type="submit" class="btn btn-outline-light">
                            Cerrar sesión
                        </button>
                    </form>

                @else

                    <a href="{{ route('login') }}" class="btn btn-outline-light me-2">
                        Iniciar sesión
                    </a>

                    <a href="{{ route('register') }}" class="btn btn-danger">
                        Registrarse
                    </a>

                @endauth

            </div>

        </div>

    </div>
</nav>

<div class="container mt-4">
    @yield('content')
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>