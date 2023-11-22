<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularios de Inversión</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #e6ebe0;
            margin: 0;
            padding: 0;
        }
        header {
            height: 2cm;
            background-color: #181c29;
            color: #9bc1bc;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 20px;
        }
        h1 {
            text-align: center;
            color: #28324b;
        }

        button {
            background-color: #9bc1bc;
            color: #28324b;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            margin: 20px;
        }

        

        table {
            max-width: 600px;
            margin: 20px auto;
            border-collapse: collapse;
            width: 100%;
            background-color: #9bc1bc; /* Fondo rojo para la tabla */
            margin-top: 20px; /* Margen superior */
            margin-bottom: 20px; /* Margen inferior */
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #181c29;
            color: #fff;
        }

        a {
            text-decoration: none;
            color: #28324b;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
<header>
        <h1>Estrategas</h1>
        <button onclick="goBack()">Atrás</button>
    </header>
<h1>Formularios de Inversión</h1>

<!-- Botón para ir a la página del formulario -->
<form action="formulario.php" method="get">
    <button type="submit">Llenar formulario</button>
</form>
<!-- Mostrar la tabla con los formularios existentes -->
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "caso2";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$sql = "SELECT * FROM formularioInversion";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1'>
        <tr>
            <th>ID</th>
            <th>Nombre Completo</th>
            <th>Correo Electrónico</th>
            <th>Edad</th>
            <th>Cantidad Dinero</th>
            <th>Activos Interesados</th>
            <th>Plazo Inversion</th>
            <th>Acciones</th>


            <!-- Agrega más columnas según sea necesario -->
        </tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>
            <td>" . $row["id"] . "</td>
            <td>" . $row["nombreCompleto"] . "</td>
            <td>" . $row["correoElectronico"] . "</td>
            <td>" . $row["edad"] . "</td>
            <td>" . $row["cantidadDinero"] . "</td>
            <td>" . $row["activosInteresados"] . "</td>
            <td>" . $row["plazoInversion"] . "</td>
            <td><a href='ver_formulario.php?id=" . $row["id"] . "'>Detalles De Simulacion</a></td>

            <!-- Agrega más columnas según sea necesario -->
        </tr>";
    }

    echo "</table>";
} else {
    echo "No hay formularios registrados.";
}

$conn->close();
?>
 <script>
        function goBack() {
            window.history.back();
        }
    </script>
</body>
</html>
