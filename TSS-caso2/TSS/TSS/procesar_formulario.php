<?php

// Conexión a la base de datos (reemplazar con tus propios datos)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "caso2";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Recibir datos del formulario
$nombreCompleto = $_POST['nombreCompleto'];
$correoElectronico = $_POST['correoElectronico'];
$edad = $_POST['edad'];
$experienciaInversion = $_POST['experienciaInversion'];
$toleranciaRiesgo = $_POST['toleranciaRiesgo'];
$conocimientosFinancieros = isset($_POST['conocimientosFinancieros']) ? 1 : 0; // Convertir a 1 o 0
$objetivosCortoPlazo = $_POST['objetivosCortoPlazo'];
$objetivosLargoPlazo = $_POST['objetivosLargoPlazo'];
$cantidadDinero = $_POST['cantidadDinero'];
$activosInteresados = implode(", ", $_POST['activosInteresados']);
$plazoInversion = $_POST['plazoInversion'];
$ingresosMensuales = $_POST['ingresosMensuales'];
$gastosMensuales = $_POST['gastosMensuales'];
$deudasExistentes = $_POST['deudasExistentes'];
$conoceNegocio = isset($_POST['conoceNegocio']) ? 1 : 0; // Convertir a 1 o 0
$investigadoIndustria = isset($_POST['investigadoIndustria']) ? 1 : 0; // Convertir a 1 o 0
$comentariosAdicionales = $_POST['comentariosAdicionales'];
$mediaI = $_POST['mediaI'];
$desviacionEI = $_POST['desviacionEI'];
$flujoNetoPeriodoT = $_POST['flujoNetoPeriodoT'];
$mediaF = $_POST['mediaF'];
$desviacionEF = $_POST['desviacionEF'];

// Insertar datos en la base de datos
$sql = "INSERT INTO formularioinversion (
    nombreCompleto, 
    correoElectronico, 
    edad, 
    experienciaInversion, 
    toleranciaRiesgo, 
    conocimientosFinancieros, 
    objetivosCortoPlazo, 
    objetivosLargoPlazo, 
    cantidadDinero, 
    mediaI, 
    desviacionEI, 
    activosInteresados, 
    plazoInversion, 
    ingresosMensuales, 
    gastosMensuales, 
    deudasExistentes, 
    conoceNegocio, 
    investigadoIndustria, 
    comentariosAdicionales,
    flujoNetoPeriodoT,
    mediaF, 
    desviacionEF
) VALUES (
    '$nombreCompleto', 
    '$correoElectronico', 
    $edad, 
    '$experienciaInversion', 
    '$toleranciaRiesgo', 
    $conocimientosFinancieros, 
    '$objetivosCortoPlazo', 
    '$objetivosLargoPlazo', 
    $cantidadDinero, 
    $mediaI, 
    $desviacionEI, 
    '$activosInteresados', 
    $plazoInversion, 
    $ingresosMensuales, 
    $gastosMensuales, 
    $deudasExistentes, 
    $conoceNegocio, 
    $investigadoIndustria, 
    '$comentariosAdicionales',
    $flujoNetoPeriodoT,
    $mediaF, 
    $desviacionEF
)";

if ($conn->query($sql) === TRUE) {
    // Mostrar los datos ingresados en una tabla
    echo "<h2>Datos Ingresados:</h2>";
    echo "<table border='1'>";
    echo "<tr><td>Nombre Completo:</td><td>$nombreCompleto</td></tr>";
    echo "<tr><td>Correo Electrónico:</td><td>$correoElectronico</td></tr>";
    echo "<tr><td>Edad:</td><td>$edad</td></tr>";
    echo "<tr><td>Experiencia en inversiones:</td><td>$experienciaInversion</td></tr>";
    echo "<tr><td>Nivel de tolerancia al riesgo:</td><td>$toleranciaRiesgo</td></tr>";
    echo "<tr><td>Conocimientos financieros:</td><td>$conocimientosFinancieros</td></tr>";
    echo "<tr><td>Objetivos a corto plazo:</td><td>$objetivosCortoPlazo</td></tr>";
    echo "<tr><td>Objetivos a largo plazo:</td><td>$objetivosLargoPlazo</td></tr>";
    echo "<tr><td>Cantidad de dinero disponible:</td><td>$cantidadDinero</td></tr>";
    echo "<tr><td>Media I:</td><td>$mediaI</td></tr>";
    echo "<tr><td>Desviación EI:</td><td>$desviacionEI</td></tr>";
    echo "<tr><td>Activos en los que está interesado:</td><td>$activosInteresados</td></tr>";
    echo "<tr><td>Plazo de inversión preferido:</td><td>$plazoInversion</td></tr>";
    echo "<tr><td>Ingresos mensuales:</td><td>$ingresosMensuales</td></tr>";
    echo "<tr><td>Gastos mensuales:</td><td>$gastosMensuales</td></tr>";
    echo "<tr><td>Deudas existentes:</td><td>$deudasExistentes</td></tr>";
    echo "<tr><td>¿Conoce el negocio?</td><td>$conoceNegocio</td></tr>";
    echo "<tr><td>¿Ha investigado sobre la industria?</td><td>$investigadoIndustria</td></tr>";
    echo "<tr><td>Comentarios adicionales:</td><td>$comentariosAdicionales</td></tr>";
    echo "<tr><td>Media F:</td><td>$mediaF</td></tr>";
    echo "<tr><td>Desviación EF:</td><td>$desviacionEF</td></tr>";
    echo "</table>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Cerrar la conexión
$conn->close();

?>



