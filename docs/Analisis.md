# Análisis inicial del Problema

## 1. Requerimientos funcionales

* El sistema debe permitir al usuario registrarse ingresando:
  - Nombre
  - Correo electrónico
  - Género
* El sistema debe almacenar los datos del usuario en sesión o cookie.
* El sistema debe mostrar un catálogo de juguetes.
* El catálogo debe filtrarse según el género del usuario.
* El sistema debe mostrar un saludo personalizado con el nombre del usuario.
* Cada juguete debe tener un botón **"Enviar"** que envíe la información del juguete al correo del cliente.
* El sistema debe contar con datos de prueba en la base de datos.

---

## 2. Diagrama de Casos de Uso
```mermaid
flowchart TD
  Usuario --> A[Registrar datos en formulario]
  Usuario --> B[Ver catálogo de juguetes]
  Usuario --> C[Filtrar juguetes por género]
  Usuario --> D[Recibir saludo]
  Usuario --> E[Solicitar envío de información por correo]
```

## 3. Flujo de la información
```mermaid
flowchart TD
  A[Usuario llena formulario] --> B[Datos guardados en sesión/cookie]
  B --> C[Consulta catálogo de juguetes]
  C --> D[Filtrado por género desde sesión]
  D --> E[Mostrar catálogo en pantalla con saludo]
  E --> F[Usuario da clic en Enviar]
  F --> G[Enviar información del juguete al correo del usuario]
```
## 4. Modelado de la BD

Tabla Juguetes
| Campo       | Tipo                         | Restricciones              |
| ----------- | ---------------------------- | -------------------------- |
| id          | INT                          | PK, AUTO\_INCREMENT        |
| nombre      | VARCHAR(100)                 | NOT NULL                   |
| descripcion | TEXT                         | NULL                       |
| genero      | ENUM('M','F')                | NOT NULL                   |
| precio      | DECIMAL(10,2)                | NOT NULL                   |
| imagen      | VARCHAR(250)                 |                            |
