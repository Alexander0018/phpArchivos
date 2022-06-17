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
          isStacked:"percent",
          areaOpacity: 1,
          backgroundColor: {stroke: "black", strokeWidth:10, fill:"cyan"},
          hAxis: {title: 'Años',  titleTextStyle: {color: '#333'}},
          vAxis: {title: 'Porcentajes', titleTextStyle: {color: '#FF0000'}}
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