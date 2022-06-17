<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicionales Anidadas</title>
</head>
<body>
    
<?php 

$edad= 48;
$edoCivil= "Soltero";

if($edad<40){

print "disfrute nuestro crucero en el Caribe";
if($edoCivil=="casado"){

    print "en compañia de su familia";
}
    print "con un descuento especial y muchas sorpresas";
}
else{

print "Lo invitamos a nuestro retiro al campo";
if($edoCivil=="casado"){

    print "con sus seres queridos";

}
else {
    print "de encontrarse con usted mismo";
}

print "en lo alto de un hermoso lago en las montañas";

}
print "<br>";
print "su edad es de ".$edad." años y su estado civil es ". $edoCivil;



?>

</body>
</html>