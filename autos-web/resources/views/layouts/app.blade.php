<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>@yield('title')</title>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
    <body style="background-color:#121212; color:white;">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<div class="container">

<a class="navbar-brand" href="{{ route('inicio') }}">Autos</a>

<ul class="navbar-nav ms-auto">

<li class="nav-item">
<a class="nav-link" href="{{ route('inicio') }}">Inicio</a>
</li>

<li class="nav-item">
<a class="nav-link" href="{{ route('autos') }}">Autos</a>
</li>

<li class="nav-item">
<a class="nav-link" href="{{ route('nosotros') }}">Nosotros</a>
</li>

<li class="nav-item">
<a class="nav-link" href="{{ route('contacto') }}">Contacto</a>
</li>

</ul>

</div>
</nav>

<div class="container mt-4">

@yield('content')

</div>
<footer class="text-center mt-5 p-3 bg-dark text-white">
© 2026 Autos Web - Proyecto Johann Hernandez y Andres Recalde 
</footer>
</body>
</html>