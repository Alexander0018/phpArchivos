<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones | Generadores delegados</title>
</head>
<body>
    <?php
    
    
    
    function gen()
    {
       yield 1;
       yield 2;
       yield from gen2();
    }
    function gen2()
    {
       yield 3;
       yield 4;
    }
    
    foreach (gen() as  $val) {
        print $val." ";
    }

    print "<hr>";

    function americaNorte()
    {
       yield "Canadá";
       yield "México";
    }

    function americaCentral()
    {
       yield "Costa Rica";
       yield "Honduras";
    }
    function americaSur()
    {
       yield "Colombia";
       yield "Perú";
    }

    function capitalesAmerica()
    {
       yield from americaNorte();
       yield from americaCentral();
       yield from americaSur();
    }

    foreach (capitalesAmerica() as  $val) {
        print $val."<br> ";
    }

    ?>
</body>
</html>