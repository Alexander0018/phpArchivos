<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Archivos | fopen() y fclose()</title>
</head>
<body>
    <?php
    
    
    $archivo= "datos.txt";
    if (touch($archivo)) {
        //abrimos con "a" append
        $id= fopen($archivo, "a");
        var_dump($id);
        //cerramos
        fclose($id);
    } else {
        print "Error en el touch del archivo";
    }
    
    
    
    
    ?>
</body>
</html>