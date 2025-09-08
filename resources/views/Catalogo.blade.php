<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Catálogo de Juguetes</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <!-- saludos de bienvenida recuperando las variables de sesión -->
    <h1>¡Hola, {{ session('nombre') }}!</h1>
    <h2>Juguetes recomendados para {{ session('genero') }}</h2>

    <!-- Ciclo foreach para mostrar los juguetes -->
    <div class="catalogo">
        @foreach($juguetes as $juguete)
            <div class="juguete-item">
                <img src="{{ $juguete->imagen }}" alt="{{ $juguete->nombre }}">
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

    <!-- ventana popup -->
    <div id="popupVentana" class="popup">
        <div class="popup-content">
            <p id="popup-text"></p>
            <button id="ok-btn">OK</button>
        </div>
    </div>

    <!-- js para mostrar ventana popup -->
    <script>
        @if(session('mensaje'))
            const popup = document.getElementById('popupVentana');
            const popupText = document.getElementById('popup-text');
            const closeBtn = document.querySelector('.close');
            const okBtn = document.getElementById('ok-btn');

            popupText.innerText = "{{ session('mensaje') }}";
            popup.style.display = 'block';

            okBtn.onclick = () => popup.style.display = 'none';
            window.onclick = (e) => { if(e.target == popup) popup.style.display = 'none'; }
        @endif
    </script>
</body>
</html>
