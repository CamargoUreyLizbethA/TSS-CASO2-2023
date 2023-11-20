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
            margin: 0;
            padding: 0;
            overflow: hidden; /* Evita barras de desplazamiento */
            position: relative; /* Asegura que los elementos absolutos se posicionen en relación con el cuerpo */
        }

        /* Estilos para la imagen */
        img {
            width: 100%;
            height: 100%;
            object-fit: cover; /* Ajusta la imagen manteniendo su relación de aspecto y cubriendo completamente el contenedor */
        }

        /* Estilos para los botones */
        .buttons-container {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
        }

        .login-btn,
        .signup-btn {
            padding: 10px 20px;
            font-size: 18px;
            margin: 10px;
            cursor: pointer;
            background-color: #3498db;
            color: #fff;
            border: none;
            border-radius: 5px;
        }
    </style>
</head>

<body>
    <div class="head">
        <div class="logo">
            <a href="#">Logo</a>
        </div>
        <nav class="navbar">
            <li><a href="comp_inicio/AcercaDeNosotros.html">Acerca de Nosotros</a></li>
            <li><a href="comp_inicio/politicaDePrivacidad.html">Politica de Privacidad</a></li>
            <li><a href="comp_inicio/Ayuda.html">Centro de Ayuda</a></li>
            <li><a href="inversionCaso2.html">Inversion Caso 2</a></li>
        </nav>
    </div>

    <!-- Agregar una imagen -->
    <img src="imagenes/inversiones.jpg" alt="Descripción de la imagen">

    <!-- Botones -->
    <div class="buttons-container">
        <button class="login-btn" href="auth/iniciarSesion.php">Iniciar sesión</button>
        <button class="signup-btn">Crear cuenta</button>
    </div>
</body>

</html>
