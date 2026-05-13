@extends('layouts.main')

@section('title', 'Inicio')

@section('content')

<!-- HERO -->

<div class="container-fluid bg-dark text-white py-5">

    <div class="container">

        <div class="row align-items-center">

            <div class="col-md-6">

                <h1 class="display-4 fw-bold">
                    Bienvenido a Autos Web
                </h1>

                <p class="lead mt-4">
                    Descubre los vehículos deportivos y de lujo más impresionantes
                    del mundo. Vive la velocidad, el diseño y la potencia en un solo lugar.
                </p>

                <a href="{{ route('autos') }}" class="btn btn-danger btn-lg mt-3">
                    Ver Vehículos
                </a>

            </div>

            <div class="col-md-6 text-center">

                <img src="https://images.unsplash.com/photo-1492144534655-ae79c964c9d7?q=80&w=1200&auto=format&fit=crop"
                     class="img-fluid rounded shadow">

            </div>

        </div>

    </div>

</div>

<!-- MARCAS -->

<div class="container mt-5">

    <div class="text-center mb-5">

        <h2 class="fw-bold">
            Marcas Disponibles
        </h2>

        <p class="text-muted">
            Trabajamos con vehículos de alto rendimiento y lujo.
        </p>

    </div>

    <div class="row text-center">

        <div class="col-md-3">
            <div class="card shadow p-4">
                <h4>Ferrari</h4>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card shadow p-4">
                <h4>Porsche</h4>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card shadow p-4">
                <h4>Chevrolet</h4>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card shadow p-4">
                <h4>Dodge</h4>
            </div>
        </div>

    </div>

</div>

<!-- BENEFICIOS -->

<div class="container mt-5 mb-5">

    <div class="text-center mb-5">

        <h2 class="fw-bold">
            ¿Por qué elegirnos?
        </h2>

    </div>

    <div class="row">

        <div class="col-md-4">
            <div class="card shadow h-100 p-4 text-center">

                <h4 class="mb-3">
                    Calidad Premium
                </h4>

                <p>
                    Vehículos seleccionados con altos estándares de calidad y rendimiento.
                </p>

            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow h-100 p-4 text-center">

                <h4 class="mb-3">
                    Atención Personalizada
                </h4>

                <p>
                    Nuestro equipo te ayudará a elegir el vehículo ideal para ti.
                </p>

            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow h-100 p-4 text-center">

                <h4 class="mb-3">
                    Vehículos Exclusivos
                </h4>

                <p>
                    Contamos con modelos deportivos y de lujo difíciles de encontrar.
                </p>

            </div>
        </div>

    </div>

</div>

@endsection