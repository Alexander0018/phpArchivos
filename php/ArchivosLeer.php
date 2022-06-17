<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DArchivos | lee archivo</title>
</head>
<body>
    <?php
    
    $archivo= "datos.txt";
    if (touch($archivo)) {
        $id= fopen($archivo, "r");
        //ciclo de lectura del archivo
        while (!feof($id)) {
            //leemos un registro a la vez newline
          $linea= fgets($id, 1024);

          print "<p>".$linea."</p>";
        }

        fclose($id);
    } else {
      print "<p> Error al acceder al archivo/p>";
    }
    
    
    
    ?>
</body>
</html>