<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Tienda Laravel')</title>
</head>
<body>
    @include('tienda.parcial.nav')
    @yield('contenido')
</body>
</html>