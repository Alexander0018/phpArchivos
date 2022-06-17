<?php
  //archivo a leer
  $archivo = "navegadores.xml";
  //Verificar que exista el archivo
  if (!file_exists($archivo)) {
    exit("El archivo no existe");
  }
  //Abrir el archivo
  $xml = XMLReader::open($archivo);
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

        // Crea la tabla de la gráfica
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Navegador');
        data.addColumn('number', 'Porcien');
        data.addRows([
          
        <?php
          //
          while ($xml->read()) {
            if ($xml->nodeType== XMLReader::ELEMENT && $xml->name == "navegador") {
              $navegador = $xml->getAttribute("nombre");
              $porcien = $xml->getAttribute("porcien");
              print "['".$navegador."', ".$porcien."],";
            }
          }
        ?>
         
        ]);

        // Opciones de la gráfica
        var opciones = {'title':'Participación de los navegadores 2019',
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