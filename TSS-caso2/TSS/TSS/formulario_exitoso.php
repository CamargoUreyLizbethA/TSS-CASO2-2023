<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Exitoso</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            text-align: center;
            margin: 50px;
        }

        h2 {
            color: #333;
        }

        p {
            color: #666;
        }

        button {
            background-color: #4caf50;
            color: white;
            border: none;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            cursor: pointer;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <h2>¡Gracias por enviar el formulario!</h2>
    <p>Tu información se ha registrado con éxito. Nos pondremos en contacto contigo pronto.</p>
    
    <!-- Botón para redirigir a lista_formularios.php -->
    <button onclick="irAListaFormularios()">Ir a la Lista de Formularios</button>

    <script>
        function irAListaFormularios() {
            // Redireccionar a lista_formularios.php
            window.location.href = 'lista_formularios.php';
        }
    </script>
</body>
</html>

