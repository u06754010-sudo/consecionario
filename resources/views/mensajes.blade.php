@extends('layouts.main')

@section('title', 'Mensajes')

@section('content')

<div class="container py-5">

    <div class="bg-white p-5 rounded shadow">

        <h1 class="text-center fw-bold mb-4">
            Mensajes Privados
        </h1>

        <p class="text-center text-muted mb-5">
            Solo los usuarios autenticados pueden acceder a esta sección.
        </p>

        <div class="row g-4">

            <div class="col-md-4">

                <div class="card shadow border-0 h-100">

                    <div class="card-body">

                        <h4 class="mb-3">
                            Solicitudes
                        </h4>

                        <p>
                            Consulta solicitudes realizadas por clientes interesados en vehículos deportivos.
                        </p>

                    </div>

                </div>

            </div>

            <div class="col-md-4">

                <div class="card shadow border-0 h-100">

                    <div class="card-body">

                        <h4 class="mb-3">
                            Notificaciones
                        </h4>

                        <p>
                            Revisa mensajes importantes y novedades del sistema.
                        </p>

                    </div>

                </div>

            </div>

            <div class="col-md-4">

                <div class="card shadow border-0 h-100">

                    <div class="card-body">

                        <h4 class="mb-3">
                            Seguridad
                        </h4>

                        <p>
                            Esta área está protegida y solo puede ser vista por usuarios autenticados.
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection