<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicionales Rangos</title>
</head>
<body>
    
<?php 

$edad= 30;
if($edad<=20){

    print "<p>Te regalamos boletos para el cine</p>";
}

if($edad>20 && $edad<=30){

    print "<p>Te regalamos boletos para el concierto de Katy Perry</p>";
}
if($edad>30 && $edad<=40){

    print "<p>Te regalamos boletos para el teatro</p>";
}
if($edad>40){

    print "<p>Te regalamos boletos para la opera</p>";
}



?>

</body>
</html>