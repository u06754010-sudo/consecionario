@extends('layouts.main')

@section('title', 'Contacto')

@section('content')

<div class="container mt-5 mb-5">

    <div class="text-center mb-5">

        <h1 class="fw-bold">
            Contáctanos
        </h1>

        <p class="text-muted">
            Estamos disponibles para ayudarte a encontrar el vehículo ideal.
        </p>

    </div>

    <div class="row">

        <!-- FORMULARIO -->

        <div class="col-md-7">

            <div class="card shadow p-4">

                <h3 class="mb-4">
                    Envíanos un mensaje
                </h3>

                <form>

                    <div class="mb-3">
                        <label class="form-label">
                            Nombre
                        </label>

                        <input type="text"
                               class="form-control"
                               placeholder="Ingrese su nombre">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">
                            Correo Electrónico
                        </label>

                        <input type="email"
                               class="form-control"
                               placeholder="Ingrese su correo">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">
                            Mensaje
                        </label>

                        <textarea class="form-control"
                                  rows="5"
                                  placeholder="Escriba su mensaje"></textarea>
                    </div>

                    <button type="submit"
                            class="btn btn-dark">
                        Enviar Mensaje
                    </button>

                </form>

            </div>

        </div>

        <!-- INFORMACIÓN -->

        <div class="col-md-5">

            <div class="card shadow p-4 h-100">

                <h3 class="mb-4">
                    Información
                </h3>

                <p>
                    📍 Pasto, Colombia
                </p>

                <p>
                    📞 +57 300 123 4567
                </p>

                <p>
                    ✉️ contacto@autosweb.com
                </p>

                <p>
                    🕒 Lunes a Sábado
                    <br>
                    8:00 AM - 6:00 PM
                </p>

                <hr>

                <img src="https://images.unsplash.com/photo-1489824904134-891ab64532f1?q=80&w=1200&auto=format&fit=crop"
                     class="img-fluid rounded shadow">

            </div>

        </div>

    </div>

</div>

@endsection