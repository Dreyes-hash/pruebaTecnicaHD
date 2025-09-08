<x-mail::message>
# Información del Juguete: {{ $juguete->nombre }}

¡Hola {{ session('nombre') }}!

Te enviamos la información del juguete que seleccionaste:

- **Nombre:** {{ $juguete->nombre }}
- **Precio:** ${{ number_format($juguete->precio, 2) }}
- **Género:** {{ ucfirst($juguete->genero) }}

<img src="{{ asset('images/' . $juguete->imagen) }}" alt="{{ $juguete->nombre }}" style="width:200px;">

Esperamos que esta información te sea útil.

¡Gracias por visitar nuestro catálogo de juguetes!

Saludos,<br>
{{ config('app.name') }}
</x-mail::message>
