<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo | Estados</title>

    <?php
    
    if (isset($_POST["estado"])) {
        $tc= 18.90;
        $cantidad= $_POST["cantidad"];
        $tipo= $_POST["tipo"];
        if ($tipo=="1") {
            $r= $cantidad * $tc;
            $rc= number_format($r, 2);
            print "La cantidad es $ ".$rc." de pesos mexicanos por ".number_format($cantidad, 2)." de dólares americanos al tipo de cambio de ".number_format($tc,2);

        }
        if ($tipo=="2") {
            $tcd= 1 / $tc;
            $r= $cantidad / $tc;
            $rc= number_format($r, 2);
            print "La cantidad es $".$rc." de dolares por".number_format($cantidad, 2)." de pesos mexicamos al tipo de cambio de".number_format($tcd,2);
            
        }
    }
    
    print "<br><br>";
    
    
    ?>
</head>
<body>
    <form method="post" action="estados.php">
     <label>Introduzca la cantidad a convertir:</label>
     <input type="text" name="cantidad" size="10"/>
     <br><br>
      <input type="radio" name="tipo" value="1" checked="checked"/> Dólares<br>
      <input type="radio" name="tipo" value="2" /> Pesos Mexicanos <br>
      <input type="hidden" name="estado" value="1"/><br>
      <input type="submit" value="Convertir"><br>

     



    </form>
</body>
</html>