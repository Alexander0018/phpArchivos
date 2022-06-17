<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicionales</title>
</head>
<body>
    
<?php 
$edad= 18;

if($edad>40){


    print "<p>Lo sentimos no puedes entrar a nuestra págin</p>";
}
else if($edad>30){
    print "<p>Bienvenido a nuestra página</p>";

}

else if($edad>18){
    print "<p>Bienvenido a nuestra página, cumples los requisitos</p>";

    
}
else {

    print "<p>Lo sentimos no puedes entrar a nuestra págin</p>";
}



?>
</body>
</html>