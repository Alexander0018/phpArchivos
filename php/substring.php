<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadenas | Substr</title>
</head>
<body>
    <?php
    
    $mail = "esteesmiemail@hotmail.com";
    $arroba= strpos($mail, "@");
    $arroba++;
    $punto= strpos($mail, ".", $arroba);
    $lon= $punto-$arroba;
    $servicio= substr($mail,$arroba, $lon);
    $com= substr($mail, -3);
    print "<p>La arroba se encuentra en: ".$arroba."</p>";
    print "<p>El punto se encuentra en: ".$punto."</p>";
    print "<p>La longitud es: ".$lon."</p>";
    print "<p>El servicio es: ".$servicio."</p>";
    print "<p>La extensión del correo es: ".$com."</p>";
    
    
    ?>
</body>
</html>