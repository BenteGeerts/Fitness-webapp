let steps = document.querySelectorAll('[data-step-count]');
let dataValues = [];

steps.forEach(step => {
    dataValues.push(step.innerText);
});

new Chart(
    document.getElementById('step-chart'),
    {
        type: 'line',
        data: {
            labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
            datasets: [{
                data: [0, 10, 5, 2, 20, 30, 45, 25, 35, 55, 65, 50],
                borderColor: 'rgba(54, 162, 235, 1)',
                backgroundColor: 'rgba(54, 162, 235, 0)',
                tension: 0.5
            }]
        },
        options: {
            scales: {
                y:{
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
                    enabled: false
                },
                title: {
                    display: false,
                }
            }
        }
    }
);
