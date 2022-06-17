<?php

try {
    $conn= new PDO('sqlite:prueba.db');
} catch (PDOException $e) {
    die("Error".$e->getMessage());
}
try {
    $res= $conn->prepare("SELECT * FROM paises");
    $res->execute();

    print "<table border='1'>";
    print "<tr><th>Pais</th>Area<tr><th>Poblacion</th><tr><th>Densidad</th></tr>";
    while ($r= $res->fetch(PDO::FETCH_ASSOC)) {
      print "<tr>";
      print "<td>".$r["nombre"]."</td>";
      print "<td>".number_format($r["area"])."</td>";
      print "<td>".number_format($r["poblacion"])."</td>";
      print "<td>".number_format($r["densidad"], 2)."</td>";
      print "</tr>";
      
    }
    print "</table>";
} catch (Exception $e) {
   print "Error".$e->getMessage();
}

?>