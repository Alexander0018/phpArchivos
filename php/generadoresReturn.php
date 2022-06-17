<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones | Generadores Return</title>
</head>
<body>
    <?php 
  
   $gen= (function()
   {
    yield 1;
    yield 2;
    return 3;
   })();
    foreach ($gen as $value) {
        print $value."<br>";
    }
    print $gen->getReturn()."<br>";
    
    
    ?>
</body>
</html>