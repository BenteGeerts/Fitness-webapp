let steps = document.querySelectorAll('[data-step-count]');
let dates = document.querySelectorAll('[data-step-date]');

let currentDay = document.querySelector('[data-current-steps]');

const dataSteps = [];
const dataDates = [];

steps.forEach(step => {
    dataSteps.push(step.innerText);
});

dates.forEach(step => {
    dataDates.push(step.innerText);
});


var lastItem = steps[steps.length - 1];

if(lastItem != undefined)
{
    currentDay.innerHTML = lastItem.innerText + "<br>Steps</br>";
}

import Chart from 'chart.js/auto';

const chart = new Chart(
    document.getElementById('step-chart'),
    {
        type: 'line',
        data: {
            labels: dataDates,
            datasets: [{
                data: dataSteps,
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
