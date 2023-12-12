function generarGrafico() {
    // Crear un canvas con el tamaño deseado en píxeles
    const canvas = document.createElement("canvas");
    canvas.id = "graficoTIR";
    canvas.width = 354; // Aproximadamente 5 cm en píxeles (1 cm = 28.35 píxeles)
    canvas.height = 354; // Aproximadamente 5 cm en píxeles (1 cm = 28.35 píxeles)
    document.body.appendChild(canvas);

    // Crear el gráfico en el canvas
    new Chart(canvas, {
        type: 'bar',
        data: {
            labels: Array.from({ length: tirArray.length }, (_, i) => `Escenario ${i + 1}`),
            datasets: [{
                label: 'TIR',
                backgroundColor: '#1f8dd6',
                borderColor: '#002a4c',
                data: tirArray,
            }]
        },
        options: {
            plugins: {
                title: {
                    display: true,
                    text: 'Distribución acumulada de la tasa interna de rendimiento',
                    font: {
                        size: 16,
                        weight: 'bold'
                    }
                }
            },
            responsive: false, // Desactivar la respuesta automática al tamaño de la ventana
            maintainAspectRatio: false,
            scales: {
                y: {
                    beginAtZero: true,
                    max: 100, // Ajusta el rango del eje y según tus necesidades
                }
            }
        }
    });
}