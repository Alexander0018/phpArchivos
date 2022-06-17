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
  $data = array();
  while($row=mysqli_fetch_assoc($r)){
    array_push($data, $row);
  }
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
       data.addColumn({'type': 'string', 'role': 'tooltip', 'p': {'html': true}});
       data.addColumn('number', 'IE-Edge');
       data.addColumn('number', 'Firefox');
       data.addColumn('number', 'Safari');
       data.addColumn('number', 'Opera');
       data.addRows([
          <?php
            for($i=0; $i<count($data); $i++){
              $cadena = "formaHTML(".$i.",".$data[$i]["Chrome"].", ";
              $cadena .= $data[$i]["IE-Edge"].", ".$data[$i]["Firefox"].", ";
              $cadena .= $data[$i]["Safari"].", ".$data[$i]["Opera"].",'";
              $cadena .= $data[$i]["tooltip1"]."')";
              //
              print "['".$data[$i]["anio"]."', ".$data[$i]["Chrome"].", $cadena , ".$data[$i]["IE-Edge"].", ".$data[$i]["Firefox"].", ".$data[$i]["Safari"].", ".$data[$i]["Opera"]."]";
              if($i<count($data)) print ",";
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
            format: "percent"
          },
          //focusTarget: 'category',
          tooltip: {
            textStyle: {color: 'blue', fontSize:20}, 
            showColorCode: true, 
            isHtml:true
          }
        };
        // Inicia la gráfica
        var chart = new google.visualization.AreaChart(document.getElementById('grafica'));
        chart.draw(data, opciones);
      }
      function formaHTML(i,c,ie,f,s,o,tt){
        return '<div style="padding:5px 5px 5px 5px;">' +
      '<img src="WEB1/imagenes/navegadores'+i+'.jpg" style="width:275px;"><br/>'+
      '<table width=100%>' + '<tr>' +
      '<td width=50%><h2>Chrome</h2></td>' +
      '<td width=50%><h2>' + c + '</h2></td></tr><tr>' +
      '<td><h2>IE-Edge</h2></td>' +
      '<td><h2>' + ie + '</h2></td></tr><tr>' +
      '<td><h2>FireFox</h2></td>' +
      '<td><h2>' + f + '</h2></td></tr><tr>'+
      '<td><h2>Safari</h2></td>' +
      '<td><h2>' + s + '</h2></td></tr><tr>'+
      '<td><h2>Opera</h2></td>' +
      '<td><h2>' + o + '</h2></td></tr></table><h1>'+tt+'</h1></div>';
      }
    </script>
   
  </head>

  <body>
    <!--División para la grafica-->
    <div id="grafica"></div>
  </body>
</html>