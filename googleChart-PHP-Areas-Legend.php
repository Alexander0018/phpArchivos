<?php
  $host = "localhost";
  $usuario = "root";
  $clave = "mysql";
  $db = "escuela";
  //
  $conn = mysqli_connect($host, $usuario, $clave, $db) or die("Error");
  //
  $sql = "SELECT * FROM historicoTabular ORDER BY anio";
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
        var data = google.visualization.arrayToDataTable([
          ["Año","Chrome","IE-Edge","Firefox","Safari","Opera"],
            <?php
              $i = 0;
              $n = mysqli_num_rows($r);
              while($row=mysqli_fetch_assoc($r)){
                print "['".$row["anio"]."', ".$row["Chrome"].", ".$row["IE-Edge"].", ".$row["Firefox"].", ".$row["Safari"].", ".$row["Opera"]."]";
                $i++;
                if($i<$n) print ",";
              }
            ?>
        ]);

        var opciones = {
          title: 'Participación de navegadores de 2008 a 2017',
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
            titleTextStyle: {color: '#FF0000', bold:true, fontSize:20, fontName: "Arial"}
          },
          height:800,
          legend:{
            alignment: "center", 
            position:"bottom", 
            textStyle:{color:"blue", fontSize:30, bold:true, italic:true}
          },
          series: {
            0: { lineDashStyle: [1, 1] },
            1: { lineDashStyle: [2, 2] },
            2: { lineDashStyle: [4, 4] },
            3: { lineDashStyle: [5, 1, 3] },
            4: { lineDashStyle: [4, 1] },
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