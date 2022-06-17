<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formato setlocale()</title>
</head>
<body>
    <?php
    $loc_de= setlocale(LC_ALL, 'de_DE@ero', 'de_DE', 'deu_deu');
    print "La configuracion local en alemán es ".$loc_de;
    
    ?>
</body>
</html>