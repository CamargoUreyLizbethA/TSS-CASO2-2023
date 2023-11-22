<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tu Página</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;900&display=swap');

        body {
            font-family: 'Poppins';
            margin: 0;
            padding: 0;
            background-color: #e6ebe0;
        }

        .header {
            background-color: #181c29; /* Color de fondo para la barra de encabezado */
            color: #e6ebe0; /* Color del texto en la barra de encabezado */
            padding: 20px; /* Espaciado interno en la barra de encabezado */
            height: 1cm; /* Altura fija del encabezado */
        }

        .head {
            display: flex;
            justify-content: space-between; /* Coloca el contenido a los extremos */
            align-items: center; /* Centra verticalmente el contenido */
        }

        .logo a {
            text-decoration: none; /* Elimina el subrayado del enlace */
            color: white; /* Color del texto del enlace */
            font-size: 20px; /* Tamaño del texto del enlace */
        }

        .navbar {
            list-style: none; /* Elimina los estilos de la lista */
            display: flex;
        }

        .navbar li {
            margin-right: 20px; /* Espaciado entre elementos de la lista */
            font-size: 23px; /* Tamaño del texto del enlace */

        }

        .navbar a {
            text-decoration: none; /* Elimina el subrayado del enlace */
            color: #9bc1bc; /* Color del texto del enlace */
            padding: 20px 20px;
            font-size: 23px; /* Tamaño del texto del enlace */
        }

        .header-btn {
            text-decoration: none; /* Elimina el subrayado del botón de encabezado */
            color: #9bc1bc; /* Color del texto del botón de encabezado */
            margin-left: 20px; /* Espaciado a la izquierda del botón de encabezado */
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
            color: #181c29;
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
        <div class="head">
            <div class="logo">
                <a href="#">Logo</a>
            </div>
            <nav class="navbar">
                <li><a href="comp_inicio/AcercaDeNosotros.html">Acerca de Nosotros</a></li>
                <li><a href="comp_inicio/politicaDePrivacidad.html">Politica de Privacidad</a></li>
                <li><a href="comp_inicio/Ayuda.html">Centro de Ayuda</a></li>
                <a class="header-btn" href="index.php">Atrás</a>
            </nav>
        </div>
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
            <a href="listaformulario.php">
                <h2>Formulario Para Simular</h2>
                <img src="imagenes/simulacion.jpg" alt="Imagen Simular">
            </a>
        </div>
        <!-- Tarjeta "Aprender" -->
        <div class="card">
            <a href="aprender.php">
                <h2>Aprender Sobre La Aplicacion</h2>
                <img src="imagenes/aprenderS.jpg" alt="Imagen Aprender">
            </a>
        </div>
    </div>
</body>

</html>







