<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Inversión</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #e6ebe0;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            color: #28324b;
        }

        form {
            max-width: 600px;
            margin: 20px auto;
            background-color: #9bc1bc;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #555;
        }

        input, select, textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="checkbox"] {
            width: auto;
            margin-bottom: 0;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

<h1>Formulario de Inversión</h1>

<form action="procesar_formulario.php" method="post">
    <label for="nombreCompleto">Nombre Completo:</label>
    <input type="text" name="nombreCompleto" required>

    <label for="correoElectronico">Correo Electrónico:</label>
    <input type="email" name="correoElectronico" required>

    <label for="edad">Edad:</label>
    <input type="number" name="edad" required>

    <label for="experienciaInversion">Experiencia en inversiones:</label>
    <select name="experienciaInversion">
        <option value="Novato">Novato</option>
        <option value="Intermedio">Intermedio</option>
        <option value="Experto">Experto</option>
    </select>

    <label for="toleranciaRiesgo">Nivel de tolerancia al riesgo:</label>
    <select name="toleranciaRiesgo">
        <option value="baja">Baja</option>
        <option value="medio">Medio</option>
        <option value="alto">Alto</option>
    </select>

    <label for="conocimientosFinancieros">Conocimientos sobre conceptos financieros básicos:</label>
    <input type="radio" name="conocimientosFinancieros" value="1" required> Sí
    <input type="radio" name="conocimientosFinancieros" value="0" required> No

    <label for="objetivosCortoPlazo">Objetivos financieros a corto plazo:</label>
    <input type="text" name="objetivosCortoPlazo">

    <label for="objetivosLargoPlazo">Objetivos financieros a largo plazo:</label>
    <input type="text" name="objetivosLargoPlazo">

    <label for="cantidadDinero">Cantidad de dinero disponible para invertir:</label>
    <input type="number" name="cantidadDinero" step="0.01">

     <!-- Nuevos campos para mediaI, desviacionEI, mediaF, y desviacionEF -->
     <label for="mediaI">Media I:</label>
    <input type="number" name="mediaI" required>

    <label for="desviacionEI">Desviación EI:</label>
    <input type="number" name="desviacionEI" required>
    
    <label for="activosInteresados">Tipos de activos en los que están interesados:</label>
    <input type="checkbox" name="activosInteresados[]" value="Acciones"> Acciones
    <input type="checkbox" name="activosInteresados[]" value="BienesRaices"> Bienes Raíces
    <input type="checkbox" name="activosInteresados[]" value="Bonos"> Bonos

    <label for="plazoInversion">Plazo de inversión preferido:</label>
    <input type="number" name="plazoInversion" required>

    <label for="ingresosMensuales">Ingresos mensuales:</label>
    <input type="number" name="ingresosMensuales" step="0.01" required>

    <label for="gastosMensuales">Gastos mensuales:</label>
    <input type="number" name="gastosMensuales" step="0.01" required>

    <label for="deudasExistentes">Deudas existentes:</label>
    <input type="number" name="deudasExistentes" step="0.01" required>

    <label for="conoceNegocio">¿Conoce el negocio en el que está interesado?</label>
    <input type="radio" name="conoceNegocio" value="1" required> Sí
    <input type="radio" name="conoceNegocio" value="0" required> No

    <label for="investigadoIndustria">¿Ha investigado sobre la industria?</label>
    <input type="radio" name="investigadoIndustria" value="1" required> Sí
    <input type="radio" name="investigadoIndustria" value="0" required> No

    <label for="comentariosAdicionales">Comentarios Adicionales:</label>
    <textarea name="comentariosAdicionales" rows="4" cols="50"></textarea>
    
     <label for="flujoNetoPeriodoT">Flujo Neto Periodo T:</label>
    <input type="number" name="flujoNetoPeriodoT" step="0.01">

    <label for="mediaF">Media F:</label>
    <input type="number" name="mediaF" required>

    <label for="desviacionEF">Desviación EF:</label>
    <input type="number" name="desviacionEF" required>
    
    <input type="submit" value="Enviar">
    <a class="header-btn" href="listaformulario.php">Cancelar</a>
</form>

</body>
</html>





