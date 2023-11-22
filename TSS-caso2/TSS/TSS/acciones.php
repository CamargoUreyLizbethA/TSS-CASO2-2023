<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tu Página</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #181c29;
        }

        .header {
            background: #181c29;
            color: #fff;
            height: 2cm;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 20px;
        }

        .container {
            max-width: 800px;
            margin: 22px auto; /* Ajustado para compensar la altura del encabezado */
            text-align: center;
            display: flex;
            flex-direction: column; /* Cambiado de 'row' a 'column' */
            align-items: center; /* Centra las tarjetas horizontalmente */
        }

        .card {
            position: relative;
            background-color: #28324b;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin: 20px;
            width: 6cm;
            height: 10cm;
            overflow: hidden;
            color: #fff;
            /* Cambiar el color del texto a blanco */
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            /* Cambiar el cursor a la manito cuando pases sobre la tarjeta */
        }

        .card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            /* Hace que la imagen cubra todo el contenedor sin distorsionarse */
            z-index: 0;
            /* Coloca la imagen detrás del texto */
        }

        .card h2 {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            margin: 0;
            /* Elimina el margen predeterminado del encabezado */
        }

        .header-btn {
            margin-bottom: 20px;
            color: #fff;
            text-decoration: none;
            font-size: 1em;
        }

        /* Estilo para el enlace dentro de la tarjeta */
        .card a {
            text-decoration: none;
            /* Elimina el subrayado del enlace */
            color: inherit;
            /* Hereda el color del texto de la tarjeta */
            display: block;
            width: 100%;
            height: 100%;
        }
    </style>
</head>

<body>
    <div class="header">
        <a class="header-btn" href="index.php">&lt; Atrás</a>
        <h1>Estrategas Virtuosos</h1>
    </div>

    <div class="container">
         <!-- Tarjeta "Ejemplo de Simulación" -->
         <div class="card">
            <a href="inversionCaso2.html">
                <h2>Ejemplo de Simulación</h2>
                <img src="imagenes/ejemplo.jpg" alt="Imagen Ejemplo de Simulación">
            </a>
        </div>
        <!-- Tarjeta "Simular" -->
        <div class="card">
            <a href="formulario.php">
                <h2>Formulario</h2>
                <img src="imagenes/simulacion.jpg" alt="Imagen Simular">
            </a>
        </div>
        <!-- Tarjeta "Aprender" -->
        <div class="card">
            <a href="aprender.php">
                <h2>Aprender</h2>
                <img src="imagenes/aprenderS.jpg" alt="Imagen Aprender">
            </a>
        </div>
    </div>
</body>

</html>






