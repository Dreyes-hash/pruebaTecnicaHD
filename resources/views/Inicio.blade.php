<!-- resources/views/Inicio.blade.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro de Usuario</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="container">
        <!-- formulario de registro de usuario -->
        <h1>Registro de Usuario</h1> 
        <form action="{{}}" method="POST">
            @csrf
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre" required>

            <label for="email">Correo:</label>
            <input type="email" name="email" id="email" required>

            <label for="genero">Género:</label>
            <select name="genero" id="genero" required>
                <option value="">Seleccione</option>
                <option value="niño">Niño</option>
                <option value="niña">Niña</option>
            </select>

            <button type="submit">Guardar</button>
        </form>
    </div>
</body>
</html>
