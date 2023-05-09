let steps = document.querySelectorAll('[data-step-count]');
let dataValues = [];

steps.forEach(step => {
    dataValues.push(step.innerText);
});

const chart = new Chart(
    document.getElementById('step-chart'),
    {
        type: 'line',
        data: {
            labels: ["02", "03", "04", "05", "06", "07", "08"],
            datasets: [{
                data: [1400, 6000, 5000, 10236, 200, 8900, 4125],
                borderColor: 'rgba(54, 162, 235, 1)',
                backgroundColor: 'rgba(54, 162, 235, 0)',
                tension: 0.5
            }]
        },
        options: {
            width: 'auto',
            height: 'auto',
            scales: {
                y: {
                    grid: {
                        display: false
                    },
                    ticks: {
                        display: false
                    }
                },
                x: {
                    grid: {
                        display: false
                    },
                    ticks: {
                        font: {
                            size: 16,
                            family: "Inter",
                        }
                    }
                }
            },
            elements: {
                line: {
                    borderWidth: 3,
                    fill: true,
                    stepped: false,
                    borderCapStyle: 'round',
                },
                point: {
                    radius: 0
                }
            },
            plugins: {
                legend: {
                    display: false
                },
                tooltips: {
                    mode: 'nearest',
                    intersect: true,
                    callbacks: {
                        label: function(tooltipItem, data) {
                            return data.datasets[0].data[tooltipItem.index];
                        }
                    },
                },
                title: {
                    display: false,
                },
            },
            hover: {
                mode: 'nearest',
                intersect: false
            },
        }
    }
);
