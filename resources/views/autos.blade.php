@extends('layouts.main')

@section('title', 'Autos')

@section('content')

<div class="container mt-5">

    <div class="text-center mb-5">
        <h1 class="fw-bold">Catálogo de Vehículos</h1>
        <p class="text-muted">
            Explora nuestros vehículos deportivos y de lujo disponibles.
        </p>
    </div>

    <div class="row g-4">

        <!-- Dodge -->
        <div class="col-md-3">
            <div class="card shadow h-100">

                <img src="https://octane.rent/wp-content/uploads/2024/06/dodge_challenger_black_02-600x400.webp"
                     class="card-img-top"
                     style="height:220px; object-fit:cover;">

                <div class="card-body d-flex flex-column">

                    <h5 class="card-title fw-bold">
                        Dodge Challenger
                    </h5>

                    <p class="text-muted">
                        Deportivo americano con motor V8 y diseño agresivo.
                    </p>

                    <h4 class="text-primary mb-3">
                        $250.000.000
                    </h4>

                    @auth
                        <a href="{{ route('mensajes') }}"
                           class="btn btn-dark mt-auto">
                            Comprar Vehículo
                        </a>
                    @else
                        <a href="{{ route('login') }}"
                           class="btn btn-primary mt-auto">
                            Iniciar Sesión para Comprar
                        </a>
                    @endauth

                </div>
            </div>
        </div>

        <!-- Porsche -->
        <div class="col-md-3">
            <div class="card shadow h-100">

                <img src="https://newsroom.porsche.com/.imaging/mte/porsche-templating-theme/image_1290x726/dam/ES-PLA-local/2022/Vehiculos/El-nuevo-Porsche-911-Turbo-S-llega-Ecuador/PLA22_1125_fine.jpg/jcr:content/PLA22_1125_fine.jpg"
                     class="card-img-top"
                     style="height:220px; object-fit:cover;">

                <div class="card-body d-flex flex-column">

                    <h5 class="card-title fw-bold">
                        Porsche 911 Turbo S
                    </h5>

                    <p class="text-muted">
                        Uno de los deportivos más rápidos y lujosos del mundo.
                    </p>

                    <h4 class="text-primary mb-3">
                        $950.000.000
                    </h4>

                    @auth
                        <a href="{{ route('mensajes') }}"
                           class="btn btn-dark mt-auto">
                            Comprar Vehículo
                        </a>
                    @else
                        <a href="{{ route('login') }}"
                           class="btn btn-primary mt-auto">
                            Iniciar Sesión para Comprar
                        </a>
                    @endauth

                </div>
            </div>
        </div>

        <!-- Camaro -->
        <div class="col-md-3">
            <div class="card shadow h-100">

                <img src="https://cdn.buttercms.com/QePwHHT4TzGyVP8YMK1H"
                     class="card-img-top"
                     style="height:220px; object-fit:cover;">

                <div class="card-body d-flex flex-column">

                    <h5 class="card-title fw-bold">
                        Chevrolet Camaro
                    </h5>

                    <p class="text-muted">
                        Muscle car americano con excelente potencia y estilo.
                    </p>

                    <h4 class="text-primary mb-3">
                        $320.000.000
                    </h4>

                    @auth
                        <a href="{{ route('mensajes') }}"
                           class="btn btn-dark mt-auto">
                            Comprar Vehículo
                        </a>
                    @else
                        <a href="{{ route('login') }}"
                           class="btn btn-primary mt-auto">
                            Iniciar Sesión para Comprar
                        </a>
                    @endauth

                </div>
            </div>
        </div>

        <!-- Ferrari -->
        <div class="col-md-3">
            <div class="card shadow h-100">

                <img src="https://res.cloudinary.com/unix-center/image/upload/c_limit,dpr_3.0,f_auto,fl_progressive,g_center,h_580,q_75,w_906/fl7hxq9rczontkgsvvw0.jpg"
                     class="card-img-top"
                     style="height:220px; object-fit:cover;">

                <div class="card-body d-flex flex-column">

                    <h5 class="card-title fw-bold">
                        Ferrari
                    </h5>

                    <p class="text-muted">
                        Superdeportivo italiano de lujo y alto rendimiento.
                    </p>

                    <h4 class="text-danger mb-3">
                        $1.500.000.000
                    </h4>

                    @auth
                        <a href="{{ route('mensajes') }}"
                           class="btn btn-dark mt-auto">
                            Comprar Vehículo
                        </a>
                    @else
                        <a href="{{ route('login') }}"
                           class="btn btn-primary mt-auto">
                            Iniciar Sesión para Comprar
                        </a>
                    @endauth

                </div>
            </div>
        </div>

    </div>

</div>

@endsection