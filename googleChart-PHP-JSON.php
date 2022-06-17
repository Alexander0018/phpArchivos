<?php
  $archivo = "navegadores.json";

  if (!file_exists($archivo))
      exit("No existe el archivo");

  $data = file_get_contents($archivo);
  $json = json_decode($data, true);
?>
<html>
  <head>
    <style>
      body{ width:500px; margin:0 auto; }
      div{ float:left; }

    </style>
    <!--Cargar AJAX API-->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">

      // Carga el API de visualización y el paquete corechart
      google.charts.load('current', {'packages':['corechart']});

      // Define la función callback para crear la gráfica
      google.charts.setOnLoadCallback(navegadores);

      // Función para poblar la gráfica
      // iniciar el gráfico, pasa los datos y los dibuja
      function navegadores() {

        // Crea la gráfica
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Navegador');
        data.addColumn('number', 'Porcien');
        data.addRows([
          
        <?php
          //
          for($i=0; $i<count($json); $i++){
            print "['".$json[$i]['navegador']."', ".$json[$i]['porcien']."]";
            if($i<count($json)) print ",";
          }
        ?>
         
        ]);

        // Opciones de la gráfica
        var opciones = {'title':'Participación de los navegadores 2017',
                      'is3D':true,
                       'width':500,
                       'height':400};

        // Inicia la gráfica
        var chart = new google.visualization.PieChart(document.getElementById('navegadores'));
        chart.draw(data, opciones);
      }
    </script>
  </head>

  <body>
    <!--División para la grafica-->
    <div id="navegadores"></div>
  </body>
</html>