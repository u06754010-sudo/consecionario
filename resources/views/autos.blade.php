@extends('layouts.app')

@section('title', 'Autos')

@section('content')

<div class="container mt-5">

<h1 class="text-center">Nuestros Autos</h1>

<div class="row mt-4">

<div class="col-md-3">
<div class="card shadow">
<img src="https://octane.rent/wp-content/uploads/2024/06/dodge_challenger_black_02-600x400.webp" class="card-img-top" style="height:200px; object-fit:cover;">
<div class="card-body">
<h5 class="card-title">Dodge Challenger</h5>
<p class="card-text">Auto deportivo americano con gran potencia.</p>
</div>
</div>
</div>

<div class="col-md-3">
<div class="card shadow">
<img src="https://newsroom.porsche.com/.imaging/mte/porsche-templating-theme/image_1290x726/dam/ES-PLA-local/2022/Vehiculos/El-nuevo-Porsche-911-Turbo-S-llega-Ecuador/PLA22_1125_fine.jpg/jcr:content/PLA22_1125_fine.jpg" class="card-img-top" style="height:200px; object-fit:cover;">
<div class="card-body">
<h5 class="card-title">Porsche 911 Turbo S</h5>
<p class="card-text">Uno de los autos deportivos más rápidos del mundo.</p>
</div>
</div>
</div>

<div class="col-md-3">
<div class="card shadow">
<img src="https://cdn.buttercms.com/QePwHHT4TzGyVP8YMK1H" class="card-img-top" style="height:200px; object-fit:cover;">
<div class="card-body">
<h5 class="card-title">Chevrolet Camaro</h5>
<p class="card-text">Muscle car americano con diseño agresivo.</p>
</div>
</div>
</div>

<div class="col-md-3">
<div class="card shadow">
<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQfCahnfRSj_CUCjSXeZ62KDWTC4upqWo0OPw&s" class="card-img-top" style="height:200px; object-fit:cover;">
<div class="card-body">
<h5 class="card-title">Porsche 2026</h5>
<p class="card-text">Superdeportivo italiano con diseño extremo.</p>
</div>
</div>
</div>

</div>

</div>

@endsection