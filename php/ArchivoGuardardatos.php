<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Archivos | Guardar Datos | añadir datos | Proteger archivos flock()</title>
</head>
<body>
    <?php
    
    $archivo= "datos.txt";
    if (touch($archivo)) {
        $bandera = false;
        $max=100000;
        $contador= 0;
        while (!$bandera) {
            if (is_writable($archivo)) {
                $bandera= true;
                break;
            }
            $contador++;
            if ($contador>$max) {
                break;
            }
        }
        if ($bandera) {
            //primera parte
        $linea1= "En el  agua clara, \n";
        $linea2= "que brota en la fuente,\n";
        $linea3= "un lindo pescasito,\n";
        $linea4= "sale de repente.\n";
        //
        $id= fopen($archivo, "w");
        //
        flock($id,2);
        //Hacemos el archivo exclusivo
        fwrite($id, $linea1);
        fwrite($id, $linea2);
        fwrite($id, $linea3);
        fwrite($id, $linea4);
        //
        fclose($id);

        $linea1= "Lindo pescadito, \n";
        $linea2= "no quieres salir,\n";
        $linea3= "a jugar con mi aro,\n";
        $linea4= "vamos al jardin.\n";
        //
        $id= fopen($archivo, "a");
        //
        fwrite($id, $linea1);
        fwrite($id, $linea2);
        fwrite($id, $linea3);
        fwrite($id, $linea4);
        //
        fclose($id);
        flock($id,3);
        }
       
        //
        $id = fopen($archivo, "r");
        while (!feof($id)) {
            $linea= fgets($id, 1024);
            print "<p>".$linea."</p>";
        }
        fclose($id);
    } else {
    print "Error al manipular el archivo";
    }
    
    
    
    
    ?>
</body>
</html>