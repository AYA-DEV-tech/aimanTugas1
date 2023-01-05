google.charts.load('current', {packages: ['corechart', 'bar']});
google.charts.setOnLoadCallback(drawColColors);
google.charts.setOnLoadCallback(drawChart);
google.charts.setOnLoadCallback(drawTopX);


    function drawColColors () {
      var data = google.visualization.arrayToDataTable([
        ["Element", "Density", { role: "style" } ],
        ["2021-03-21", 0, "red"],
      ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
        width: 780,
        height: 500,
        bar: {groupWidth: "50%"},
        legend: { position: "none" },
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("chart_div"));
      chart.draw(view, options);
    }

    function drawChart() {

      var data = google.visualization.arrayToDataTable([
        ['Effort', 'Amount given'],
        ["My all",99],
        ["Walk to",1],
      ]);

      var options = {
        pieHole: 0.6,
        pieSliceTextStyle: {
          color: 'white',
        },
        legend: 'none'
      };

      var chart = new google.visualization.PieChart(document.getElementById('donut_single'));
      chart.draw(data, options);
    }

    function drawTopX() {
     

      var data = google.visualization.arrayToDataTable([
        ["Element", "Density", { role: "style" } ],
        ["Today Sales", 0, "skyblue"],
        ["Today Income",0, "mediumseagreen"],
        ["Today Expenses", 0, "orange"],
        ["Today Revenue", 10800, "purple"]
      ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
        width: 790,
        height: 500,
        bar: {groupWidth: "80%"},
        legend: { position: "none" },
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("loh_div"));
      chart.draw(view, options);
    }