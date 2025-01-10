/* ----- Employee Dashboard Chart Js For Applications Statistics ----- */
function createConfig() {
    return {
        type: 'line',
        data: {
            labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
            datasets: [{
                label: 'Dataset',
                borderColor: window.chartColors.red,
                backgroundColor: window.chartColors.red,
                data: [10, 30, 46, 2, 8, 150, 0],
                fill: false,
            }]
        },
        options: {
            responsive: true,
            title: {
                display: true,
                text: 'Sample tooltip with border'
            },
            tooltips: {
                position: 'nearest',
                mode: 'index',
                intersect: false,
                yPadding: 10,
                xPadding: 10,
                caretSize: 8,
                backgroundColor: 'rgba(72, 241, 12, 1)',
                titleFontColor: window.chartColors.black,
                bodyFontColor: window.chartColors.black,
                borderColor: 'rgba(0,0,0,1)',
                borderWidth: 4
            },
        }
    };
}
window.onload = function() {
    var c_container = document.querySelector('.c_container');
    var div = document.createElement('div');
    div.classList.add('chart-container');

    var canvas = document.createElement('canvas');
    div.appendChild(canvas);
    c_container.appendChild(div);

    var ctx = canvas.getContext('2d');
    var config = createConfig();
    new Chart(ctx, config);
};

// Circle Doughnut Chart
var ctx = document.getElementById('myChart').getContext('2d');
var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'doughnut',

    // The data for our dataset
    data: {
        labels: [' Principal and Interest $23,565', 'HOA Dues $2,036', 'Property Taxes $1,068'],
        datasets: [{
            label: 'My First dataset',
            segmentShowStroke : true,
            segmentStrokeColor : "transparent",
            segmentStrokeWidth : 17,
            backgroundColor: ["#1BC4BD", "#E5EAEE", "rgba(255,99,132,0.2)"],
            data: [50, 25, 25],
            responsive: true,
            showScale: true
        }]
    },

    // Configuration options go here
    options: {}
});


// LineChart Style 2
    var ctx = document.getElementById('myChartweave').getContext('2d');
    var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'line', // also try bar or other graph types

    // The data for our dataset
    data: {
        labels: ["2017", "2018", "2019", "2020", "2021", "2022"],
        // Information about the dataset
    datasets: [{
            label: "Dataset",
            backgroundColor: 'rgba(255,99,132,0.2)',
            borderColor: '#EB6753',
            data: [50, 150, 200, 240, 290, 330],
        }]
    },

    // Configuration options
    options: {
    layout: {
      padding: 10,
    },
        legend: {
            position: 'top',
        },
        title: {
            display: false,
            text: 'Precipitation in Toronto'
        },
        scales: {
            yAxes: [{
                scaleLabel: {
                    display: false,
                    labelString: 'Precipitation in mm'
                }
            }],
            xAxes: [{
                scaleLabel: {
                    display: false,
                    labelString: 'Month of the Year'
                }
            }]
        }
    }
});

// BarChart Style
// var data = {
//   labels: ["1 Aug", "8 Aug", "15 Aug", "22 Aug", "29 Aug", "5 Sep", "12 Sep"],
//   datasets: [{
//     label: "",
//     backgroundColor: "#1BC4BD",
//     borderColor: "rgba(255,99,132,1)",
//     borderWidth: 0,
//     hoverBackgroundColor: "rgba(255,99,132,0.4)",
//     hoverBorderColor: "rgba(255,99,132,1)",
//     data: [0, 30, 60, 90, 120, 150],
//   }]
// };

// var options = {
//   maintainAspectRatio: false,
//   scales: {
//     yAxes: [{
//       stacked: true,
//       gridLines: {
//         display: true,
//         color: "rgba(255,99,132,0.2)"
//       }
//     }],
//     xAxes: [{
//       gridLines: {
//         display: false
//       }
//     }]
//   }
// };

// Chart.Bar('chart', {
//   options: options,
//   data: data
// });

/* Double Bar Chart */
var ctx = document.getElementById("doublebar-chart").getContext('2d');
var myChart = new Chart(ctx, {
  type: 'bar',
  data: {
    labels: ["1 Aug", "8 Aug", "15 Aug", "22 Aug", "29 Aug", "05 Sep"],
    datasets: [{
      label: 'Aqua',
      data: [70, 95, 125, 100, 120, 140, 0],
      backgroundColor: "#1BC4BD"
    }, {
      label: 'Gray',
      data: [60, 80, 110, 85, 110, 130, 0],
      backgroundColor: "#E5EAEE"
    }]
  }
});