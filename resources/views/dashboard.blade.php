@extends('layouts.main')

@section('title', 'Dashboard')

@section('content')

<div class="container py-5">

    <div class="bg-white rounded shadow p-5 text-center mb-5">

        <h1 class="display-4 fw-bold mb-4">
            Bienvenido al Concesionario
        </h1>

        <p class="lead">
            Hola, {{ Auth::user()->name }}.
            Ya puedes acceder a todas las funciones privadas del sistema.
        </p>

    </div>

    <div class="row g-4">

        <div class="col-md-6">

            <div class="card shadow border-0 h-100">

                <div class="card-body">

                    <h3 class="card-title mb-3">
                        Panel Principal
                    </h3>

                    <p class="card-text">
                        Administra información del concesionario,
                        revisa autos disponibles y accede a herramientas privadas.
                    </p>

                    <a href="{{ route('autos') }}" class="btn btn-dark">
                        Ver Autos
                    </a>

                </div>

            </div>

        </div>

        <div class="col-md-6">

            <div class="card shadow border-0 h-100">

                <div class="card-body">

                    <h3 class="card-title mb-3">
                        Mensajes Privados
                    </h3>

                    <p class="card-text">
                        Consulta solicitudes, mensajes y notificaciones
                        enviadas por los clientes del concesionario.
                    </p>

                    <a href="{{ route('mensajes') }}" class="btn btn-danger">
                        Ir a Mensajes
                    </a>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection