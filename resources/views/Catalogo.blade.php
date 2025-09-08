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
    <h2>Juguetes recomendados para {{ session('genero') }}</h2>

    @if(session('mensaje'))
    <div class="alert">
        {{ session('mensaje') }}
    </div>
    @endif

    <div class="catalogo">
    @foreach($juguetes as $juguete)
        <div class="juguete-item">
            <img src="{{ asset('images/' . $juguete->imagen) }}" alt="{{ $juguete->nombre }}">
            <h3>{{ $juguete->nombre }}</h3>
            <p>Precio: ${{ number_format($juguete->precio, 2) }}</p>
            <form action="{{ route('enviar.juguete') }}" method="POST">
                @csrf
                <input type="hidden" name="juguete_id" value="{{ $juguete->id }}">
                <button type="submit">Enviar</button>
            </form>
        </div>
    @endforeach
</div>

</body>
</html>
