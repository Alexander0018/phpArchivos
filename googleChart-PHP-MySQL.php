<?php
  $host = "localhost";
  $usuario = "root";
  $clave = "mysql";
  $db = "escuela";
  //
  $conn = mysqli_connect($host, $usuario, $clave, $db) or die("Error");
  //
  $sql = "SELECT * FROM navegadores";
  //
  $r = mysqli_query($conn, $sql);
?>
<html>
  <head>
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
        data.addColumn('string', 'Navegador');
        data.addColumn('number', 'Porciento');
        data.addRows([
          
        <?php
          $i = 0;
          $n = mysqli_num_rows($r);
          while($row=mysqli_fetch_assoc($r)){
            print "['".$row["navegador"]."', ".$row["porcien"]."]";
            $i++;
            if($i<$n) print ",";
          }
        ?>
         
        ]);

        // Opciones de la gráfica
        var options = {'title':'Participación de los Navegadores',
                      'is3D':true,
                       'width':500,
                       'height':400};

        // Inicia la gráfica
        var chart = new google.visualization.PieChart(document.getElementById('grafica'));
        chart.draw(data, options);
      }
    </script>
  </head>

  <body>
    <!--División para la grafica-->
    <div id="grafica"></div>
  </body>
</html>