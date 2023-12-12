function generarPDF() {
    const element = document.getElementById("contenido-pdf");
    // Esperar un breve momento para que las operaciones asíncronas se completen
    setTimeout(function () {
        const pdfOptions = {
            margin: 10,
            filename: 'simulacion_decisiones_inversion.pdf',
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
