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
$conocimientosFinancieros = $_POST['conocimientosFinancieros'];
$objetivosCortoPlazo = $_POST['objetivosCortoPlazo'];
$objetivosLargoPlazo = $_POST['objetivosLargoPlazo'];
$cantidadDinero = $_POST['cantidadDinero'];
$activosInteresados = implode(", ", $_POST['activosInteresados']);
$plazoInversion = $_POST['plazoInversion'];
$ingresosMensuales = $_POST['ingresosMensuales'];
$gastosMensuales = $_POST['gastosMensuales'];
$deudasExistentes = $_POST['deudasExistentes'];
$conoceNegocio = $_POST['conoceNegocio'];
$investigadoIndustria = $_POST['investigadoIndustria'];
$comentariosAdicionales = $_POST['comentariosAdicionales'];

// Insertar datos en la base de datos
$sql = "INSERT INTO formularioInversion (
    nombreCompleto, 
    correoElectronico, 
    edad, 
    experienciaInversion, 
    toleranciaRiesgo, 
    conocimientosFinancieros, 
    objetivosCortoPlazo, 
    objetivosLargoPlazo, 
    cantidadDinero, 
    activosInteresados, 
    plazoInversion, 
    ingresosMensuales, 
    gastosMensuales, 
    deudasExistentes, 
    conoceNegocio, 
    investigadoIndustria, 
    comentariosAdicionales
) VALUES (
    '$nombreCompleto', 
    '$correoElectronico', 
    $edad, 
    '$experienciaInversion', 
    '$toleranciaRiesgo', 
    '$conocimientosFinancieros', 
    '$objetivosCortoPlazo', 
    '$objetivosLargoPlazo', 
    $cantidadDinero, 
    '$activosInteresados', 
    $plazoInversion, 
    $ingresosMensuales, 
    $gastosMensuales, 
    $deudasExistentes, 
    '$conoceNegocio', 
    '$investigadoIndustria', 
    '$comentariosAdicionales'
)";

if ($conn->query($sql) === TRUE) {
    echo "Formulario enviado exitosamente";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Cerrar la conexión
$conn->close();

?>


