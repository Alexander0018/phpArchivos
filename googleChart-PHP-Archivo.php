<?php
  $archivo = 'europa.txt';
  // Leer las líneas del fichero
  $renglones = file($archivo);
  $data = array();
  //
  foreach($renglones as $renglon){
    $data[] = explode(';',trim($renglon));
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
      google.charts.setOnLoadCallback(paises);

      // Define la función callback para crear la gráfica
      google.charts.setOnLoadCallback(capitales);

      // Función para poblar la gráfica
      // iniciar el gráfico, pasa los datos y los dibuja
      function paises() {

        // Crea la tabla de la gráfica
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Pais');
        data.addColumn('number', 'Extension');
        data.addRows([
          
        <?php
          //
          for($i=0; $i<count($data); $i++){
            print "['".$data[$i][0]."', ".$data[$i][2]."]";
            if($i<count($data)) print ",";
          }
        ?>
         
        ]);

        // Opciones de la gráfica
        var opciones = {'title':'Territorio de los países europeos',
                      'is3D':true,
                       'width':500,
                       'height':400};

        // Inicia la gráfica
        var chart = new google.visualization.PieChart(document.getElementById('paises'));
        chart.draw(data, opciones);
      }

      function capitales() {

        // Crea la gráfica
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Capital');
        data.addColumn('number', 'Extension');
        data.addRows([
          
        <?php
          //
          for($i=0; $i<count($data); $i++){
            print "['".$data[$i][1]."', ".$data[$i][3]."]";
            if($i<count($data)) print ",";
          }
        ?>
         
        ]);

        // Opciones de la gráfica
        var opciones = {'title':'Territorio de las capitales europeas',
                      'is3D':true,
                       'width':500,
                       'height':400};

        // Inicia la gráfica
        var chart = new google.visualization.PieChart(document.getElementById('capitales'));
        chart.draw(data, opciones);
      }


    </script>
  </head>

  <body>
    <!--División para la grafica-->
    <div id="paises"></div>
    <div id="capitales"></div>
  </body>
</html>