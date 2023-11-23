<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados de Simulación de Inversiones</title>
    <style>
        /* Tu estilo CSS aquí */
    </style>
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Procesar los datos del formulario
    $nombreCompleto = $_POST["nombreCompleto"];
    $correoElectronico = $_POST["correoElectronico"];
    $edad = $_POST["edad"];
    // ... (otros campos del formulario)

    $cantidadDinero = $_POST["cantidadDinero"];
    $mediaI = $_POST["mediaI"];
    $desviacionEI = $_POST["desviacionEI"];
    $plazoInversion = $_POST["plazoInversion"];
    $mediaF = $_POST["mediaF"];
    $desviacionEF = $_POST["desviacionEF"];

    // Realizar la simulación de inversiones
    $escenarios = [];
    $inversionInicial = ($mediaI + $desviacionEI) / 2; // Inversión inicial entre la media y la desviación
    for ($i = 1; $i <= $plazoInversion; $i++) {
        $flujoNeto = $mediaF + $desviacionEF; // Flujo de caja neto con la media y la desviación
        $escenarios[] = [
            'escenario' => $i,
            'inversionInicial' => $inversionInicial,
            "flujoCajaAnio$i" => $flujoNeto,
            'tir' => calcularTIR($inversionInicial, $flujoNeto),
            'trema' => calcularTREMA($inversionInicial, $flujoNeto),
            'impuestos' => calcularImpuestos($inversionInicial, $flujoNeto),
            'conclusion' => ($flujoNeto > 0) ? 'Aceptar' : 'Rechazar'
        ];
    }

    // Mostrar la tabla con los resultados
    mostrarTablaResultados($escenarios);
} else {
    echo "Error: No se recibieron datos del formulario.";
}

function calcularTIR($inversionInicial, $flujoNeto) {
    // Implementa aquí el cálculo de la TIR
    // (puedes usar funciones o bibliotecas específicas de PHP)
    return 0.1; // Ejemplo: reemplaza con el cálculo real
}

function calcularTREMA($inversionInicial, $flujoNeto) {
    // Implementa aquí el cálculo de la TREMA
    // (puedes usar funciones o bibliotecas específicas de PHP)
    return 0.08; // Ejemplo: reemplaza con el cálculo real
}

function calcularImpuestos($inversionInicial, $flujoNeto) {
    // Implementa aquí el cálculo de impuestos
    // (puedes usar funciones o bibliotecas específicas de PHP)
    return $flujoNeto * 0.3; // Ejemplo: reemplaza con el cálculo real
}

function mostrarTablaResultados($escenarios) {
    echo "<h2>Resultados de Simulación de Inversiones</h2>";
    echo "<table border='1'>";
    echo "<tr><th>Escenario</th><th>Inversión Inicial</th>";
    for ($i = 1; $i <= count($escenarios[0]) - 4; $i++) {
        echo "<th>Flujo de Caja Año $i</th>";
    }
    echo "<th>TIR</th><th>TREMA</th><th>Impuestos</th><th>Conclusión</th></tr>";

    foreach ($escenarios as $escenario) {
        echo "<tr>";
        foreach ($escenario as $valor) {
            echo "<td>$valor</td>";
        }
        echo "</tr>";
    }

    echo "</table>";
}
?>

</body>
</html>
