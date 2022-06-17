<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enviar correo HTML</title>
</head>
<body>
    <?php
    
    $para= "cristo.0311@outlook.com, lolajgh.gmail.com";
    $subject= "Recordatorio de cumpleaños del mes";
    $mensaje="<html>
    <head><title>Recordatorio de cumpleaños del mes de Noviembre</title></head>
    <body><p>Estas son las personas que cumplen años en Noviembre</p>
    <table><tr><th>Colaborador</th><th>Día</th><th>Mes</th><th>Año</tr>
    <tr><td>Jeferson Rodriguez</th><th>4</th><th>Noviembre</th><th>2003</tr>
    <tr><td>Luis</th><th>13</th><th>Enero</th><th>2002</tr>
    <tr><th>Pablo</th><th>10</th><th>Marzo</th><th>1990</tr>
    </table></body></html>";
    
    $cabeceras= "MIME-Version: 1.0"."\r\n";
    $cabeceras .= "Content-type: text/html; charset=iso-8859-1"."\r\n";
    
    $cabeceras .= "To: Jeferson <cristo.0311@outlook.com>, Direccion <cristo.0311@outlook.com>"."\r\n";

    $cabeceras .= "From: Recordatorio <lolajgh@gmail.com"."\r\n";
    $cabeceras .= "Cc: cristo.0311@outlook.com"."\r\n";
    $cabeceras .= "Bcc: lolajgh@gmail.com"."\r\n";
    
    mail($para,$subject,$mensaje,$cabeceras);
    ?>
</body>
</html>