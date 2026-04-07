@extends('layouts.app')

@section('title', 'Contacto')

@section('content')

<div class="container mt-5">

<h1 class="text-center">Contáctanos</h1>

<form class="mt-4">

<div class="mb-3">
<label class="form-label">Nombre</label>
<input type="text" class="form-control" placeholder="Ingrese su nombre">
</div>

<div class="mb-3">
<label class="form-label">Correo</label>
<input type="email" class="form-control" placeholder="Ingrese su correo">
</div>

<div class="mb-3">
<label class="form-label">Mensaje</label>
<textarea class="form-control" rows="4" placeholder="Escriba su mensaje"></textarea>
</div>

<button type="submit" class="btn btn-primary">Enviar</button>

</form>

</div>

@endsection