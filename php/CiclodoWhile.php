<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ciclo do while</title>
</head>
<body>
    <?php 
    
    $numero= 20;

    $binario= "";

    do{
   
        $d= $numero % 2 ;

        $binario= $d.$binario;
        $numero= intval($numero/2);

    } while($numero>=2);
    
    
    $binario= $numero.$binario;
    print "<p>El número binario es ".$binario."</p>";
    
    ?>
</body>
</html>