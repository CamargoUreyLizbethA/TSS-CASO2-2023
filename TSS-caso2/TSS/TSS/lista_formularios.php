<?php
include 'conexion.php';

$sql = "SELECT * FROM formulario";
$result = $conn->query($sql);

$conn->close();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Formularios</title>
    <style>
           body {
            background-blend-mode: multiply;
            background-image: url(https://www.umss.edu.bo/wp-content/uploads/2021/11/5650360.png),
                linear-gradient(56deg, #002a4c 76%, #e30613 100%)!important;
            margin: 0; /* Elimina el margen predeterminado del body */
            text-align: center; /* Centra el contenido del body */

        }

        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px; /* Ajusta el espacio interno según sea necesario */
            background-color: #181c29; /* Cambia el color de fondo del encabezado */
        }

        header img {
            width: 50px; /* Ajusta el tamaño del logo según sea necesario */
            margin-right: 10px; /* Ajusta el espacio a la derecha del logo según sea necesario */
        }

        header h2 {
            font-size: 24px;
            color: white;
            margin: 0; /* Elimina el margen predeterminado del h2 */
        }
</style>
</head>
<body>
<header>
    <img src="imagenes/logo redondo.png" alt="Logo"> <!-- Reemplaza "ruta_del_logo.png" con la ruta real de tu logo -->
    <h2>Detalles del Formulario Sobre Decisiones de Inversiones</h2>
    <a href="acciones.php"><button>Atrás</button></a>
</header>
    <h2>Lista de Formularios</h2>

    <?php
   // ... (Consulta SQL)

if ($result->num_rows > 0) {
    echo "<table border='1'>";
    echo "<tr><th>ID</th><th>Nombre Completo</th><th>Correo Electrónico</th><th>Acciones</th></tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["nombreCompleto"] . "</td>";
        echo "<td>" . $row["correoElectronico"] . "</td>";
        echo "<td><a href='ver_detalle.php?id=" . $row["id"] . "'>Ver más detalles</a></td>";
        // Agrega más campos según sea necesario
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "No hay formularios registrados.";
}

    ?>
</body>
</html>