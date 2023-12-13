<?php
include 'conexion.php';
// Obtener el ID del formulario desde la URL
$formulario_id = $_GET['id'];
// Consulta SQL para obtener los detalles del formulario específico
$sql_detalle = "SELECT * FROM formulario WHERE id = $formulario_id";
$result_detalle = $conn->query($sql_detalle);
$conn->close();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <title>Detalles del Formulario</title>

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
        /* Estilos para centrar la tabla */
        .centrar-tabla {
            margin: 20px auto;
            width: 50%;
        }

        /* Estilos para las tablas */
        table {
            width: 100%;
            
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }
        td {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
<header>
    <img src="imagenes/logoRedondo.png" alt="Logo"> <!-- Reemplaza "ruta_del_logo.png" con la ruta real de tu logo -->
    <h2>Detalles del Formulario Sobre Decisiones de Inversiones</h2>
<a href="lista_formularios.php"><button>Atrás</button></a>
</header>
<div id="contenido-pdf">

    <h2>Detalles del Formulario</h2>

    <?php
    if ($result_detalle->num_rows > 0) {
        $row_detalle = $result_detalle->fetch_assoc();

        // Primera tabla
        echo "<div class='centrar-tabla'>";
        echo "<table>";
        foreach ($row_detalle as $campo => $valor) {
            echo "<tr>";
            echo "<th>$campo</th>";
            echo "<td>$valor</td>";
            echo "</tr>";
        }
        echo "</table>";
        echo "</div>";
        
        // Segunda tabla para escenarios, inversión inicial y flujo neto
        echo "<div class='tabla'>";
        echo "<h3>Simulación de Escenarios de Inversión</h3>";
        echo "<table>";
        echo "<tr><th>Escenario</th><th>Inversión Inicial</th><th>Flujo de Caja Neto del Año 1</th><th>Flujo de Caja Neto del Año 2</th><th>Flujo de Caja Neto del Año 3</th><th>Flujo de Caja Neto del Año 4</th><th>Flujo de Caja Neto del Año 5</th><th>TIR</th><th>Conclusion</th></tr>";

        // Obtener datos necesarios del formulario
        $mediaI = $row_detalle["mediaI"];
        $desviacionEI = $row_detalle["desviacionEI"];
        $mediaF = $row_detalle["mediaF"];
        $desviacionEF = $row_detalle["desviacionEF"];
        $numEscenarios = $row_detalle["numEscenarios"];

        
        for ($i = 1; $i <= $numEscenarios; $i++) {
            $inversionInicial = calcularDistribucionTriangular($mediaI, $mediaI - $desviacionEI, $mediaI + $desviacionEI);
            $flujoAnual1 = calcularDistribucionTriangular($mediaF, $mediaF - $desviacionEF, $mediaF + $desviacionEF);
    $flujoAnual2 = calcularDistribucionTriangular($mediaF, $mediaF - $desviacionEF, $mediaF + $desviacionEF);
    $flujoAnual3 = calcularDistribucionTriangular($mediaF, $mediaF - $desviacionEF, $mediaF + $desviacionEF);
    $flujoAnual4 = calcularDistribucionTriangular($mediaF, $mediaF - $desviacionEF, $mediaF + $desviacionEF);
    $flujoAnual5 = calcularDistribucionTriangular($mediaF, $mediaF - $desviacionEF, $mediaF + $desviacionEF);
    // Cálculo del TIR y la conclusión
$flujos = array($inversionInicial, $flujoAnual1, /* ... */);
$tirCalculada = calcularTIRconFET($flujos);
$aprobado = $tirCalculada >= 30 ? "APROBADO" : "NO";
    // Redondear valores a dos decimales
    $inversionInicial = round($inversionInicial, 2);
    $flujoAnual1 = round($flujoAnual1, 2);
    $flujoAnual2 = round($flujoAnual2, 2);
    $flujoAnual3 = round($flujoAnual3, 2);
    $flujoAnual4 = round($flujoAnual4, 2);
    $flujoAnual5 = round($flujoAnual5, 2);
    $tirCalculada = round($tirCalculada, 2);

    // Imprimir la fila con todos los resultados
    echo "<tr>
    <td>$i</td>
    <td>$inversionInicial</td>
    <td>$flujoAnual1</td>
    <td>$flujoAnual2</td>
    <td>$flujoAnual3</td>
    <td>$flujoAnual4</td>
    <td>$flujoAnual5</td>
    <td>$tirCalculada%</td>
    <td>$aprobado</td>
</tr>";
}

        echo "</table>";
        echo "</div>";
        echo "<button onclick=\"generarPDF()\" style=\"background-color: #a52019; color: white; border: none; padding: 8px; cursor: pointer;\"><i class=\"fas fa-file-pdf\"></i> Generar PDF</button>";


    } else {
        echo "No se encontraron detalles para este formulario.";
    }

    function calcularDistribucionTriangular($media, $min, $max) {
        $u = mt_rand() / mt_getrandmax();
        $c = ($media - $min) / ($max - $min);
        if ($u <= $c) {
            return $min + sqrt($u * ($max - $min) * ($media - $min));
        } else {
            return $max - sqrt((1 - $u) * ($max - $min) * ($max - $media));
        }
    }
    function calcularTIR() {
        $escenariosAprobados = 0;
        $escenariosNoAprobados = 0;
        $filas = $_POST['filas']; // Recibir datos del formulario (asegúrate de enviar 'filas' desde tu formulario)
        $tirArray = []; // Initialize tirArray
    
        for ($i = 1; $i < count($filas); $i++) {
            $flujos = [
                floatval($filas[$i][1]),
                floatval($filas[$i][2]),
                floatval($filas[$i][3]),
                floatval($filas[$i][4]),
                floatval($filas[$i][5]),
            ];
    
            $tirCalculada = calcularTIRconFET($flujos);
            $filas[$i][7] = number_format($tirCalculada, 2) . "%";
            $tirArray[] = $tirCalculada; // Add TIR value to tirArray
    
            $aprobado = $tirCalculada >= 30 ? "APROBADO" : "NO";
            $filas[$i][8] = $aprobado;
    
            if ($aprobado === "APROBADO") {
                $escenariosAprobados++;
            } else {
                $escenariosNoAprobados++;
            }
        }
    }
    function calcularTIRconFET($flujos) {
        $inversionInicial = $flujos[0];
        $flujosNetos = array_slice($flujos, 1);
        $factorRecuperacion = 0;
        $acumulado = 0;
    
        for ($i = 0; $i < count($flujosNetos); $i++) {
            $acumulado += $flujosNetos[$i];
            $factorRecuperacion += $acumulado / pow(1 + $i, 2);
        }
    
        return (($inversionInicial / $factorRecuperacion - 1) * 100)/3;
    }
    ?>
        <canvas id="grafico" width="400" height="200"></canvas>

   <script>

    function generarPDF() {
        const element = document.getElementById("contenido-pdf");

        // Esperar un breve momento para que las operaciones asíncronas se completen
        setTimeout(function () {
            const pdfOptions = {
                margin: 10,
                filename: 'formulario_decisiones_inversion.pdf',
                image: { type: 'jpeg', quality: 0.98 },
                html2canvas: { scale: 2 },
                jsPDF: { unit: 'mm', format: 'a4', orientation: 'portrait' }
            };

            // Agregar estilos específicos para el PDF
            const pdfStyles = `
                body {
                    background-color: #002a4c;
                }

                p {
                    color: black;
                    text-align: center;
                    font-size: 22px;
                }

                table {
                    border: 1px solid #fff;
                }

                th, td {
                    color: black;
                    background-color: #002a4c;
                    border: 1px solid #181c29;
                    text-align: left;
                    padding: 8px;
                }
            `;

            // Agregar los estilos al documento antes de generar el PDF
            const styleElement = document.createElement('style');
            styleElement.innerHTML = pdfStyles;
            document.head.appendChild(styleElement);

            // Generar el PDF
            html2pdf(element, pdfOptions);

            // Eliminar los estilos después de generar el PDF para no afectar la presentación en pantalla
            styleElement.parentNode.removeChild(styleElement);
        }, 500);
    }
    document.addEventListener('DOMContentLoaded', function () {
        // Obtener los datos necesarios del formulario
        var labels = [];
        var tirData = [];

        <?php
        for ($i = 1; $i <= $numEscenarios; $i++) {
            $inversionInicial = calcularDistribucionTriangular($mediaI, $mediaI - $desviacionEI, $mediaI + $desviacionEI);
            $flujoAnual1 = calcularDistribucionTriangular($mediaF, $mediaF - $desviacionEF, $mediaF + $desviacionEF);
            $tirCalculada = calcularTIRconFET([$inversionInicial, $flujoAnual1, /* ... */]);

            // Redondear valores a dos decimales
            $tirCalculada = round($tirCalculada, 2);

            echo "labels.push('Escenario $i');";
            echo "tirData.push($tirCalculada);";
        }
        ?>

        // Crear el contexto del gráfico
        var ctx = document.getElementById('grafico').getContext('2d');

        // Crear el gráfico de barras
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: labels,
                datasets: [
                    {
                        label: 'TIR',
                        backgroundColor: 'rgba(255, 205, 86, 0.5)',
                        borderColor: 'rgba(255, 205, 86, 1)',
                        borderWidth: 1,
                        data: tirData,
                    },
                ],
            },
            options: {
                scales: {
                    x: {
                        beginAtZero: true,
                    },
                    y: {
                        beginAtZero: true,
                    },
                },
            },
        });
    });
</script>
       </div>

</body>
</html>


