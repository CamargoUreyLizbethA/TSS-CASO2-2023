<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" async
      src="https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.7/MathJax.js?config=TeX-MML-AM_CHTML">
    </script>
    <style>
        body {
            background-blend-mode: multiply;
            background-image: url(https://www.umss.edu.bo/wp-content/uploads/2021/11/5650360.png),
                linear-gradient(56deg, #002a4c 76%, #e30613 100%)!important;
            margin: 0; /* Elimina el margen predeterminado del body */

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

        button {
            background-color: #e30613;
            color: white;
            border: none;
            padding: 10px;
            cursor: pointer;
        }

        h2 {
            font-size: 24px;
            color: white;
            margin-left: 3cm;
            margin-right: 3cm;
            
        }
        p{
            color:white;
            margin-left: 3cm;
            margin-right: 3cm;
            text-align: justify; /* Centra el texto */
            font-size: 18px; /* Tamaño de letra aumentado */
        }
        table {
            font-family: Arial, sans-serif;
            border-collapse: collapse;
            width: 100%; /* Ajusta el ancho de la tabla según sea necesario */
            margin: 20px auto; /* Centra la tabla horizontalmente y agrega espacio arriba/abajo */
        }

        th, td {
            border: 1px solid #181c29;
            color: white;
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #181c29;
        }

        /* Estilos específicos para la tabla */
        table.small-table {
            width: 40%; /* Ajusta el ancho de la tabla específica según sea necesario */
        }

        table.small-table td:nth-child(1) {
            background-color: #002a4c; /* Fondo azul para la primera columna */
        }

        table.small-table td:nth-child(2) {
            background-color: #1f8dd6; /* Fondo celeste para la segunda columna */
        }

        .formula-container {
            background-color: #181c29;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            margin: 20px;
        }

        .math {
            color:#ddd;
            
        }
        ul {
            
            color:while;

        }

        li {
            margin-bottom: 10px;
            margin-left: 3cm;
            margin-right: 3cm;
            color:while;
        }

        strong {
            color: white; /* Hace que el texto en negrita sea blanco */
        }
    </style>
    <title>Simulación de Decisiones sobre Inversiones</title>
</head>
<body>

<header>
    <img src="imagenes/logoRedondo.png" alt="Logo"> <!-- Reemplaza "ruta_del_logo.png" con la ruta real de tu logo -->
    <h2>Glosario Sobre El Caso De Estudio</h2>
    <button onclick="goBack()">Atrás</button>
</header>
</head>
<body>
           <main class="main">
            <div class="container">
    <h2>Distribución Triangular</h2>
    <p>La distribución triangular es una función de densidad de probabilidad que se utiliza comúnmente en simulación y modelado estadístico para representar la incertidumbre en un parámetro dado. Esta distribución es llamada "triangular" porque su forma gráfica en un histograma se asemeja a un triángulo.</p>
    <p>En una distribución triangular, se especifican tres valores principales:</p>
    <ul>
        <li><strong>Valor más bajo (a):</strong>Es el valor mínimo del parametro.</li>
        <li><strong>Valor más alto (b):</strong> Es el valor máximo que puede tomar el parametro</li>
        <li><strong>Moda (b) </strong> El valor más probable o el valor que tiene la mayor probabilidad de ocurrencia.</li>
    </ul>
    <p>La función de densidad de probabilidad de la distribución triangular se define de la siguiente manera:</p>
    <div class="formula-container">
    <div class="math">
    \[
    f(x;a, b, c) = 
    \begin{cases} 
        0 & \text{si } x < a \text{ o } x > b \\
        \frac{2(x-a)}{(b-a)(c-a)} & \text{si } a \leq x < c \\
        \frac{2(b-x)}{(b-a)(b-c)} & \text{si } c \leq x \leq b
    \end{cases}
    \]
</div>
</div>
    <p>
    <strong>a, b, y c:</strong> son los parámetros mencionados anteriormente.<br>
    <strong>x:</strong> es la variable aleatoria.<br><br>

    Esta distribución es útil cuando se tiene información limitada sobre un parámetro y se puede hacer una estimación razonable de los valores mínimo, máximo y más probable. Es comúnmente utilizada en análisis de riesgos y simulaciones Monte Carlo para modelar la variabilidad en un conjunto de datos cuando no se dispone de una distribución precisa. La distribución triangular es fácil de entender y aplicar, lo que la hace práctica en diversas situaciones.
    </p>
    <p>...</p>
    <h2>¿Como estamos adaptando la formula de la distribucion para nuestro caso de estudio?</h2>
    <ul>
                        <li><strong>Para hallar la Inversion Inicial</strong> 
    </ul>
    <p>La formula se estaria adapatando asi para la Inversion Inicial</p>
    <div class="formula-container">
    <div class="math">
    \[ f(x; \text{{mediaInversion}}, \text{{mediaInversion}} - \text{{desviacionInversion}}, \text{{mediaInversion}} + \text{{desviacionInversion}}) = 
\begin{cases} 
0 & \text{si } x < \text{{mediaInversion}} - \text{{desviacionInversion}} \text{ o } x > \text{{mediaInversion}} + \text{{desviacionInversion}} \\
\frac{2(x - (\text{{mediaInversion}} - \text{{desviacionInversion}}))}{2 \cdot \text{{desviacionInversion}}^2} & \text{si } \text{{mediaInversion}} - \text{{desviacionInversion}} \leq x < \text{{mediaInversion}} \\
\frac{2((\text{{mediaInversion}} + \text{{desviacionInversion}}) - x)}{2 \cdot \text{{desviacionInversion}}^2} & \text{si } \text{{mediaInversion}} \leq x \leq \text{{mediaInversion}} + \text{{desviacionInversion}}
\end{cases}
\]
</div>
</div>
<ul>
                        <li><strong>Para hallar el Flujo de Caja Neto de cada año</strong> 
    </ul>
    <p>La formula se estaria adapatando asi para el flujo de neto de cada año:</p>
    <div class="formula-container">
    <div class="math">
    \[ f(x; \text{{mediaFlujo}}, \text{{mediaFlujo}} - \text{{desviacionFlujo}}, \text{{mediaFlujo}} + \text{{desviacionFlujo}}) = 
\begin{cases} 
0 & \text{si } x < \text{{mediaFlujo}} - \text{{desviacionFlujo}} \text{ o } x > \text{{mediaFlujo}} + \text{{desviacionFlujo}} \\
\frac{2(x - (\text{{mediaFlujo}} - \text{{desviacionFlujo}}))}{2 \cdot \text{{desviacionFlujo}}^2} & \text{si } \text{{mediaFlujo}} - \text{{desviacionFlujo}} \leq x < \text{{mediaFlujo}} \\
\frac{2((\text{{mediaFlujo}} + \text{{desviacionFlujo}}) - x)}{2 \cdot \text{{desviacionFlujo}}^2} & \text{si } \text{{mediaFlujo}} \leq x \leq \text{{mediaFlujo}} + \text{{desviacionFlujo}}
\end{cases}
\]
</div>
</div>
    <h2>Tasa Interna de Retorno (TIR)</h2>
    <p>La Tasa Interna de Retorno es la tasa de descuento que hace que el valor presente neto (VPN) de los flujos de efectivo de un proyecto sea igual a cero.</p>
    
    <h2>Inversión Inicial Media y Desviación Estándar</h2>
    <p>La inversión inicial media es el valor promedio esperado de la inversión inicial, mientras que la desviación estándar mide la dispersión de estos valores con respecto a la media.</p>

    <h2>Flujo Neto del Periodo t Media y Desviación Estándar</h2>
    <p>El flujo neto del periodo t es la diferencia entre los ingresos y los egresos en un determinado periodo t. La media y la desviación estándar representan los valores promedio y la variabilidad de estos flujos netos.</p>
    
    <h2>¿Que moneda estamos manejando?</h2>
    <p>La moneda de Bolivia es el boliviano, cuyo código de abreviatura es "BOB" y su símbolo es "Bs" o "Bs.". El boliviano es la unidad monetaria oficial de Bolivia y se utiliza en todas las transacciones económicas del país. Su emisión y regulación están a cargo del Banco Central de Bolivia (BCB).</p>
    
    <script>
    function goBack() {
        history.back();
    }
    </script>
</body>
</html>
