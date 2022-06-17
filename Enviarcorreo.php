<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enviar un correo</title>
</head>
<body>
    <?php
    
    $mensaje= "Esta es una prueba, Hola\r\n¿Cómo estás?";
    $mensaje= wordwrap($mensaje,70, "\r\n");
    $para= "cristo.0311@outlook.com";
    $titulo= "Prueba de correo";
    $cabeceras= "From: julianalejandrogarcia_52@outlook.es\r\n"."Reply-to: cristo.0311@outlook.com\r\n "."X-Mailer: PHP/".phpversion();


    if(mail($para,$titulo,$mensaje, $cabeceras)){
   print "Mensaje Enviado";


    }
    else {
        print "Error al enviar el mensaje";
    }
    
    
    
    
    
    ?>
</body>
</html>