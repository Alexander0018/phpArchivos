<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Archivos | Touch | Unlink</title>
</head>
<body>
    <?php
    
     $contador = "contador.txt";
     if (touch($contador)) {
         print "No hubo error con el touch()";
     }
     else {
         print "Existió un error con el touch()";
     }
    if(unlink($contador)){
     print "<br>";
    print "El archivo ".$contador." se borró exitosamente";

    }
    else {
        print "Error al borra el archivo ".$contador;
    }
    
    ?>
</body>
</html>