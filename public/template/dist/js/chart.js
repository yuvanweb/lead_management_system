var donutData        = {
  labels: [
      'Chrome',
      'IE',
      'FireFox',
      'Safari',
      'Opera',
      'Navigator',
  ],
  datasets: [
    {
      data: [700,500,400,600,300,100],
      backgroundColor : ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
    }
  ]
}

var donutData1        = {
  labels: [
      'Chrome',
      'IE',
      'FireFox',
      'Safari',
      'Opera',
      'Navigator',
  ],
  datasets: [
    {
      data: [700,500,400,600,300,100],
      backgroundColor : ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
    }
  ]
}


var pieChartCanvas = $('#pieChart').get(0).getContext('2d');
console.log(pieChartCanvas);
var pieData        = donutData;
var pieOptions     = {
  maintainAspectRatio : false,
  responsive : true,
}


//Create pie or douhnut chart
// You can switch between pie and douhnut using the method below.
new Chart(pieChartCanvas, {
  type: 'pie',
  data: pieData,
  options: pieOptions
})

////////////////////////////////////////////////////////////////
/* var pieChartCanvas1 = $('#pieChartsales').get(0).getContext('2d');
console.log(pieChartCanvas1);
var pieData1        = donutData1;
var pieOptions1     = {
  maintainAspectRatio : false,
  responsive : true,
}


//Create pie or douhnut chart
// You can switch between pie and douhnut using the method below.
new Chart(pieChartCanvas1, {
  type: 'pie',
  data: pieData1,
  options: pieOptions1
}) */