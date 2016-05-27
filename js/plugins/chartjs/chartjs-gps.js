 //Sampel Line Chart
 var LineChartSampleData = {
  labels: ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho"],
  datasets: [{
   label: "My First dataset",
   fillColor: "rgba(220,220,220,0.2)",
   strokeColor: "rgba(220,220,220,1)",
   pointColor: "rgba(220,220,220,1)",
   pointStrokeColor: "#fff",
   pointHighlightFill: "#fff",
   pointHighlightStroke: "rgba(220,220,220,1)",
   data: [65, 59, 80, 81, 56, 55, 40]
  }, {
   label: "My Second dataset",
   fillColor: "rgba(151,187,205,0.2)",
   strokeColor: "rgba(151,187,205,1)",
   pointColor: "rgba(151,187,205,1)",
   pointStrokeColor: "#fff",
   pointHighlightFill: "#fff",
   pointHighlightStroke: "rgba(151,187,205,1)",
   data: [28, 48, 40, 19, 86, 27, 90]
  }]
 };

 //Sampel Bar Chart
 var BarChartSampleData = {
    labels: ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho"],
    datasets: [
        {
            label: "My First dataset",
            fillColor: "rgba(220,220,220,0.5)",
            strokeColor: "rgba(220,220,220,0.8)",
            highlightFill: "rgba(220,220,220,0.75)",
            highlightStroke: "rgba(220,220,220,1)",
            data: [65, 59, 80, 81, 56, 55, 40]
        },
        {
            label: "My Second dataset",
            fillColor: "rgba(151,187,205,0.5)",
            strokeColor: "rgba(151,187,205,0.8)",
            highlightFill: "rgba(151,187,205,0.75)",
            highlightStroke: "rgba(151,187,205,1)",
            data: [28, 48, 40, 19, 86, 27, 90]
        }
    ]
};


//Sampel Radar Chart
var RadarChartSampleData = {
    labels: ["Aceleração", "Passe", "Cabeceio", "Chutes a gol", "Passes Errados", "Assistências", "Velocidade"],
    datasets: [
        {
            label: "My First dataset",
            fillColor: "rgba(220,220,220,0.2)",
            strokeColor: "rgba(220,220,220,1)",
            pointColor: "rgba(220,220,220,1)",
            pointStrokeColor: "#fff",
            pointHighlightFill: "#fff",
            pointHighlightStroke: "rgba(220,220,220,1)",
            data: [65, 59, 90, 81, 56, 55, 40]
        },
        {
            label: "My Second dataset",
            fillColor: "rgba(151,187,205,0.2)",
            strokeColor: "rgba(151,187,205,1)",
            pointColor: "rgba(151,187,205,1)",
            pointStrokeColor: "#fff",
            pointHighlightFill: "#fff",
            pointHighlightStroke: "rgba(151,187,205,1)",
            data: [28, 48, 40, 19, 96, 27, 100]
        }
    ]
};

//Sampel Polor Chart
var PolarChartSampleData = [
    {
        value: 300,
        color:"#F7464A",
        highlight: "#FF5A5E",
        label: "Aceleração"
    },
    {
        value: 50,
        color: "#46BFBD",
        highlight: "#5AD3D1",
        label: "Desaceleração"
    },
    {
        value: 100,
        color: "#FDB45C",
        highlight: "#FFC870",
        label: "Velocidade"
    },
    {
        value: 40,
        color: "#949FB1",
        highlight: "#A8B3C5",
        label: "Média"
    },
    {
        value: 120,
        color: "#4D5360",
        highlight: "#616774",
        label: "Distância"
    }

];

//Sampel Pie Doughnut Chart
var PieDoughnutChartSampleData = [
    {
        value: 300,
        color:"#F7464A",
        highlight: "#FF5A5E",
        label: "Red"
    },
    {
        value: 50,
        color: "#46BFBD",
        highlight: "#5AD3D1",
        label: "Green"
    },
    {
        value: 100,
        color: "#FDB45C",
        highlight: "#FFC870",
        label: "Yellow"
    }
]

 window.onload = function() {

  window.BarChartSample = new Chart(document.getElementById("bar-chart-sample").getContext("2d")).Bar(BarChartSampleData,{
   responsive:true
  });

  window.RadarChartSample = new Chart(document.getElementById("radar-chart-sample").getContext("2d")).Radar(RadarChartSampleData,{
   responsive:true
  });

  window.PolarChartSample = new Chart(document.getElementById("polar-chart-sample").getContext("2d")).PolarArea(PolarChartSampleData,{
   responsive:true
  });

  window.PieChartSample = new Chart(document.getElementById("pie-chart-sample").getContext("2d")).Pie(PieDoughnutChartSampleData,{
   responsive:true
  });
  window.DoughnutChartSample = new Chart(document.getElementById("doughnut-chart-sample").getContext("2d")).Pie(PieDoughnutChartSampleData,{
   responsive:true
  });


 };


 //ADVANCED SMIL ANIMATIONS
 var chart = new Chartist.Line('#ct4-chart', {
   labels: ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12'],
   series: [
     [12, 9, 7, 8, 5, 4, 6, 2, 3, 3, 4, 6],
     [4,  5, 3, 7, 3, 5, 5, 3, 4, 4, 5, 5],
     [5,  3, 4, 5, 6, 3, 3, 4, 5, 6, 3, 4],
     [3,  4, 5, 6, 7, 6, 4, 5, 6, 7, 6, 3]
   ]
 }, {
   low: 0
 });

 // Let's put a sequence number aside so we can use it in the event callbacks
 var seq = 0,
   delays = 80,
   durations = 500;

 // Once the chart is fully created we reset the sequence
 chart.on('created', function() {
   seq = 0;
 });

 // On each drawn element by Chartist we use the Chartist.Svg API to trigger SMIL animations
 chart.on('draw', function(data) {
   seq++;

   if(data.type === 'line') {
     // If the drawn element is a line we do a simple opacity fade in. This could also be achieved using CSS3 animations.
     data.element.animate({
       opacity: {
         // The delay when we like to start the animation
         begin: seq * delays + 1000,
         // Duration of the animation
         dur: durations,
         // The value where the animation should start
         from: 0,
         // The value where it should end
         to: 1
       }
     });
   } else if(data.type === 'label' && data.axis === 'x') {
     data.element.animate({
       y: {
         begin: seq * delays,
         dur: durations,
         from: data.y + 100,
         to: data.y,
         // We can specify an easing function from Chartist.Svg.Easing
         easing: 'easeOutQuart'
       }
     });
   } else if(data.type === 'label' && data.axis === 'y') {
     data.element.animate({
       x: {
         begin: seq * delays,
         dur: durations,
         from: data.x - 100,
         to: data.x,
         easing: 'easeOutQuart'
       }
     });
   } else if(data.type === 'point') {
     data.element.animate({
       x1: {
         begin: seq * delays,
         dur: durations,
         from: data.x - 10,
         to: data.x,
         easing: 'easeOutQuart'
       },
       x2: {
         begin: seq * delays,
         dur: durations,
         from: data.x - 10,
         to: data.x,
         easing: 'easeOutQuart'
       },
       opacity: {
         begin: seq * delays,
         dur: durations,
         from: 0,
         to: 1,
         easing: 'easeOutQuart'
       }
     });
   } else if(data.type === 'grid') {
     // Using data.axis we get x or y which we can use to construct our animation definition objects
     var pos1Animation = {
       begin: seq * delays,
       dur: durations,
       from: data[data.axis.units.pos + '1'] - 30,
       to: data[data.axis.units.pos + '1'],
       easing: 'easeOutQuart'
     };

     var pos2Animation = {
       begin: seq * delays,
       dur: durations,
       from: data[data.axis.units.pos + '2'] - 100,
       to: data[data.axis.units.pos + '2'],
       easing: 'easeOutQuart'
     };

     var animations = {};
     animations[data.axis.units.pos + '1'] = pos1Animation;
     animations[data.axis.units.pos + '2'] = pos2Animation;
     animations['opacity'] = {
       begin: seq * delays,
       dur: durations,
       from: 0,
       to: 1,
       easing: 'easeOutQuart'
     };

     data.element.animate(animations);
   }
 });

 // For the sake of the example we update the chart every time it's created with a delay of 10 seconds
 chart.on('created', function() {
   if(window.__exampleAnimateTimeout) {
     clearTimeout(window.__exampleAnimateTimeout);
     window.__exampleAnimateTimeout = null;
   }
   window.__exampleAnimateTimeout = setTimeout(chart.update.bind(chart), 12000);
 });
