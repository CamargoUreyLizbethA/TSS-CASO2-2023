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
    echo "<tr><td>Flujo Neto Periodo T:</td><td>$flujoNetoPeriodoT</td></tr>";
    echo "<tr><td>Media F:</td><td>$mediaF</td></tr>";
    echo "<tr><td>Desviación EF:</td><td>$desviacionEF</td></tr>";
    echo "</table>";
} else {
    echo "Error al insertar en la base de datos: " . $sql . "<br>" . $conn->error;

}

// Cerrar la conexión
$conn->close();

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados de Simulación de Inversiones</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-blend-mode: multiply;
            background-image: url(https://www.umss.edu.bo/wp-content/uploads/2021/11/5650360.png),
                linear-gradient(56deg, #002a4c 76%, #e30613 100%)!important;
    color: white;
        }

        header {
            text-align: center;
            background-color: #333;
            color: white;
            padding: 1em;
        }

        main {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        table-container {
            width: 10cm;
            margin: 0 auto; /* Esto centrará el contenedor de la tabla */
            overflow-x: auto; /* Añadido para permitir desplazamiento horizontal si es necesario */
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 10px;
            text-align: center;
            border: 1px solid #ddd;
        }

        th {
            background-color: #333;
            color: white;
        }

        h2 {
            text-align: center;
            color: white;
        }
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
      for ($i = 1; $i <= $plazoInversion; $i++) {
          $inversionInicial = -1 * generarNumeroAleatorioTriangular($mediaI, $desviacionEI);
          $flujoNeto = generarNumeroAleatorioTriangular($mediaF, $desviacionEF);
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
  
  function generarNumeroAleatorioTriangular($media, $desviacion) {
      // Generar un número aleatorio según la distribución triangular
      $u = mt_rand() / mt_getrandmax();
      $parte1 = $media - $desviacion;
      $parte2 = $media + $desviacion;
      return $parte1 + ($parte2 - $parte1) * $u;
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
    for ($i = 1; $i <= count($escenarios[0]) - 6; $i++) {
        echo "<th>Flujo de Caja Año $i</th>";
    }
    echo "<th>TIR</th>";
    echo "<th>TREMA</th><th>Impuestos</th><th>Conclusión</th></tr>";

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


