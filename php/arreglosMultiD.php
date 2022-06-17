<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arreglos Multidimensionales</title>
</head>
<body>
    <?php
    
    
    $ciudades= array(

       array("Mexico", "CDMX", "GUADALAJARA", "MONTERREY"),
       array("España", "Madrid", "Barcelona", "Bilbao"),
       array("Colombia", "Bogotá", "Bucaramanga", "Medellin"),
       array("Perú", "Lima", "Cuzco", "Arequipa")


    );

    for($i=0; $i<count($ciudades); $i++){


        print "<ul>";

        for($j=0; $j<count($ciudades[$i]); $j++){

 
            print "<li>".$ciudades[$i][$j]."</li>";
         
             }
    }
   
print "</ul>";
    
    
    ?>
</body>
</html>