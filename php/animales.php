<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plantilla animales</title>
    <?php
    if (isset($_GET["animal"])) {
        # code...
        $animal = $_GET["animal"];
        if ($animal==1) {
            # code...
            $titulo= "perro";
            $imagen=  "perro.jpeg"; 
        }
        if ($animal==2) {
            # code...
            $titulo= "gato";
            $imagen=  "gato.jpeg"; 
        }
        if ($animal==3) {
            # code...
            $titulo= "gallo";
            $imagen= "gallo.jpeg"; 
        }
        if ($animal==4) {
            # code...
            $titulo= "manati";
            $imagen=  "manati.jpeg"; 
        }
    }
    
    
    ?>
</head>
<body>
    <h1>Soy un <?php print $titulo;?></h1>
    <img src="<?php print 'imagenes/'.$imagen; ?>">
</body>
</html>