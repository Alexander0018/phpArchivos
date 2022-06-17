<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones matemáticas | Funciones CSPRNG</title>
</head>
<body>
    <?php
    
    $bytes= random_bytes(10);
    print bin2hex($bytes);
    print "<hr>";
    print random_int(0,1024);
    print "<hr>";
    print random_int(-1024,1024);



    
    
    
    ?>
</body>
</html>