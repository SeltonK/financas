      google.setOnLoadCallback(drawStuff);
      function drawStuff() {
      	var jsonData = $.ajax({
          url: "data.php",
          dataType:"json",
          async: false
          }).responseText;
        var obj = eval("(" + jsonData + ")");
        var data = new google.visualization.DataTable(obj);

        var options = {
          width: 900,
          chart: {
            title: 'Receitas/Despesas',
            subtitle: ''
          },
          bars: 'horizontal', // Required for Material Bar Charts.
          series: {
            0: { axis: 'distance' }, // Bind series 0 to an axis named 'distance'.
            1: { axis: 'brightness' } // Bind series 1 to an axis named 'brightness'.
          }
        };

      var chart = new google.charts.Bar(document.getElementById('dual_x_div'));
      chart.draw(data, options);
    };