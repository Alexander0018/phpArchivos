<?php
  $host = "localhost";
  $usuario = "root";
  $clave = "mysql";
  $db = "escuela";
  //
  $conn = mysqli_connect($host, $usuario, $clave, $db) or die("Error");
  //
  $sql = "SELECT * FROM historicoTabularTooltip ORDER BY anio";
  //
  $r = mysqli_query($conn, $sql);
?>
<html>
  <head>
   <style>
      div{
        height: 500px;
      }
    </style>
    <!--Cargar AJAX API-->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">

      // Carga el API de visualización y el paquete corechart
      google.charts.load('current', {'packages':['corechart']});

      // Define la función callback para crear la gráfica
      google.charts.setOnLoadCallback(grafica);

      // Función para poblar la gráfica
      // iniciar el gráfico, pasa los datos y los dibuja
      function grafica() {

        // Crea la gráfica
       var data = new google.visualization.DataTable();
       data.addColumn('string', 'anio'); 
       data.addColumn('number', 'Chrome'); 
       data.addColumn({type:'string', role:'tooltip'});
       data.addColumn('number', 'IE-Edge');
       data.addColumn('number', 'Firefox');
       data.addColumn('number', 'Safari');
       data.addColumn('number', 'Opera');
       data.addRows([
          <?php
              $i = 0;
              $n = mysqli_num_rows($r);
              while($row=mysqli_fetch_assoc($r)){
                print "['".$row["anio"]."', ".$row["Chrome"].", '".$row["tooltip1"]."', ".$row["IE-Edge"].", ".$row["Firefox"].", ".$row["Safari"].", ".$row["Opera"]."]";
                $i++;
                if($i<$n) print ",";
              }
            ?>
        ]);
        var opciones = {
          title: 'Participación de navegadores de 2008 a 2017',
          isStacked: "relative",
          fontSize:25,
          fontName:"Arial",
          colors:["red", "blue", "green", "violet", "orange"],
          hAxis: {
            title: 'Años',
            titleTextStyle: {color: 'orange', fontSize:30},
            textPosition: "out",
            textStyle: {color:"red", fontSize:20, fontName:"Times",bold:true, italic: true},
            slantedText: true,
            slantedTextAngle:60
          },
          vAxis: {
            title: 'Porcentajes',
            titleTextStyle: {color: '#FF0000', bold:true, fontSize:20, fontName: "Arial"},
            textStyle: {color: '#FF0000', bold:true, fontSize:20, fontName: "Arial"},
            gridlines: {color: 'gray', count: 4},
            //direction: -1,
            //ticks: [0,.22,.55,.78,.99],
            format: "percent"
          },
          tooltip: {textStyle: {color: 'blue', fontSize:20}, showColorCode: true},
          annotations: {
            textStyle: {
              fontName: 'Times-Roman',
              fontSize: 38,
              bold: true,
              italic: false,
              // Color del texto.
              color: 'red',
              // Aura del texto.
              auraColor: 'white',
              // Opacidad.
              opacity: 0.8
            }
          }
        };
        // Inicia la gráfica
        var chart = new google.visualization.AreaChart(document.getElementById('grafica'));
        chart.draw(data, opciones);
      }
    </script>
   
  </head>

  <body>
    <!--División para la grafica-->
    <div id="grafica"></div>
  </body>
</html>