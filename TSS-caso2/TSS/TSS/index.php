<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Pagina web basica</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        text-align: center;
        display: flex;
        background-blend-mode: multiply;
        background-image: url(https://www.umss.edu.bo/wp-content/uploads/2021/11/5650360.png),
            linear-gradient(56deg, #002a4c 76%, #e30613 100%)!important;
        width: 100%;
        box-sizing: border-box;
        text-align: center;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        height: 100vh;
    }

    header {
        background-blend-mode: multiply;
        background-image: url(https://www.umss.edu.bo/wp-content/uploads/2021/11/5650360.png),
            linear-gradient(56deg, #002a4c 76%, #e30613 100%)!important;
        width: 100%;
        box-sizing: border-box;
        text-align: center;
        color: white;
        padding: 10px; /* Reducimos el relleno para reducir la altura del encabezado */
        height: 3cm; /* Establecemos la altura del encabezado */
    }

    h1 {
        margin: 0; /* Eliminamos el margen predeterminado del h1 */
        font-size: 20px; /* Ajustamos el tamaño del texto */
        color: #ede6e6;
    }

    img {
        max-width: 100%;
        height: auto;
        display: block;
        margin: 0 auto;
    }

        /* Estilos para los botones */
        .buttons-container {
            text-align: center;
        }

        .login-btn,
        .signup-btn {
            padding: 10px 20px;
            font-size: 18px;
            margin: 10px;
            cursor: pointer;
            background-color: #9bc1bc;
            color: #28324b;
            border: none;
            border-radius: 5px;
        }

        .head {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px; /* Añadimos relleno al contenedor principal */
        }

        .logo a {
            color: #white;
            text-decoration: none;
            font-size: 20px;
        }

        .navbar {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .navbar li {
        display: inline-block;
        margin-right: 3.3cm; /* Ajusta el espacio entre elementos del navbar */
    }

    .navbar a {
        text-decoration: none;
        color: white;
        font-size: 16px;
    }

    </style>
</head>

<body>
<header>
        <h1 style="color: #ede6e6;">PROYECTO DE TALLER DE SIMULACION DE SISTEMAS-Oficina 4</h1>
        <img src="imagenes/logo redondo.png" style = "max-height: 100px;">
    </header>
    <div class="head">
        
        <nav class="navbar">
            <li><a href="comp_inicio/AcercaDeNosotros.html">Acerca de Nosotros</a></li>
            <li><a href="comp_inicio/politicaDePrivacidad.html">Politica de Privacidad</a></li>
            <li><a href="comp_inicio/Ayuda.html">Centro de Ayuda</a></li>
            <li><a href="acciones.php">Acciones</a></li>
        </nav>
    </div>

    <!-- Agregar una imagen -->
    <img src="imagenes/inversiones.jpg" alt="Descripción de la imagen" style="height: 11.3cm; width: 35cm;">


</body>

</html>
