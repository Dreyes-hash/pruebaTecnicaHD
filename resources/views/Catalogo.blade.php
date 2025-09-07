<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Catálogo de Juguetes</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <!-- recupera datos de sesión y muestra saludo -->
    <h1>¡Hola, {{ session('nombre') }}!</h1>
</body>
</html>
