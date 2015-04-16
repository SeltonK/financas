      google.setOnLoadCallback(drawStuff);
      function drawStuff() {
        var jsonData = $.ajax({
          url: "data.php",
          dataType:"json",
          async: false
          }).responseText;
        var obj = window.JSON.stringify(jsonData);
        var data = new google.visualization.DataTable(obj);

        var options = {
          width: 900,
          chart: {
            title: 'Ranking geral',
            subtitle: ''
          },
          bars: 'horizontal', // Required for Material Bar Charts.
          
          
        };

      var chart = new google.charts.Bar(document.getElementById('dual_x_div'));
      chart.draw(data, options);
    };