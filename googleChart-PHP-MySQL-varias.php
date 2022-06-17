<?php
  $host = "localhost";
  $usuario = "root";
  $clave = "mysql";
  $db = "escuela";
  //
  $conn = mysqli_connect($host, $usuario, $clave, $db) or die("Error");
  //
  $sql = "SELECT * FROM historico";
  //
  $r = mysqli_query($conn, $sql);
  $n = mysqli_num_rows($r);
  $datos = array();
  while($row=mysqli_fetch_assoc($r)){
      array_push($datos,$row);  
  }
?>
<html>
  <head>
    <style>
      body{ width:1000px; margin:0 auto; }
      div{ float:left; }

    </style>
    <!--Cargar AJAX API-->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">

      // Carga el API de visualización y el paquete corechart
      google.charts.load('current', {'packages':['corechart']});

      // Define la función callback para crear la gráfica
      google.charts.setOnLoadCallback(grafica2017);

      // Define la función callback para crear la gráfica
      google.charts.setOnLoadCallback(grafica2016);

      // Función para poblar la gráfica
      // iniciar el gráfico, pasa los datos y los dibuja
      function grafica2017() {

        // Crea la gráfica
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Navegador');
        data.addColumn('number', 'Porcien');
        data.addRows([
          
        <?php
          $datos2017 = array();
          //
          for($i=0; $i<count($datos); $i++){
            if($datos[$i]["anio"]==2017 && $datos[$i]["mes"]==4){
              array_push($datos2017, $datos[$i]);
            }
          }
          //
          for($i=0; $i<count($datos2017); $i++){
              print "['".$datos2017[$i]["navegador"]."', ".$datos2017[$i]["porcien"]."]";
              if($i<count($datos2017)) print ",";
          }
        ?>
         
        ]);

        // Opciones de la gráfica
        var opciones = {'title':'Participación de los Navegadores en Abril 2017',
                      'is3D':true,
                       'width':500,
                       'height':400};

        // Inicia la gráfica
        var chart = new google.visualization.PieChart(document.getElementById('grafica2017'));
        chart.draw(data, opciones);
      }

       function grafica2016() {

        // Crea la gráfica
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Navegador');
        data.addColumn('number', 'Porcien');
        data.addRows([
          
        <?php
          $datos2016 = array();
          //
          for($i=0; $i<count($datos); $i++){
            if($datos[$i]["anio"]==2016 && $datos[$i]["mes"]==4){
              array_push($datos2016, $datos[$i]);
            }
          }
          //
          for($i=0; $i<count($datos2016); $i++){
              print "['".$datos2016[$i]["navegador"]."', ".$datos2016[$i]["porcien"]."]";
              if($i<count($datos2016)) print ",";
          }
        ?>
         
        ]);

        // Opciones de la gráfica
        var opciones = {'title':'Participación de los Navegadores en Abril 2016',
                      'is3D':true,
                       'width':500,
                       'height':400};

        // Inicia la gráfica
        var chart = new google.visualization.PieChart(document.getElementById('grafica2016'));
        chart.draw(data, opciones);
      }
    </script>
  </head>

  <body>
    <!--División para la grafica-->
    <div id="grafica2017"></div>
    <div id="grafica2016"></div>
  </body>
</html>