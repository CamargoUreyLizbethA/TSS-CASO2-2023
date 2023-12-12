function generarExcel() {
    const data = obtenerDatosTabla(); // Obtener los datos de la tabla
    const ws = XLSX.utils.json_to_sheet(data); // Convertir los datos a una hoja de cálculo
    const wb = XLSX.utils.book_new(); // Crear un nuevo libro de trabajo
    XLSX.utils.book_append_sheet(wb, ws, "SimulacionDecisiones"); // Agregar la hoja de cálculo al libro
    XLSX.writeFile(wb, 'Excel_Decisiones_inversion.xlsx'); // Descargar el archivo Excel
}
function obtenerDatosTabla() {
    const tabla = document.getElementById("tablaSimulacion");
    const data = [];
    
    for (let i = 1; i < tabla.rows.length; i++) {
        const rowData = {
            "Escenario": tabla.rows[i].cells[0].textContent,
            "Inversión Inicial": tabla.rows[i].cells[1].textContent,
            "Flujo de Caja Neto del Año 1": tabla.rows[i].cells[2].textContent,
            "Flujo de Caja Neto del Año 2": tabla.rows[i].cells[3].textContent,
            "Flujo de Caja Neto del Año 3": tabla.rows[i].cells[4].textContent,
            "Flujo de Caja Neto del Año 4": tabla.rows[i].cells[5].textContent,
            "Flujo de Caja Neto del Año 5": tabla.rows[i].cells[6].textContent,
            "TIR": tabla.rows[i].cells[7].textContent,
            "APROBADO": tabla.rows[i].cells[8].textContent,
        };
        data.push(rowData);
    }
    
    return data;
    }