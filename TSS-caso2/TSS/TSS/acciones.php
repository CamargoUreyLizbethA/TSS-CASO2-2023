<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Agrega la siguiente línea para incluir Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-blend-mode: multiply;
            background-image: url(https://www.umss.edu.bo/wp-content/uploads/2021/11/5650360.png),
                linear-gradient(56deg, #002a4c 76%, #e30613 100%)!important;
                font-family:Arial, Helvetica, sans-serif;
            margin: 0;
            padding: 0;
            }
            .container {
            margin-top: 2cm;
        }
        .card {
            background-color: #181c29;
            color: white;
            border-radius: 8px;
            margin: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 10cm; /* Ancho de la tarjeta */
            height: 12cm; /* Largo de la tarjeta */
            overflow: hidden; /* Para recortar las imágenes si son más grandes */
        }

        .card a {
            text-decoration: none;
            color: white;
            display: flex;
            flex-direction: column;
            height: 100%;
        }

        .card h2 {
            font-size: 20px;
            margin-bottom: 10px;
        }

        .card img {
            width: 100%;
            height: 100%;
            object-fit: cover; /* Ajusta la imagen al tamaño del contenedor sin distorsionar */
            border-radius: 8px;
        }
        .header {
            height: 2cm;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 20px;
            background-color: #181c29;
            color: white;
        }

        .logo {
            height: 100%;
            margin-right: 20px;
        }

        .logo img {
            height: 100%;
            width: auto;
        }

        .nav-links {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
        }

        .nav-links li {
            margin-right: 20px;
        }

        .nav-links a {
            text-decoration: none;
            color: white;
            font-size: 20px;
            font-weight: bold;
        }

        .header-btn {
            background-color: #e30613;
            color: white;
            border: none;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
        }
    </style>
    <title>Header</title>
</head>
<body>

<div class="header">
    <div class="logo">
        <!-- Agrega aquí la imagen de tu logo -->
        <img src="imagenes/logoRedondo.png" alt="Logo">
    </div>
    <ul class="nav-links">
        <li><a href="comp_inicio/AcercaDeNosotros.html">Acerca de Nosotros</a></li>
        <li><a href="comp_inicio/politicaDePrivacidad.html">Politica de Privacidad</a></li>
        <li><a href="comp_inicio/Ayuda.html">Centro de Ayuda</a></li>

    </ul>
    <a class="header-btn" href="index.php">Atrás</a>
</div>
<div class="container">
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <!-- Tarjeta "Ejemplo de Simulación" -->
        <div class="col">
            <div class="card">
                <a href="inversionCaso2.html">
                    <h2>Ejemplo de Simulación</h2>
                    <img src="imagenes/ejemplo.jpg" alt="Imagen Ejemplo de Simulación">
                </a>
            </div>
        </div>
        <!-- Tarjeta "Simular" -->
        <div class="col">
            <div class="card">
            <a href="lista_formularios.php">
                    <h2>Formulario Para Simular</h2>
                    <img src="imagenes/simulacion.jpg" alt="Imagen Simular">
                </a>
            </div>
        </div>
        <!-- Tarjeta "Aprender" -->
        <div class="col">
            <div class="card">
                <a href="aprender.php">
                    <h2>Aprender Sobre La Aplicacion</h2>
                    <img src="imagenes/aprenderS.jpg" alt="Imagen Aprender">
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Agrega la siguiente línea para incluir Bootstrap JS y Popper.js -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>

