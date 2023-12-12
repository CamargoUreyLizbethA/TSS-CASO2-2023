<?php
// Incluir el archivo de conexión
include 'conexion.php';

// Recuperar datos del formulario
$nombreCompleto = $_POST['nombreCompleto'];
$correoElectronico = $_POST['correoElectronico'];
$edad = $_POST['edad'];
$experienciaInversion = $_POST['experienciaInversion'];
$toleranciaRiesgo = $_POST['toleranciaRiesgo'];
$conocimientosFinancieros = $_POST['conocimientosFinancieros'];
$objetivosCortoPlazo = $_POST['objetivosCortoPlazo'];
$objetivosLargoPlazo = $_POST['objetivosLargoPlazo'];
$activosInteresados = implode(", ", $_POST['activosInteresados']);
$plazoInversion = $_POST['plazoInversion'];
$ingresosMensuales = $_POST['ingresosMensuales'];
$gastosMensuales = $_POST['gastosMensuales'];
$deudasExistentes = $_POST['deudasExistentes'];
$conoceNegocio = $_POST['conoceNegocio'];
$investigadoIndustria = $_POST['investigadoIndustria'];
$comentariosAdicionales = $_POST['comentariosAdicionales'];
$mediaI = $_POST['mediaI'];
$desviacionEI = $_POST['desviacionEI'];
$mediaF = $_POST['mediaF'];
$desviacionEF = $_POST['desviacionEF'];

// Preparar la consulta SQL para la inserción
$sql = "INSERT INTO formulario (nombreCompleto, correoElectronico, edad, experienciaInversion, toleranciaRiesgo, conocimientosFinancieros, objetivosCortoPlazo, objetivosLargoPlazo,activosInteresados, plazoInversion, ingresosMensuales, gastosMensuales, deudasExistentes, conoceNegocio, investigadoIndustria, comentariosAdicionales, mediaI, desviacionEI, mediaF, desviacionEF) 
        VALUES ('$nombreCompleto', '$correoElectronico', '$edad', '$experienciaInversion', '$toleranciaRiesgo', '$conocimientosFinancieros', '$objetivosCortoPlazo', '$objetivosLargoPlazo','$activosInteresados', '$plazoInversion', '$ingresosMensuales', '$gastosMensuales', '$deudasExistentes', '$conoceNegocio', '$investigadoIndustria', '$comentariosAdicionales', '$mediaI', '$desviacionEI', '$mediaF', '$desviacionEF')";

// Ejecutar la consulta
if ($conn->query($sql) === TRUE) {
    // Redirigir después de una inserción exitosa
    header("Location: formulario_exitoso.php");
    exit();
} else {
    // Imprimir mensaje de error en caso de problemas con la inserción
    echo "Error al insertar datos: " . $conn->error;
}

// Cerrar la conexión
$conn->close();
?>

