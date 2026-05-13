@extends('layouts.main')

@section('title', 'Nosotros')

@section('content')

<!-- PRESENTACIÓN -->

<div class="container mt-5">

    <div class="row align-items-center">

        <div class="col-md-6">

            <h1 class="fw-bold mb-4">
                Sobre Autos Web
            </h1>

            <p class="lead">
                En Autos Web nos apasionan los vehículos deportivos y de lujo.
                Nuestro objetivo es ofrecer una experiencia moderna donde los usuarios
                puedan descubrir algunos de los automóviles más impresionantes del mundo.
            </p>

            <p>
                Trabajamos con modelos exclusivos reconocidos por su potencia,
                diseño y tecnología avanzada. Queremos acercar el mundo automotriz
                premium a todos nuestros visitantes.
            </p>

        </div>

        <div class="col-md-6 text-center">

            <img src="https://images.unsplash.com/photo-1494976388531-d1058494cdd8?q=80&w=1200&auto=format&fit=crop"
                 class="img-fluid rounded shadow">

        </div>

    </div>

</div>

<!-- MISIÓN Y VISIÓN -->

<div class="container mt-5">

    <div class="row">

        <div class="col-md-6">

            <div class="card shadow p-4 h-100">

                <h3 class="fw-bold mb-3">
                    Nuestra Misión
                </h3>

                <p>
                    Brindar a nuestros usuarios una plataforma moderna y atractiva
                    donde puedan conocer vehículos deportivos y de lujo con información clara,
                    imágenes de calidad y una experiencia agradable.
                </p>

            </div>

        </div>

        <div class="col-md-6">

            <div class="card shadow p-4 h-100">

                <h3 class="fw-bold mb-3">
                    Nuestra Visión
                </h3>

                <p>
                    Convertirnos en una de las plataformas automotrices más reconocidas
                    para amantes de los vehículos premium y deportivos en Latinoamérica.
                </p>

            </div>

        </div>

    </div>

</div>

<!-- ESTADÍSTICAS -->

<div class="container mt-5 mb-5">

    <div class="text-center mb-5">

        <h2 class="fw-bold">
            Nuestra Experiencia
        </h2>

    </div>

    <div class="row text-center">

        <div class="col-md-4">

            <div class="card shadow p-4">

                <h1 class="fw-bold text-danger">
                    +50
                </h1>

                <p>
                    Vehículos deportivos
                </p>

            </div>

        </div>

        <div class="col-md-4">

            <div class="card shadow p-4">

                <h1 class="fw-bold text-danger">
                    +100
                </h1>

                <p>
                    Clientes satisfechos
                </p>

            </div>

        </div>

        <div class="col-md-4">

            <div class="card shadow p-4">

                <h1 class="fw-bold text-danger">
                    24/7
                </h1>

                <p>
                    Atención personalizada
                </p>

            </div>

        </div>

    </div>

</div>

@endsection